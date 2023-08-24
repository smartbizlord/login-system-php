
<?php

require 'dbh.inc.php';

$stmt = mysqli_stmt_init($conn);
$sql = "INSERT INTO pwdreset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) Values(?, ?, ?, ?);";
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "There was an error type1!";
		exit();
	}else {
        echo 'hello';
    }