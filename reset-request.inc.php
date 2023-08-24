<?php  

if (isset($_POST["reset-request-submit"])) {
	
	$selector = bin2hex(random_bytes(8));
	$token = random_bytes(32);

	$url = "www.dimejilike.online/demo/create-new-password.php?selector=" .$selector. "&validator=" . bin2hex($token);

	$expires = date("U") + 1200;

	require 'dbh.inc.php';

	$userEmail = $_POST["email"];

	$sql = "DELETE FROM passwordReset WHERE pwdResetEmail=?";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "There was an error!";
		exit();
	}else{
		mysqli_stmt_bind_param($stmt, "s", $userEmail);
		mysqli_stmt_execute($stmt);
	}

	$sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) Values(?, ?, ?, ?);";

	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "There was an error!";
		exit();
	}else{
		$hashedToken = password_hash($token, PASSWORD_DEFAULT);
		mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedtoken, $expires);
		mysqli_stmt_execute($stmt);
	}

	mysqli_stmt_close($stmt);
	mysqli_close();

	$to = $userEmail;

	$subject = 'reset your password here';

	$message = '<p>the link to reset your password is below</p>';
	$message .= '<p>if you did not request this ignore</br>';
	$message .= '<a href="' . $url . '">' . $url . '</a></p>';

	$headers = "From: dimejilike <amusa.tongil@gmail.com>\r\n";
	$headers .= "Reply Me: amusa.tongil@gmail.com\r\n";
	$headers .= "Content-type: text/html\r\n";

	mail($to, $subject, $message, $headers);

	header("Location: ../reset-password.php?reset=success");

}else {
	header("location: ../login.php")
}