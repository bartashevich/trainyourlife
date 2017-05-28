<?php

include ('../db.php');

session_start();

if(isset($_SESSION['token'])){
    $token = $_SESSION['token'];
}
else{
    exit();
}

$remove_plan_query = $db->prepare("CALL del_plan(".$db->quote($_POST['remove_plan_select'])." ,".$db->quote($token).", @result)");
$remove_plan_query->execute();

$result_query = $db->prepare("SELECT @result AS result");
$result_query->execute();
$result = $result_query->fetch();

echo $result['result'];