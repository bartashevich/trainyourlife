<?php

include 'db.php';

session_start();

if(isset($_SESSION['token'])){
    $token = $_SESSION['token'];
}

$diet_plans_query = $db->prepare("CALL get_diet_plans(".$db->quote($token).")");
$diet_plans_query->execute();
$diet_plans = $diet_plans_query->fetchAll();

print_r($diet_plans);