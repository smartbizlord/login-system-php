


		<main>
		<div>
			<div>
				<?php 
				require 'header.php';
				?>
			</div>
			<div>
				<section class="container grey-text">
					<h1>signup</h1>
				<form action="includes/signup.inc.php" method="POST" class="white">
					<label>Your Username:</label>
					<input type="text" name="uid" placeholder="username">
					<label>Your Email:</label>
					<input type="text" name="mail" placeholder="emial">
					<label>Your Password:</label>
					<input type="password" name="pwd" placeholder="password">
					<label>Your Password:</label>
					<input type="password" name="pwd-repeat" placeholder="repeat password">
					<center><button type="submit" name="signup-submit" class="btn brand z-depth-0">signup</button></center>
					</form>
				</section>
			</div>
			<div>
				<?php 
				require 'footer.php';
				?>
			</div>
			</div>
		</main>