<?php 
session_start();


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="this is an example of a meta description. this will often show up in search results.">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<!--<link rel="stylesheet" href="demo.css">-->
	<link rel="stylesheet" href="css/bootstrap.css">
	<style type="text/css">
		body{
			font-family: sans-serrif;
			margin: 0;
		}
		header{
			padding: 25px;
		}
		span{

		}
		form{
			float: right;
			margin-right: 100px;
			font-size: 17px;
		}
		input{
			border: none;
			margin: 1px;
		}
	</style>


</head>
<body class="grey lighten-4">
	<nav class="z-depth-0">
	<div class="container">
			<a href='#' class="brand-logo brand-text"><img src="img/dl.jpg" height="50" alt="Logo"></a>
			<ul id="nav-mobile" class="right hide-on-small-and-down">
				<li><a href="index.php" class="btn brand z-depth-0">HOME</a></li>
				<li><a href="#" class="btn brand z-depth-0">Dimejilike</a></li>
				<li><a href="#" class="btn brand z-depth-0">port</a></li>
				<li><a href="#" class="btn brand z-depth-0">About</a></li>
				<li><a href="#" class="btn brand z-depth-0">contact</a></li>
			</ul>
		<!--</div>
	</nav>
	<div class="grey lighten-4">
		<nav class="z-depth-0 white">
		<div class="container white">-->
					<?php 
					if (isset($_SESSION['id'])) {
										echo '<form class="" action="includes/logout.inc.php" method="POST">
						<button type="submit" name="logout-submit" class="btn brand z-depth-0 right blue">Logout</button>
					</form>';
									}
					else {
						echo '
						<header>
						<span>Login Header</span> 
						<form>
							<table>
							<tr>
								<td>Username</td>
								<td>Password</td>
							<tr>
							<tr>
								<td><input type="text" name="mailuid" placeholder="username/ Email..."></td>
								<td><input type="password" name="pwd" placeholder="password"></td>
								<td><button type="submit" name="login-submit" class="btn blue">login</button></td>
								<!--<input type = "submit" value = "login">-->
							<tr>
							</table>
						</form>
						</header>
						 <!-- <nav class="z-depth-0 white na">
						<div class="whola">
						<form class="bag" action="includes/login.inc.php" method="POST" class="white">
							<ul id="nav-mobile" class="right hide-on-small-and-down bp">
								<li><input type="text" name="mailuid" placeholder="username/ Email..."></li>
								<li><input type="password" name="pwd" placeholder="password"></li>
								<li><button type="submit" name="login-submit" class="btn blue">login</button></li>
							</ul>
								<center><a type="submit" class="btn brand z-depth-0 right blue" name="signup-submit" href="indexb.php">signup</a></center>
						</form>
						</div>
				
				</nav>-->
				';
					}
	?>
</div>
</nav>
