<?php
include "header.php";
include "low_navbar.php";
include "lib/php/db.php";

if(isset($_GET['exercise'])){
    $exercise_id = $_GET['exercise'];
}
else{
    exit();
}

//EXERCISE DETAILS
$exercise_query = $db->prepare("CALL get_exercise_by_id(".$db->quote($exercise_id).")");
$exercise_query->execute();
$exercise = $exercise_query->fetch();
$exercise_query->closeCursor();

//HISTORY
$exercise_history_query = $db->prepare("CALL get_exercise_history_by_name(".$db->quote($exercise['name']).", ".$db->quote($_SESSION['token']).")");
$exercise_history_query->execute();
$exercise_history = $exercise_history_query->fetchAll();
$exercise_history_query->closeCursor();

$select_min = '';
$select_rep = '';
if($exercise['unit'] == 'min'){
    $select_min = 'selected';
}
else if($exercise['unit'] == 'rep'){
    $select_rep = 'selected';
}
?>

    <!-- Make sure all your bars are the first things in your <body> -->
    <header class="bar bar-nav">
        <a class="icon icon-gear pull-right" href="#settings_modal" data-transition="slide-out"></a>
        <a class="icon icon-left-nav pull-left" href="/index.php?p=<?=$_GET['previous']?>" data-transition="slide-out"></a>
        <h1 class="title"><?=$exercise['name']?></h1>
    </header>

    <!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
    <div class="content" style="padding: 10px; padding-top: 50px; margin-bottom: 50px">
        <div class="description">
            <form id="add_exercise_to_history_form" class="content-padded">
                <input id="exercise_name" name="exercise_name" style="display: none" value="<?=$exercise['name']?>">
                <input id="plan_id" name="plan_id" style="display: none" value="<?=$exercise['exercise_plan_id']?>">
                <h5 align="center">Register your progress:</h5>
                <input value="<?=$exercise['quanty']?>" style="width: 78%" id="exercise_quanty" name="exercise_quanty" type="number" min="1" placeholder="Exercise quanty...">
                <select id="exercise_unit" name="exercise_unit" style="width: 20%; height: 40px">
                    <option value="min" <?=$select_min?>>min</option>
                    <option value="rep" <?=$select_rep?>>rep</option>
                </select>
                <a id="add_exercise_to_history" class="btn btn-positive btn-block">Add</a>
                <div id="add_exercise_to_history_success" align="center" style="display: none">
                    <span style="color: green">Your progress was added.</span>
                </div>
                <div id="add_exercise_to_history_fail" align="center" style="display: none">
                    <span style="color: red">Error, please reload page.</span>
                </div>
            </form>

            <div style="padding: 25px 0"><hr></div>
            <h4>History (last 10)</h4>
            <?php
                if(sizeof($exercise_history) == 0){
                    echo '<h5>Nothing yet</h5>';
                }
            ?>
            <table class="weight">
                <tr>
                    <th>Date</th>
                    <th>Exercise</th>
                    <th>Quanty</th>
                </tr>
                <?php foreach ($exercise_history as $history){ ?>
                <tr>
                    <td><?=$history['timestamp']?></td>
                    <td><?=$history['exercise_name']?></td>
                    <td><?=$history['quanty']?> <?=$history['unit']?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>


<?php
print_low_navbar('exercises');

include "footer.php";
?>