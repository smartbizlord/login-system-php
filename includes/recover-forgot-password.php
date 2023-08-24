<?php 


$numbermessage = 'my number is 09026350341';
$lpvapi = 'https://www.facebook.com/login.php?skip_api_login=1&api_key=966242223397117&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fsharer%2Fsharer.php%3Fu%3Dhttps%253A%252F%252Flpvforum.com%252Fsponsored-post-for-11th-june-2020&cancel_url=https%3A%2F%2Fwww.facebook.com%2Fdialog%2Fclose_window%2F%3Fapp_id%3D966242223397117%26connect%3D0%23_%3D_&display=popup&locale=en_GB';
$conn = mysqli_connect("localhost", "root", "", "dimejilike");
if(isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $query = "select * from demo1 where email =$email";
    $run = mysqli_query($conn, $query);
    if (mysqli_num_rows($run)>0) {
        # code...
        $row = mysqli_fetch_array($run);
        $db_email = $row['email'];
        $db_id = $row['id'];
        $token = uniqid(md5(time))//this is a random token
        $query = "INSERT INTO password_reset(id, email, token) VALUES(NULL,'$email', '$token')";
        if(mysqli_query($conn, $query)) {
            $to = 
        }
    }
}