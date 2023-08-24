<?php 
session_start();


?>
<!DOCTYPE html>
<html>
<head>
	<title>DEMO</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<style type="text/css">
		body{
			background: #f1f1f1;
			font-family: sans-serif;
			margin: 0;
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
		.sub-one{
			background: orange;
			color: white;
			padding: 5px 15px;
			border-radius: 0 5px 5px 0;
			cursor: pointer;
			font-weight: bold;
		}
		.sub-one:hover{
			background: blue;
		}
	</style>
</head>
<body>
	<header>
		<span><a href='#' class="brand-logo brand-text"><img src="img/dl.jpg" height="50" alt="Logo"></a></span>
		<div class="row right">
			<form action="includes/login.inc.php" method="post" class="form-one col s12">
					<div class="input-field col s5">
						<input name="mailuid" type="text" placeholder="Username" class="inp-one validate" id="first_name">
						<label for="first_name">Username or Email</label>
					</div>
					<div class="input-field col s5">
						<input name="pwd" type="Password" placeholder="Password" class="inp-one validate" id="Password">
						<label for="Password">Password</label>
					</div>
					<div class="col s2">
						<label for="button">.</label>
						<input name="login-submit" type="submit" value="Login" class="inp-one sub-one" id="button">
					</div>
		</form>
	</div>
	</header>
</body>
