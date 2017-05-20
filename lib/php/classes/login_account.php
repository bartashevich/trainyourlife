<?php

include ('../db.php');

$login_query = $db->prepare("SELECT users.id FROM users WHERE users.`password` = ".$db->quote($_POST['password'])." AND users.username = ".$db->quote($_POST['email_username'])." OR users.`password` = ".$db->quote($_POST['password'])." AND users.email = ".$db->quote($_POST['email_username']));
$login_query->execute();
$login = $login_query->fetchAll();

if(sizeof($login) > 1){
    echo 'true';
}
else{
    echo 'false';
}