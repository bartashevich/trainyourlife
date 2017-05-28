<?php

include ('../db.php');

session_start();

if(isset($_SESSION['token'])){
    $token = $_SESSION['token'];
}
else{
    exit();
}

$remove_exercise_query = $db->prepare("CALL del_exercise_from_plan(".$db->quote($_POST['exercise_id']).", ".$db->quote($token).", @result)");
$remove_exercise_query->execute();

$result_query = $db->prepare("SELECT @result AS result");
$result_query->execute();
$result = $result_query->fetch();

echo $result['result'];