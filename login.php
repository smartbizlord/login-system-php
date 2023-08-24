<?php 
require 'header-login-1.php';
?>

<main>

<?php 

	if (isset($_SESSION['id'])) {{
		echo "you are logged in";
		header("location: index.php");
		exit();
	}
    
    if (isset($_GET["newpwd"])) {
        
        if ($_GET["newpwd"] == "passwordupdated") {
            echo '<p class="signupsuccess green-text">Your password has been reset !!!</p>';
        }
        
        
		/*echo '<p class="signupsuccess green-text">Signup successful !!!</p>';
				exit();
	}
}
	else {
		echo '<main>crazy</main>';
		 
		
	}*/
    }
    
	if ($_GET["signup"] == "success") {
		echo '<p class="signupsuccess green-text">Signup successful !!!</p>';
				exit();
	}
}
	else {
		echo '<main>crazy</main>';
		 
		
	}
    
    echo phpinfo();

 ?>



<?php require "login-footer.php"; ?>