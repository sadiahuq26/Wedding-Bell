<?php 
    if(!isset($_SESSION['user'])) //if user session not set
    {
        //user not logged in
        $_SESSION['no-login-message'] = "<div class='error' text-center>Please login to access Admin panel.</div>"; 
        header("location:".SITEURL.'admin/login.php'); 
    }
?>