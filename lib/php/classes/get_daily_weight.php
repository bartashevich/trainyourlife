<?php

include ('../db.php');

session_start();

if(isset($_SESSION['token'])){
    $token = $_SESSION['token'];
}
else{
    exit();
}

$weight_query = $db->prepare("CALL get_weight_statistics_daily(".$db->quote($token).", ".$db->quote($_POST['year']).", ".$db->quote($_POST['month']).")");
$weight_query->execute();
$weight = $weight_query->fetchAll();
$weight_query->closeCursor();

$month = array();

for($i = 0; $i < 31; $i++){
    $month[$i] = 0;
}

foreach ($weight as $item){
    $month[$item['day']-1] = intval($item['weight']);
}

echo json_encode($month);
