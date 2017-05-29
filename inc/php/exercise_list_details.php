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

    $exercise_query = $db->prepare("CALL get_exercise_from_list_by_id(".$db->quote($exercise_id).")");
    $exercise_query->execute();
    $exercise = $exercise_query->fetch();
    $exercise_query->closeCursor();

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
    <div class="content" style="padding: 10px; padding-top: 50px">
        <div class="description">
            <h5 align="center">Register your progress:</h5>
            <input style="width: 78%" id="exercise_quanty" name="exercise_quanty" type="number" min="1" placeholder="Exercise quanty...">
            <select id="exercise_unit" name="exercise_unit" style="width: 20%; height: 40px">
                <option value="min" <?=$select_min?>>min</option>
                <option value="rep" <?=$select_rep?>>rep</option>
            </select>
            <a onclick="$('#add_his_exer_fail').show('slow').delay(5000).hide('slow');" id="add_food_meal" class="btn btn-positive btn-block">Add</a>
            <div id="add_his_exer_fail" align="center" style="display: none">
                <span style="color: red">You need to add exercise to plan before register your progress.</span>
            </div>
            <div style="padding: 25px 0"><hr></div>
            <h4>History</h4>
            <h5>Nothing yet</h5>
        </div>
    </div>


<?php
print_low_navbar('exercises');

include "footer.php";
?>