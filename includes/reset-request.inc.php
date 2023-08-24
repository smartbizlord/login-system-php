<?php  

if (isset($_POST["reset-request-submit"])) {
    
    //link for password reset
	
	
    $bytes = random_bytes(5);
	$token = random_bytes(32);
    $selector = bin2hex(random_bytes(8));

	$url = "localhost/account/create-new-password.php?selector=" .$selector. "&validator=" . bin2hex($token);
    
    //expiry date of the link

	$expires = date("U") + 1800;
    
    //the database connection

	require 'dbh.inc.php';

	$userEmail = $_POST["email"];
    
    //don't really know the function of this code

	$sql = "DELETE FROM pwdreset WHERE pwdResetEmail=?";
	$stmt2 = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES(?,?,?)");
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "There was an error type1!";
		exit();
	}else{
		mysqli_stmt_bind_param($stmt, "s", $userEmail);
		mysqli_stmt_execute($stmt);
		//$stmt->bind_param("s", $userEmail);
		//$stmt->execute();
		//mysqli_stmt_bind_param($stmt, "s", $userEmail);
		//mysqli_stmt_execute($stmt);
	}

	$sql = "INSERT INTO pwdreset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES(?, ?, ?, ?)";
    
    //still don't know what this is for

	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "There was an error type2!";
		exit();
	}else{
		$hashedToken = password_hash($token, PASSWORD_DEFAULT);
		mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
		mysqli_stmt_execute($stmt);
	}

	mysqli_stmt_close($stmt);
	mysqli_close($conn);

	$to = $userEmail;

	$subject = 'reset your password here';

	$message = '<p>the link to reset your password is below</p>';
	$message .= '<p>if you did not request this ignore</p></br>';
	$message .= '<a href="' . $url . '">' . $url . '</a>';
    $link = '<a href="' . $url . '">' . $url . '</a>';

	$headers = "From: dimejilike <amusa.tongil@gmail.com>\r\n";
	$headers .= "Reply Me: amusa.tongil@gmail.com\r\n";
	$headers .= "Content-type: text/html\r\n";

	mail($to, $subject, $message, $headers);
    
    echo $message. "<br>";

	header("Location: ../reset-password.php?reset=success&link=". $link);

}else {
	header("location: ../login.php");
}
