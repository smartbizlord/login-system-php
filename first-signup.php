<?php 
require 'header-login-1.php';
?>

	<main>
		<div class="wrapper-main">
			<section class="section-default">
				<h1>signup</h1>
				<form class="form-signup" action="includes/signup.inc.php" method="POST">
					<input type="text" name="uid" placeholder="username">
					<input type="text" name="mail" placeholder="emial">
					<input type="password" name="pwd" placeholder="password">
					<input type="password" name="pwd-repeat" placeholder="repeat password">
					<button type="submit" name="signup-submit">signup</button>
				</form>
			</section>
		</div>
	</main>

<?php  
	require 'footer.php';
?>