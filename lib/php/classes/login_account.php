<?php

include ('../db.php');

session_start();

$token = md5(uniqid(rand(), true));

$login_query = $db->prepare("CALL login_user(".$db->quote($_POST['email_username']).",".$db->quote(md5($_POST['password'])).", ".$db->quote($token).", @result)");
$login_query->execute();

$result_query = $db->prepare("SELECT @result AS result");
$result_query->execute();
$result = $result_query->fetch();

if($result['result'] == '0'){
    $_SESSION['token'] = $token;
}

echo $result['result'];