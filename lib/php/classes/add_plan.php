<?php

include ('../db.php');

session_start();

if(isset($_SESSION['token'])){
    $token = $_SESSION['token'];
}
else{
    exit();
}

$add_plan_query = $db->prepare("CALL add_plan(".$db->quote($_POST['plan_name']).",".$db->quote($_POST['avatar'])." ,".$db->quote($token).", @result)");
$add_plan_query->execute();

$result_query = $db->prepare("SELECT @result AS result");
$result_query->execute();
$result = $result_query->fetch();

echo $result['result'];