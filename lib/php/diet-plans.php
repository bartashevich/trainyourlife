<?php

include 'db.php';

session_start();

if(isset($_SESSION['token'])){
    $token = $_SESSION['token'];
}

$diet_plans_query = $db->prepare("CALL get_diet_plans(".$db->quote($token).")");
$diet_plans_query->execute();
$diet_plans = $diet_plans_query->fetchAll();
$diet_plans_query->closeCursor();

$food_in_diet_plan = array();

foreach ($diet_plans as $plan){
    $diet_food_query = $db->prepare("CALL get_food_in_meal(".$db->quote($plan['id']).")");
    $diet_food_query->execute();
    $diet_food = $diet_food_query->fetchAll();
    $diet_food_query->closeCursor();

    $food_in_diet_plan[$plan['id']] = $diet_food;
}

foreach ($food_in_diet_plan['8'] as $test){
    print_r($test);
}