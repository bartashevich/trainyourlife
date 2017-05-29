<?php

include ('../db.php');

session_start();

if(isset($_SESSION['token'])){
    $token = $_SESSION['token'];
}
else{
    exit();
}

$weight_query = $db->prepare("CALL get_weight_statistics_monthly(".$db->quote($token).", ".$db->quote($_POST['year']).")");
$weight_query->execute();
$weight = $weight_query->fetchAll();
$weight_query->closeCursor();

$min = array();
$max = array();
$avg = array();

for($i = 0; $i < 12; $i++){
    $min[$i] = 0;
    $max[$i] = 0;
    $avg[$i] = 0;
}

foreach ($weight as $item){
    $min[$item['month']-1] = intval($item['min_weight']);
    $max[$item['month']-1] = intval($item['max_weight']);
    $avg[$item['month']-1] = intval($item['avg_weight']);
}

echo json_encode(array($min,$max,$avg));
