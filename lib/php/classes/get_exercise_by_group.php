<?php

include ('../db.php');

$exercise_query = $db->prepare("CALL get_exercise_by_group(".$db->quote($_POST['exercise_id']).")");
$exercise_query->execute();
$exercise = $exercise_query->fetchAll();
$exercise_query->closeCursor();

if(sizeof($exercise) == 0){
    echo '1';
}
else{
    echo json_encode($exercise);
}
