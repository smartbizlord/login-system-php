<?php

	if (isset($_GET['error'])) {
		if ($_GET['error'] == "emptyfields") {
			echo '<p class="signuperror red-text">Fill in all fields!</p>';
		}
		elseif ($_GET['error'] == "invalidmailuid") {
			echo '<p class="signuperror red-text">Invalid username and e-mail!</p>';
		}
		elseif ($_GET['error'] == "invalliduid") {
			echo '<p class="signuperror red-text">Invalid username!</p>';
		}
		elseif ($_GET['error'] == "invalidmail") {
			echo '<p class="signuperror red-text">Invalid e-mail!</p>';
		}
		elseif ($_GET['error'] == "passwordcheck") {
			echo '<p class="signuperror red-text">Your passwords do not match!</p>';
		}
		elseif ($_GET['error'] == "usertaken") {
			echo '<p class="signuperror red-text">Username or e-mail is already taken!</p>';
		}
	elseif ($_GET["signup"] == "success") {
		echo '<p class="signupsuccess green-text">Signup successful!</p>';
		header("location: login.php?signup=success");
				exit();
	}
}

?>
  <?php 
#  
#  	if (isset($_GET["signup"])) {
#  		if ($_GET["signup"] == "success") {
#  			echo '<p class="signupsuccess green-text">Signup successful!</p>';
#  			header("location: index.php?signup=success");
#  				exit();
#  
#  		}
#  	}
#  
#   ?>