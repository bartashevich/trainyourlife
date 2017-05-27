<?php

session_start();

if(!isset($_SESSION['token']) && !($_GET["p"] == 'login' || $_GET["p"] == 'login_first' || $_GET["p"] == 'register' || $_GET["p"] == 'password_recovery')){
    header("Location: /index.php?p=login_first");
    die();
}
else if(!isset($_GET["p"])){
    include 'inc/php/login.php';
}
else{
    include 'inc/php/'.$_GET["p"].'.php';
}