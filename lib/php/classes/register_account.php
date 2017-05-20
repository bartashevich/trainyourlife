<?php

include ('../db.php');

if($_POST['password'] != $_POST['password_again']){
    echo 'notsamepass';
    exit();
}

$sql = "INSERT INTO `users` (`full_name`,`username`,`email`,`password`) VALUES (".$db->quote($_POST['full_name']).", ".$db->quote($_POST['username'])." ,".$db->quote($_POST['email']).",".$db->quote($_POST['password']).")";
$stmt = $db->prepare($sql);
$ins = $stmt->execute();

echo 'true';