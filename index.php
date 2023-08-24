
<?php 
	require 'header.php';
?>


	<main>
		<div class="wrapper-main">
			<section class="section-default">
				<?php 

					if (isset($_SESSION['id'])) {
						echo '<p>you are logged in</p>
						<h1>DEMO</h1>';
					}
					else {
						header("location: login.php");
						exit();
					}

				 ?>
				
		 		
			</section>
		</div>
	</main>


<?php  
	require 'footer.php';
?>
