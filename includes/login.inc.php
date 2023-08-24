<?php 

	if (isset($_POST['login-submit'])) {
		
		require 'dbh.inc.php';
		$mailuid = $_POST['mailuid'];
		$password = $_POST['pwd'];
		if (empty($mailuid) ||  empty($password)) {
			header("location: ../login.php?error=emptyfields");
		exit();
		}
		else {
			$sql = "SELECT * FROM demo1 WHERE username=? OR email=?";
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt, $sql)) {
				header("location: ../login.php?error=sqlerror");
				exit();
			}
			else {

				mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
				mysqli_stmt_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);
				if ($row = mysqli_fetch_assoc($result)) {
					$pwdCheck = password_verify($password, $row['password']);
					if ($pwdCheck == false) {
						header("location: ../login.php?error=wrong password");
						exit();
					}
					elseif ($pwdCheck == true) {
						session_start();
						$_SESSION['id'] = $row['id'];
						$_SESSION['username'] = $row['username'];

						header("location: ../index.php?login=success");
						exit();
					}
					else {
						header("location: ../login.php?wrong password");
						exit();
					}
				}
				else {
					header("location: ../login.php?error=no user");
					exit();
				}
			}
		}

	}
	else {
		header("location: ../login.php?no input");
		exit();
	}


