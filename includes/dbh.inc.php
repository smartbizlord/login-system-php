<?php

$severname = "localhost";
$dBUsername = "Dimeji";
$dBPassword = "bringiton222";
$dBPasswordHashed = "RWBMrmcHqNXWQmtG";
$dBName = "dimejilike";
$dBRootUsername = "root";
$dBRootPassword = "";

$conn = mysqli_connect($severname, $dBRootUsername, $dBRootPassword, $dBName);

if (!$conn) {
	die("connection failed: ".mysqli_connect_error());
}
