


<main>
		<div>
			<div>
				<?php 
				require 'header.php';
				?>
			</div>
			<div>
				<section class="container grey-text">
					<h1>login</h1>
				<form action="includes/login.inc.php" method="POST" class="white">
					<label>Your Email:</label>
					<input type="text" name="mailuid" placeholder="username/Email...">
					<label>Your Password:</label>
					<input type="password" name="pwd" placeholder="password">
					<button type="submit" name="login-submit" class="btn brand z-depth-0">login</button>
				</form>
				<center><a class="btn brand z-depth-0" name="sobbert" href="indexb.php">signup</a></center>
				</section>
			</div>
			<section class="section-default">
				<<?php 

					if (isset($_SESSION['id'])) {
						echo "you are logged out";
						header("location: index.php");
						exit();
					}
					else {
						echo "you are logged in";
						
					}

				 ?>
				
		 		
			</section>
			<div>
				<?php 
				require 'footer.php';
				?>
			</div>
		</div>
	</main>
