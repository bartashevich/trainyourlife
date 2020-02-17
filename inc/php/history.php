<?php
include "header.php";
include "low_navbar.php";
include "lib/php/db.php";

//USERS WEIGHT HISTORY
$exercises_query = $db->prepare("CALL get_users_exercises(".$db->quote($_SESSION['token']).")");
$exercises_query->execute();
$exercises = $exercises_query->fetchAll();
$exercises_query->closeCursor();

//CURRENT WEIGHT
/*$current_weight_query = $db->prepare("CALL get_current_weight(".$db->quote($_SESSION['token']).")");
$current_weight_query->execute();
$current_weight = $current_weight_query->fetch();
$current_weight_query->closeCursor();

if($current_weight['weight'] != null){
    $current_weight = $current_weight['weight']."kg";
}
else{
    $current_weight = 'Unknown';
}*/

?>

    <!-- Make sure all your bars are the first things in your <body> -->
    <header class="bar bar-nav">
        <a class="icon icon-gear pull-right" href="#settings_modal" data-transition="slide-out"></a>
        <h1 class="title">History</h1>
    </header>

    <!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
    <div class="content" style="padding-bottom: 50px">
        <div class="description" style="padding: 15px">
            <select id="exercise_history" name="exercise_history" style="width: 100%; height: 40px">
                <option value="0">Choose exercise...</option>
                <?php
                foreach ($exercises as $item) {
                    echo '<option value="'.$item['name'].'">'.$item['name'].'</option>';
                }
                ?>
            </select>

            <hr>

            <div style="padding-top: 10px" id="weight_container">
                <table class="weight">
                    <tr>
                        <th>Date</th>
                        <th>Exercise</th>
                        <th>Quanty</th>
                    </tr>
                    <?php foreach ($exercise_history as $exercise){ ?>
                        <tr>
                            <td><?=$exercise['date']?></td>
                            <td><?=$exercise['name']?></td>
                            <td><?=$exercise['quanty']?> <?=$exercise['unit']?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>


<?php
print_low_navbar('history');

include "footer.php";
?>