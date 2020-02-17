<?php

include ('../db.php');

session_start();

if(isset($_SESSION['token'])){
    $token = $_SESSION['token'];
}
else{
    exit();
}

$history_query = $db->prepare("CALL get_exercise_history_by_name(".$db->quote($_POST['exercise_name']).",".$db->quote($token).")");
$history_query->execute();
$history = $history_query->fetchAll();
$history_query->closeCursor();

if(sizeof($history) == 0){
    echo '1';
}
else{
    echo '<table class="weight"> <tr> <th>Date</th> <th>Exercise</th> <th>Quanty</th> </tr>';
    foreach ($history as $item){
        echo '<tr>';
        echo '<td>';echo $item['timestamp'];echo '</td>';
        echo '<td>';echo $item['exercise_name'];echo '</td>';
        echo '<td>';echo $item['quanty'].' '.$item['unit'];echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
}
