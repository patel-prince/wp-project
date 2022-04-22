<?php 
    session_start(); 
    if(isset($_SESSION['user']) && !empty($_SESSION['user'])) { 
        if (in_array($active_page, ["login", "register"])) {
            header("location: resume.php");
        }
    }else{
        if (!in_array($active_page, ["login", "register"])) {
            header("location: login.php");
        }
    }
?>
<?php include_once './includes/db.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>
    <div class="page-wrapper">
        <?php include_once './includes/nav.php' ?>