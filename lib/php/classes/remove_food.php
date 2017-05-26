<?php

include ('../db.php');

session_start();

if(isset($_SESSION['token'])){
    $token = $_SESSION['token'];
}
else{
    exit();
}

$remove_food_query = $db->prepare("CALL del_food_from_meal(".$db->quote($_POST['food_id']).", ".$db->quote($token).", @result)");
$remove_food_query->execute();

$result_query = $db->prepare("SELECT @result AS result");
$result_query->execute();
$result = $result_query->fetch();

echo $result['result'];