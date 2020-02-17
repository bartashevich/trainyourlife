<?php

include ('../db.php');

session_start();

if(isset($_SESSION['token'])){
    $token = $_SESSION['token'];
}
else{
    exit();
}

$add_exercise_query = $db->prepare("CALL add_exercise_to_plan(".$db->quote($_POST['exercise_plan']).", ".$db->quote($_POST['exercise_name']).",".$db->quote($_POST['exercise_quanty']).", ".$db->quote($_POST['exercise_unit']).", ".$db->quote($token).", @result)");
$add_exercise_query->execute();

$result_query = $db->prepare("SELECT @result AS result");
$result_query->execute();
$result = $result_query->fetch();

echo $result['result'];