<?php 
session_start();


?>
<!--<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="this is an example of a meta description. this will often show up in search results.">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	--><!-- Compiled and minified CSS -->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">-->
	<!--<link rel="stylesheet" href="demo.css">-->
	<!--<link rel="stylesheet" href="css/bootstrap.css">-->
	
<!--</head>
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
	</nav>-->
					<?php 
					if (isset($_SESSION['id'])) {
										echo '<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="this is an example of a meta description. this will often show up in search results.">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<!--<link rel="stylesheet" href="demo.css">-->
	<!--<link rel="stylesheet" href="css/bootstrap.css">-->
	<style>
		html, body{
			height: 100%;
		}
		main{
			min-height:100%;
			background-color:;
		}
		.footer{
			color:white;
			background-color:black;
			height:400px;
			position:relative;
			width:100%;
		}
		.footer .footer-content{
			height:350px;
			display:flex;
			color: white;
		}
		.footer .footer-content .footer-section{
			flex:1;
			padding:25px;
			color:white;
		}
		.footer .footer-content h1,
		.footer .footer-content h2{
			color:white;
		}
		.footer .footer-content .about h1 span{
			color:#05f7ff;
		}
		.footer .footer-content .about .contact span{
			display:block;
			font-size:1.1em;
			margin-bottom:8px;
			color:white;
		}
		.footer .footer-content .contact-form input,
		.footer .footer-content .contact-form textarea{
			color:white;
			background-color: ;
		}
		.footer .footer-content .contact-form .contact-input{
			background-color: #272727;
			color: #bebdbd;
			margin-bottom: 10px;
			line-height: 1.5rem;
			padding: .2rem .0rem;
			border: none;
			border-radius:5px;
		}
		.footer .footer-content .contact-form .test{
			padding: .5rem .0rem;
			line-height: 1.5rem;
			margin-bottom: 10px;
		}
		.btn-big{
			padding: .7rem 1.3rem;
			line-height: 1.3rem;
		}
		.contact-btn{
			float:right;
		}
		.footer .footer-content .contact-form .contact-input:focus{
			background-color:#1a1a1a
		}
		.footer .footer-content .about .socials a{
			border:1px solid grey;
			width:45px;
			height:41px;
			padding-top:5px;
			margin-right: 5px;
			text-align:center;
			display:inline-block;
			font-size:1.3em;
			border-radius:5px;
		}
		.footer .footer-content .about .socials a:hover{
			border:1px solid white;
			color:white;
			transition: all .3s;
		}
		.footer .footer-content .links ul a{
			display: block;
			margin-bottom: 10px;
			font-size: 1.2em;
			color:white;
			transition:all .3s;
		}
		.footer .footer-content .links ul a:hover{
			margin-left: 10px;
			color:white;
			transition:all .3s;
		}
		.footer .footer-bottom{
			height:50px;
			width:100%;
			text-align:center;
			position:absolute;
			bottom:0px;
			left:0px;
			padding-top:20px;
		}
		form{
			width:95%;
		}
	</style>
	
</head>
<body class="grey lighten-4">
	<nav class="z-depth-0">
	<div class="container">
			<a href="#" class="brand-logo brand-text"><img src="img/dl.jpg" height="50" alt="Logo"></a>
			<ul id="nav-mobile" class="right hide-on-small-and-down">
				<li><a href="index.php" class="btn brand z-depth-0">HOME</a></li>
				<li><a href="#" class="btn brand z-depth-0">Dimejilike</a></li>
				<li><a href="#" class="btn brand z-depth-0">port</a></li>
				<li><a href="#" class="btn brand z-depth-0">About</a></li>
				<li><a href="#" class="btn brand z-depth-0">contact</a></li>
			</ul>
		</div>
	</nav>';
										echo '<form class="" action="includes/logout.inc.php" method="POST">
						<button type="submit" name="logout-submit" class="btn brand z-depth-0 right blue">Logout</button>
					</form>';
									}
					else {
						header("location: login.php");
						exit();
					}
	?>