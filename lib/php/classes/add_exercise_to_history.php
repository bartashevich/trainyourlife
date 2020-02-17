<?php

include ('../db.php');

session_start();

if(isset($_SESSION['token'])){
    $token = $_SESSION['token'];
}
else{
    exit();
}

$add_exerciseto_history_query = $db->prepare("CALL add_exercise_to_history(".$db->quote($_POST['plan_id']).", ".$db->quote($_POST['exercise_name']).", ".$db->quote($_POST['exercise_quanty']).",".$db->quote($_POST['exercise_unit']).", ".$db->quote($token).", @result)");
$add_exerciseto_history_query->execute();

$result_query = $db->prepare("SELECT @result AS result");
$result_query->execute();
$result = $result_query->fetch();

echo $result['result'];