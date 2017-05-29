<?php

include ('../db.php');

session_start();

if(isset($_SESSION['token'])){
    $token = $_SESSION['token'];
}
else{
    exit();
}

$add_exercise_query = $db->prepare("CALL add_weight(".$db->quote($_POST['weight_number']).", ".$db->quote(date('Y-m-d',strtotime($_POST['weight_date']))).", ".$db->quote($token).", @result)");
$add_exercise_query->execute();

$result_query = $db->prepare("SELECT @result AS result");
$result_query->execute();
$result = $result_query->fetch();

echo $result['result'];