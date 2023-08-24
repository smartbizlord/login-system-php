<!--if (isset($_GET['signup'] == "success")) {
		echo '<p class="signuperror green-text">Signup successful!</p>';
		header("location: ../index.php?signup=success");
				exit();
	}-->

		
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">-->


		<!--<main>
			<div>
				<section class="container blue-text">-->
		<main>
			<div class="wrapper-main">
				<section class="section-default">
				
				<?php {

				$selector = $_GET["selector"];
				$validator = $_GET["validator"];


				if (empty($selector) || empty($validator)) {
					echo "Could not validate your request";

				} else{
					if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
						
						?>
						<form action="includes/reset-password.inc.php" method="POST">
							
							<input type="hidden" name="selector" value="<?php echo $selector; ?>">
							<input type="hidden" name="validator" value="<?php echo $validator; ?>">
							<input type="password" name="pwd" placeholder="Enter new password...">
							<input type="password" name="pwd-repeat" placeholder="Repeat new password...">
							<button type="submit" name="reset-password-submit">Reset password</button>

						</form>;
						<?php
					}
				}
			}

				 ?>	
				
				</section>
			</div>
		</main>