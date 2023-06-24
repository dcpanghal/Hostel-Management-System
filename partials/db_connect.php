<?php
    session_start();
    
    define('SITEURL','http://localhost/Hostel-Management-System-main/');
    // define('SITEURL','http://localhost/LearnPHP/Final Project/');
    define('LOCALHOST','localhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','');
    define('DB_NAME','hmsnitkkr');

    $conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD, DB_NAME) ;
    // echo "Database connected";
?>