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










?>