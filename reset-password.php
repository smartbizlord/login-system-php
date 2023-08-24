<!--if (isset($_GET['signup'] == "success")) {
		echo '<p class="signuperror green-text">Signup successful!</p>';
		header("location: ../index.php?signup=success");
				exit();
	}-->

		
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


		<!--<main>
			<div>
				<section class="container blue-text">-->
		<main>
			<div class="wrapper-main">
				<section class="section-default">
					<center><h1>Reset your password</h1></center>
					<p>An e-mail will be sent to you with instructions on how to reset your password</p>
					<div>
						<!--<center><form action="includes/reset-request.inc.php" method="POST" class="white brd-fine">-->
						<center><form action="includes/reset-request.inc.php" method="post" class="blue">
                            
							<!--<input type="hidden" name="selector" value="<?php //echo $selector; ?>">
							<input type="hidden" name="validator" value="<?php //echo $validator; ?>">-->
                            
							<input type="text" name="email" placeholder="Enter youre-mail adress...">
							<button type="submit" name="reset-request-submit">Receive new password by e-mail</button>
						</form></center>
						<?php 
                        
                        $link = '$_GET["link"]';

						if (isset($_GET["reset"])) {
							
							if ($_GET["reset"] == "success") {
								echo '<p class="signupsuccess green-text">Check your e-mail!</p>';
							}
						}
                        

						 
                        if (isset($_GET["link"])) {
							
							//if ($_GET["link"] == "success") {
								echo $link;
							//}
						}

						 ?>
					</div>
				</section>
			</div>
		</main>
		<?php include "materialize-footer.php";