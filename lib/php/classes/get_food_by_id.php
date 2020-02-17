<?php

include ('../db.php');

$food_query = $db->prepare("CALL get_food_by_id(".$db->quote($_POST['food_id']).")");
$food_query->execute();
$food = $food_query->fetch();
$food_query->closeCursor();

if($food['id'] == null){
    echo '1';
}
else{
    echo json_encode($food);
}
