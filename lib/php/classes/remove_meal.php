<?php

include ('../db.php');

session_start();

if(isset($_SESSION['token'])){
    $token = $_SESSION['token'];
}
else{
    exit();
}

$remove_meal_query = $db->prepare("CALL del_meal(".$db->quote($_POST['remove_meal_select'])." ,".$db->quote($token).", @result)");
$remove_meal_query->execute();

$result_query = $db->prepare("SELECT @result AS result");
$result_query->execute();
$result = $result_query->fetch();

echo $result['result'];