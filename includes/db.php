<?php 
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "wp_project";
    
    $conn = mysqli_connect($host, $username, $password, $database);
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>