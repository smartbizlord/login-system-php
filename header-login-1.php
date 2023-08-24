<?php 
session_start();


?>
<!DOCTYPE html>
<html>
<head>
	<title>DEMO</title>
	<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">-->
	<style type="text/css">
		html, body{
			background: #f1f1f1;
			font-family: sans-serif;
			margin: 0;
			height: 100%;
			display: flex;
    		/*min-height: 100vh;*/
    		flex-direction: column;
		}
		main{
			flex: 1 0 auto;
			min-height: 100%;
		}
		header{
			background: #333;
			color: white;
			padding: 25px;
		}
		span{
			font-size: 3em;
			font-weight: bold;
		}
		form{
			float: right;
			margin-right: 100px;
			letter-spacing: 1px;
			font-size: 17px; 
		}
		.plague, .las{
			padding: 5px;
			font-size: Arial;
			border: none;
			margin: 1px;
		}
		input[type=submit]{
			background: orange;
			color: white;
			padding: 5px 15px;
			border-radius: 0 5px 5px 0;
			cursor: pointer;
			font-weight: bold;
		}
		input[type=submit]:hover{
			background: blue;
		}
		a[type=text], input[type=password], input[type=submit]{
			padding: 5px;
			font-size: Arial;
			border: none;
			margin: 1px;
		}
		a[type=submit]{
			background: orange;
			color: white;
			padding: 5px 15px;
			border-radius: 0 5px 5px 0;
			cursor: pointer;
			font-weight: bold;
		}
		a[type=submit]:hover{
			background: blue;
		}
		.green-text{
			color: green;
			text-align: center;
		}
		footer{
			color:white;
			background-color:black;
			height:400px;
			position:relative;
			width:100%;
		}
		.bummera{
			width: 200px;
			font-size: 14px;
			background-color: ;
			color: white;
			cursor: ;
			display: inline-block;
		}
		.bummera li{
			width: 200px;
			font-size: 14px;
			background-color: ;
			color: white;
			cursor: ;
			display: inline-block;
		}
		.bummera li a{
			width: 200px;
			font-size: 14px;
			background-color: blue;
			color: white;
			cursor: pointer;
			text-decoration: none;
			font-weight: bold;
		}
		.bummera li a:hover{
			background-color: yellow;
			color: white;
		}
	</style>
</head>
<body>
	<header>
		<span><a class="bummer" href='#' class="brand-logo brand-text"><img src="img/dl.jpg" height="50" alt="Logo"></a></span>
		<form action="includes/login.inc.php" method="POST">
			<table>
				<tr>
					<td>Username</td>
					<td>Password</td>
				</tr>
				<tr>
					<td><input name="mailuid" type="text" placeholder="Username" class="plague"></td>
					<td><input name="pwd" type="Password" placeholder="Password" class="plague"></td>
					<td><input name="login-submit" type="submit" value="Login" class="las"></td>
					<td>or</td>
					<td><a type="submit" class="btn brand z-depth-0 right blue" name="signup-submit" href="signup.php">signup</a></td>
				</tr>
				<tr>
					<td class="bummera"><li><a href="reset-password.php">Forgot your password</a></li></td>
				</tr>
			</table>
		</form>
	</header>

