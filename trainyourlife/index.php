<?php

if(!isset($_GET["p"])){
    include 'inc/php/login.php';
}
else{
    include 'inc/php/'.$_GET["p"].'.php';
}