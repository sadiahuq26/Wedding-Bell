<?php

    //start session
    session_start();

    //create constants to store non repeating values
    define('SITEURL','http://localhost/weddingbell/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'weddingbell');

    $conn = mysqli_connect('LOCALHOST', 'root', '') or die(mysqli_error()); //database connection
    $db_select = mysqli_select_db($conn, 'weddingbell') or die(mysqli_error());


?>