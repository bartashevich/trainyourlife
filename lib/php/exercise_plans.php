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

$exercise_icons_query = $db->prepare("CALL get_exercise_logo()");
$exercise_icons_query->execute();
$exercise_icons = $exercise_icons_query->fetchAll();
$exercise_icons_query->closeCursor();

$exercise_group_list_query = $db->prepare("CALL get_exercise_group_list()");
$exercise_group_list_query->execute();
$exercise_group_list = $exercise_group_list_query->fetchAll();
$exercise_group_list_query->closeCursor();