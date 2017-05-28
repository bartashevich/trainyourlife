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

$diet_icons_query = $db->prepare("CALL get_meal_logo()");
$diet_icons_query->execute();
$diet_icons = $diet_icons_query->fetchAll();
$diet_icons_query->closeCursor();

$food_list_query = $db->prepare("CALL get_food_list()");
$food_list_query->execute();
$food_list = $food_list_query->fetchAll();
$food_list_query->closeCursor();