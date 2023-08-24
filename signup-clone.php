

    <?php

    echo

    '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type="text/css">
    	.feort{
		width: 100% !important;
		float: center !important;
			}
    </style>
    <body>
		<main>
			<div>
				<section class="grey-text">
					<center><h1>signup</h1></center>
					
					<div class="container">
				<center><form action="includes/signup.inc.php" method="POST" class="white">
					<table>
					<label>Your Username:</label>
					<input type="text" name="uid" placeholder="username">
					<label>Your Email:</label>
					<input type="text" name="mail" placeholder="emial">
					<label>Your Password:</label>
					<input type="password" name="pwd" placeholder="password">
					<label>Your Password:</label>
					<input type="password" name="pwd-repeat" placeholder="repeat password">
					<tr>
					<td><button type="submit" name="signup-submit" class="btn brand z-depth-0">signup</button></td>
					</tr>
					</table>
					</form></center>

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
					<td><center><button type="submit" name="signup-submit" class="btn brand z-depth-0">signup</button></center></td>
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
		</main>
		</body>'

		?>

		 <?php include 'materialize-footer.php';
