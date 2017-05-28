<?php

include 'db.php';

session_start();

if(isset($_SESSION['token'])){
    $token = $_SESSION['token'];
}

$exercise_plans_query = $db->prepare("CALL get_exercise_plans(".$db->quote($token).")");
$exercise_plans_query->execute();
$exercise_plans = $exercise_plans_query->fetchAll();
$exercise_plans_query->closeCursor();

$exercise_in_plan = array();

foreach ($exercise_plans as $plan){
    $activity_exercise_query= $db->prepare("CALL get_exercise_in_plan(".$db->quote($plan['id']).")");
    $activity_exercise_query->execute();
    $activity_exercise = $activity_exercise_query->fetchAll();
    $activity_exercise_query->closeCursor();

    $exercise_in_plan[$plan['id']] = $activity_exercise;
}

/*$diet_icons_query = $db->prepare("CALL get_meal_logo()");
$diet_icons_query->execute();
$diet_icons = $diet_icons_query->fetchAll();
$diet_icons_query->closeCursor();

$food_list_query = $db->prepare("CALL get_food_list()");
$food_list_query->execute();
$food_list = $food_list_query->fetchAll();
$food_list_query->closeCursor();*/