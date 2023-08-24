<?php

if (isset($_POST["reset-password-submit"])) {
	
	$selector = $_POST["selector"];
	$validator = $_POST["validator"];
	$password = $_POST["pwd"];
	$passwordRepeat = $_POST["pwd-repeat"];

	if (empty($password) || empty($passwordRepeat)) {
		header("Location: ../create-new-password.php?newpwd=empty&selector=" .$selector. "&validator=" .$validator);
		exit();
	}elseif ($password != $passwordRepeat) {
		header("Location: ../create-new-password.php?newpwd=pwdnotsame&selector=" .$selector. "&validator=" .$validator);
		exit();
	}

	$currentDate = date("U");

	require 'dbh.inc.php';

	$sql = "SELECT * FROM pwdreset WHERE pwdResetSelector=? AND pwdResetExpires >= ?";
	$stmt = mysqli_stmt_init($conn);
	//mysqli_stmt_prepare($stmt, $sql);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "There was an error !";
		exit();
	} else {
		mysqli_stmt_bind_param($stmt, "s", $selector);
		mysqli_stmt_execute($stmt);

        //$stmt = mysqli_stmt_init($conn);
        //$result = mysqli_stmt::get_result($stmt);
		//$result = $stmt->get_result();
		//don't really know where to place the number of rows from db
		$result = mysqli_stmt_get_result($stmt);
		$row = mysqli_num_rows($result);
		if (!$row == mysqli_fetch_assoc($result)) {
			echo "you need to re-submit your reset request.";
			exit();
		} else {

			$tokenBin = hex2bin($validator);
			$tokenCheck = password_verify($tokenBin, $row["pwdResetToken"]);

			if ($tokenCheck === false) {
				echo "you need to re-submit your reset request.";
				exit();
			} elseif ($tokenCheck === true) {
				
				$tokenEmail = $row['pwdResetEmail'];

				$sql = "SELECT * FROM demo1 WHERE email=?;";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					echo "There was an error !";
					exit();
			} else {
				mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
				mysqli_stmt_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);
				if (!$row = mysqli_fetch_assoc($result)) {
					echo "There was an error!";
					exit();
				} else {

					$sql = "UPDATE demo1 SET password=? WHERE email=?";
					$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					echo "There was an error !";
					exit();
				} else {
					$newPwdHash = password_hash($password, PASSWORD_DEFAULT);
					mysqli_stmt_bind_param($stmt, "ss", $newPwdHash, $tokenEmail );
					mysqli_stmt_execute($stmt);

					$sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					echo "There was an error !";
					exit();
			} else {
				mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
				mysqli_stmt_execute($stmt);
				header("Location: ../login.php?newpwd=passwordupdated");
			}

				}
			}
		}
	}
    }
}


}else {

	header("Location: ../login.php");

}

?>