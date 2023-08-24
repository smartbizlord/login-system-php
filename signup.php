<?php 
require 'header-signup-1.php';
?>

<?php

	 # if (isset($_GET['error'])) {
	 # 	if ($_GET['error'] == "emptyfields") {
	 # 		echo '<p class="signuperror">Fill in all fields!</p>';
	 # 	}
	 # 	elseif ($_GET['error'] == "invalidmailuid") {
	 # 		echo '<p class="signuperror">Invalid username and e-mail!</p>';
	 # 	}
	 # 	elseif ($_GET['error'] == "invalliduid") {
	 # 		echo '<p class="signuperror">Invalid username!</p>';
	 # 	}
	 # 	elseif ($_GET['error'] == "invalidmail") {
	 # 		echo '<p class="signuperror">Invalid e-mail!</p>';
	 # 	}
	 # 	elseif ($_GET['error'] == "passwordcheck") {
	 # 		echo '<p class="signuperror">Your passwords do not match!</p>';
	 # 	}
	 # 	elseif ($_GET['error'] == "usertaken") {
	 # 		echo '<p class="signuperror">Username or e-mail is already taken!</p>';
	 # 	}
	 # }
	 # elseif ($_GET['signup'] == "success") {
	 # 	echo '<p class="signuperror">Signup successful!</p>';
	 # }

?>

   

    '<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">-->
    <style type="text/css">
    	.feort{
		width: 100% !important;
		float: center !important;
			}
    </style>
		<main>
			<div>
				<section class="container grey-text">
					<center><h1>signup</h1></center>
					
					<div>
				<center><form action="includes/signup.inc.php" method="POST" class="white brd-fine">
					<table>
					<?php
					require "imp.php";
					?>
					<label for="username">Your Username:</label>
					<input type="text" name="uid" placeholder="username" class="validate center" id="username">
					<label for="Email">Your Email:</label>
					<input type="text" name="mail" placeholder="emial" class="validate center" id="Email">
					<label for="password">Your Password:</label>
					<input type="password" name="pwd" placeholder="password" class="validate center" id="password">
					<label for="rep_password">Repeat Password:</label>
					<input type="password" name="pwd-repeat" placeholder="repeat password" class="validate center" id="rep_password">
					<tr>
					<td><center><button type="submit" name="signup-submit" class="btn brand z-depth-0 center">signup</button></center></td>
					</tr>
					</table>
					</form></center>

					<a href="reset-password.php">Forgot your password</a>

					<!--<table>
					<tr>
					<td><input class="inna" type="text" name="uid" placeholder="username"></td>
					</tr>
					<tr>
					<td><input class="inna" type="text" name="mail" placeholder="emial"></td>
					</tr>
					<tr>
					<td><input class="inna" type="password" name="pwd" placeholder="password"></td>
					</tr>
					<tr>
					<td><input class="inna" type="password" name="pwd-repeat" placeholder="repeat password"></td>
					</tr>
					<tr>
					<td><button type="submit" name="signup-submit" class="btn brand z-depth-0">signup</button></td>
					</tr>
					</table>-->

					<!--<label>Your Username:</label>
					<input type="text" name="uid" placeholder="username">
					<label>Your Email:</label>
					<input type="text" name="mail" placeholder="emial">
					<label>Your Password:</label>
					<input type="password" name="pwd" placeholder="password">
					<label>Your Password:</label>
					<input type="password" name="pwd-repeat" placeholder="repeat password">-->
				</section>
			</div>
		</main>'

		

		 <?php include "materialize-footer.php";
