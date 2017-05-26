<?php

include ('../db.php');

session_start();

if(isset($_SESSION['token'])){
    $token = $_SESSION['token'];
}
else{
    exit();
}

$add_meal_query = $db->prepare("CALL add_meal(".$db->quote($_POST['meal_name']).",".$db->quote($_POST['meal_time']).", ".$db->quote($_POST['avatar'])." ,".$db->quote($token).", @result)");
$add_meal_query->execute();

$result_query = $db->prepare("SELECT @result AS result");
$result_query->execute();
$result = $result_query->fetch();

echo $result['result'];