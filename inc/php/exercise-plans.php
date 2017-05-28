<?php
include "header.php";
include "low_navbar.php";
include "lib/php/exercise-plans.php";
?>

    <header class="bar bar-nav">
        <a class="icon icon-left-nav pull-left" href="/index.php?p=exercises" data-transition="slide-out"></a>
        <a class="icon icon-gear pull-right" href="#settings_modal" data-transition="slide-out"></a>
        <h1 class="title">Exercise plans</h1>
    </header>
    <div class="content">
        <!--<h5 style="padding-left: 10px">You don't have any plan.</h5>-->
        <ul class="table-view" style="margin-bottom: 91px">
            <?php foreach ($exercise_plans as $plan){ ?>
                <li class="table-view-cell media">
                    <a id="exercise-menu" data-target="#exercise-<?=$plan['id']?>" style="padding-right: 15px;text-decoration: none;">
                        <img class="media-object pull-left" src="<?=$plan['avatar'] ?>" height="42px" width="42px">
                        <div class="media-body">
                            <?=$plan['name'] ?>
                            <p>Exercise quanty: <?=$plan['number_of_exercises'] ?></p>
                        </div>
                    </a>
                </li>
                <div id="exercise-<?=$plan['id']?>" style="padding-left: 10px; padding-top: 10px; display: none">
                    <ul class="table-view">
                        <?php
                        foreach ($exercise_in_plan[$plan['id']] as $exercise){ ?>
                            <li id="exercise-id-<?=$exercise['id']?>" data-id="<?=$exercise['id']?>" class="table-view-cell media">
                                <a style="padding-right: 15px">
                                    <div class="media-body">
                                    <span id="object_name" style="text-align:left;">
                                        <?=$exercise['name']?>
                                        <span style="float:right;"><i onclick="delete_exercise(this)" style="font-size: 25px" class="fa fa-times" aria-hidden="true"></i></span>
                                    </span>
                                        <?php
                                            if($exercise['unit'] == 'min'){
                                                echo '<p>Time: '.$exercise['quanty'].' min</p>';
                                            }
                                            else if($food['unit'] == 'min'){
                                                echo '<p>Repetitions: '.$exercise['quanty'].'</p>';
                                            }
                                        ?>
                                    </div>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                    <div align="center" id="add_exercise_button">
                        <a id="add_exercise" data-parent="#plan-id-<?=$plan['id']?>" data-id="<?=$plan['id']?>" style="padding: 5px 0; width: 50%" class="btn btn-block btn-positive">Add exercise</a>
                        <hr>
                    </div>
                </div>
            <?php } ?>
        </ul>
        <div align="center" style="margin-bottom: 5px" class="bar bar-standard bar-footer-secondary">
            <button style="width: 45%; display: inline" id="add_meal_button" class="btn btn-block btn-positive">Add plan</button>
            <button style="width: 45%; display: inline" id="remove_meal_button" class="btn btn-block btn-negative">Delete plan</button>
        </div>

        <!-- ADD FOOD MODAL -->
        <div id="add_food_modal" class="modal">
            <header class="bar bar-nav">
                <a class="icon icon-close pull-right" href="#add_food_modal"></a>
                <h1 id="add_food_modal_header" class="title">Add food</h1>
            </header>

            <div class="content">
                <form id="add_food_form" class="content-padded" style="padding-bottom: 20px">
                    <input id="food_menu" name="food_menu" type="text" style="display: none">
                    <h4>Select from our database: </h4>
                    <select id="food_from_database" name="food_from_database" style="width: 100%; height: 40px; margin-bottom: 0">
                        <option></option>
                        <?php
                        foreach ($food_list as $food) {
                            echo '<option value="'.$food['id'].'">'.$food['name'].'</option>';
                        }
                        ?>
                    </select>
                    <div style="padding: 10px 0"><hr></div>
                    <h4>Food name: </h4>
                    <input id="food_name" name="food_name" type="text" min="0" placeholder="Enter food name...">
                    <h4>Food quanty: </h4>
                    <input style="width: 78%" id="food_quanty" name="food_quanty" type="number" min="1" placeholder="Enter food quanty...">
                    <select id="food_unit" name="food_unit" style="width: 20%; height: 40px">
                        <option>g</option>
                        <option>unit</option>
                    </select>
                    <h4 align="center">Nutrition (per 100g or unit)</h4>
                    <table class="add_food_table" style="width: 100%">
                        <tr align="center">
                            <th><p>Protein</p></th>
                            <th><p>Carbs</p></th>
                            <th><p>Fat</p></th>
                            <th><p>Calories</p></th>
                        </tr>
                        <tr align="center">
                            <td><input id="food_protein" name="food_protein" type="number" min="0"></td>
                            <td><input id="food_carbs" name="food_carbs" type="number" min="0"></td>
                            <td><input id="food_fat" name="food_fat" type="number" min="0"></td>
                            <td><input id="food_calories" name="food_calories" type="number" min="0"></td>
                        </tr>
                    </table>
                    <a id="add_food_meal" class="btn btn-positive btn-block">Add</a>
                    <div id="add_food_fail" align="center" style="display: none">
                        <span style="color: red"></span>
                    </div>
                </form>
            </div>
        </div>
        <!-- END FOOD MODAL -->

        <!-- ADD MEAL MODAL -->
        <div id="add_meal_modal" class="modal">
            <header class="bar bar-nav">
                <a class="icon icon-close pull-right" href="#add_meal_modal"></a>
                <h1 class="title">Add meal</h1>
            </header>

            <div class="content">
                <form id="add_meal_form" class="content-padded" style="padding-bottom: 20px">
                    <h4>Meal name: </h4>
                    <input id="meal_name" name="meal_name" type="text" min="0" placeholder="Enter meal name...">
                    <h4>Meal time: </h4>
                    <input id="meal_time" name="meal_time" type="time" min="0" placeholder="Enter meal time...">
                    <h4>Icon: </h4>
                    <div style="padding-bottom: 15px">
                        <?php //for($i = 0; $i < 20; $i++){ ?>
                        <?php foreach ($diet_icons as $icon){ ?>
                            <label>
                                <input type="radio" name="avatar" value="<?=$icon['source'] ?>" />
                                <img height="46px" width="46px" src="<?=$icon['source'] ?>">
                            </label>
                        <?php } ?>
                    </div>
                    <a id="add_meal" class="btn btn-positive btn-block">Add</a>
                    <div id="add_meal_fail" align="center" style="display: none">
                        <span style="color: red"></span>
                    </div>
                </form>
            </div>
        </div>
        <!-- END MEAL MODAL -->

        <!-- REMOVE MEAL MODAL -->
        <div id="remove_meal_modal" class="modal">
            <header class="bar bar-nav">
                <a class="icon icon-close pull-right" href="#remove_meal_modal"></a>
                <h1 id="remove_meal_modal_header" class="title">Remove meal</h1>
            </header>

            <div class="content">
                <form id="remove_meal_form" class="content-padded" style="padding-bottom: 20px">
                    <h4>Select meal to remove: </h4>
                    <select id="remove_meal_select" name="remove_meal_select" style="width: 100%; height: 40px">
                        <?php
                        foreach ($diet_plans as $plan) {
                            echo '<option value="'.date('H:i', strtotime($plan['time'])).'">'.date('h:i A', strtotime($plan['time'])).' - '.$plan['name'].'</option>';
                        }
                        ?>
                    </select>
                    <a id="remove_meal" class="btn btn-negative btn-block">REMOVE</a>
                    <div id="add_food_fail" align="center" style="display: none">
                        <span style="color: red"></span>
                    </div>
                </form>
            </div>
        </div>
        <!-- REMOVE MEAL MODAL -->
    </div>

<?php
print_low_navbar('exercises');

include "footer.php";
?>