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
	form{
			max-width:460px;
			margin:20px auto;
			padding:20px;
		}
	form ul li{
		border: 1px solid ;
		margin: 2px;
	}
		.log{
			/*width: 220px !important;
			margin: 2px;
		}
		.bag{
			width: 600px !important;
		}*/
	}/*
	.na{
		height: 150px;
		width:100%;
	}

		.whola{
			height: 100px;
			width: 97%;
			float: up;
			background-color: red;
		}
		.bp{
		text-align:center;
		}
		.bp li{
		text-align:center;
		display:inline-block;
		height:100%;
		margin-top:17px;
		width:;
		float: left;
		position: center;
		}
		.bp li input{
			float: left;
			text-align:center;
			color:white;
			text-decoration:none;
			background-color:black;
			margin:1px;
			padding:5px;
			padding-right:50px;
			padding-left:50px;
			padding-top:20px;
			padding-bottom:20px;
		}
		.lefta{

		}
		.righta{

		}
		.outa{

		}


		.ina{
			height:50px;
			width:97%;
			background-color:blue;
		}*/

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
		</div>
	</nav>
	<div class="grey lighten-4">
		<nav class="z-depth-0 white">
		<div class="container white">
					<?php 
					if (isset($_SESSION['id'])) {
										echo '<form class="" action="includes/logout.inc.php" method="POST">
						<button type="submit" name="logout-submit" class="btn brand z-depth-0 right blue">Logout</button>
					</form>';
									}
					else {
						echo '   <nav class="z-depth-0 white na">
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
				
				</nav>';
					}
	?>
</div>
</nav>
</div>