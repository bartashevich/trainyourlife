<?php

include ('../db.php');

session_start();

if(!isset($_SESSION['token'])){
    exit();
}

$logout_query = $db->prepare("CALL logout_user(".$db->quote($_SESSION['token']).", @result);");
$logout_query->execute();

$result_query = $db->prepare("SELECT @result AS result");
$result_query->execute();
$result = $result_query->fetch();

if($result['result'] == '0'){
    unset($_SESSION['token']);
}

echo $result['result'];