<?php

include ('../db.php');

session_start();

if(isset($_SESSION['token'])){
    $token = $_SESSION['token'];
}
else{
    exit();
}

$add_meal_food_query = $db->prepare("CALL add_food_to_meal(".$db->quote($_POST['food_menu']).",".$db->quote($_POST['food_name']).", ".$db->quote($_POST['food_quanty']).", ".$db->quote($_POST['food_unit']).", ".$db->quote($_POST['food_protein']).", ".$db->quote($_POST['food_carbs']).", ".$db->quote($_POST['food_fat']).", ".$db->quote($_POST['food_calories']).", ".$db->quote($token).", @result)");
$add_meal_food_query->execute();

$result_query = $db->prepare("SELECT @result AS result");
$result_query->execute();
$result = $result_query->fetch();

echo $result['result'];