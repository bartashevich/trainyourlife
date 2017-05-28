<?php
include "header.php";
include "low_navbar.php";
include "lib/php/exercise_plans.php";
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
                    <a id="exercise-menu" data-target="#activiy-<?=$plan['id']?>" style="padding-right: 15px;text-decoration: none;">
                        <img class="media-object pull-left" src="<?=$plan['avatar'] ?>" height="42px" width="42px">
                        <div class="media-body">
                            <?=$plan['name'] ?>
                            <p>Exercise quanty: <?=$plan['number_of_exercises'] ?></p>
                        </div>
                    </a>
                </li>
                <div id="activiy-<?=$plan['id']?>" style="padding-left: 10px; padding-top: 10px; display: none">
                    <ul class="table-view">
                        <?php
                        foreach ($exercise_in_plan[$plan['id']] as $exercise){ ?>
                            <li id="exercise-id-<?=$exercise['id']?>" data-id="<?=$exercise['id']?>" class="table-view-cell media">
                                <a href="/index.php?p=exercise_details&exercise=<?=$exercise['id']?>&previous=exercise_plans" style="padding-right: 15px">
                                    <div class="media-body">
                                        <span id="object_name" style="text-align:left;">
                                            <?=$exercise['name']?>
                                            <span style="float:right;"><button class="btn btn-primary">More</button>&nbsp;<i onclick="delete_exercise(this)" style="font-size: 25px" class="fa fa-times" aria-hidden="true"></i></span>
                                        </span>
                                        <?php
                                            if($exercise['unit'] == 'min'){
                                                echo '<p>Time: '.$exercise['quanty'].' min</p>';
                                            }
                                            else if($exercise['unit'] == 'rep'){
                                                echo '<p>Repetitions: '.$exercise['quanty'].'</p>';
                                            }
                                        ?>
                                    </div>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                    <div align="center" id="add_exercise_button">
                        <a id="add_exercise" data-name="<?=$plan['name']?>" data-id="<?=$plan['id']?>" style="padding: 5px 0; width: 50%" class="btn btn-block btn-positive">Add exercise</a>
                        <hr>
                    </div>
                </div>
            <?php } ?>
        </ul>
        <div align="center" style="margin-bottom: 5px" class="bar bar-standard bar-footer-secondary">
            <button style="width: 45%; display: inline" id="add_plan_button" class="btn btn-block btn-positive">Add plan</button>
            <button style="width: 45%; display: inline" id="remove_plan_button" class="btn btn-block btn-negative">Delete plan</button>
        </div>

        <!-- ADD EXERCISE MODAL -->
        <div id="add_exercise_modal" class="modal">
            <header class="bar bar-nav">
                <a class="icon icon-close pull-right" href="#add_exercise_modal"></a>
                <h1 id="add_exercise_modal_header" class="title">Add exercise</h1>
            </header>

            <div class="content">
                <form id="add_exercise_form" class="content-padded" style="padding-bottom: 20px">
                    <input id="exercise_plan" name="exercise_plan" type="text" style="display: none">
                    <h4>Select from our database: </h4>
                    <table class="add_food_table" style="width: 100%">
                        <tr align="center">
                            <th><p>Group</p></th>
                            <th><p>Exercise</p></th>
                        </tr>
                        <tr align="center">
                            <td style="width: 50%">
                                <select style="width: 100%; height: 40px; margin-bottom: 0" id="exercise_group_from_database" name="exercise_group_from_database">
                                    <option value="0">Choose...</option>
                                    <?php
                                    foreach ($exercise_group_list as $group) {
                                        echo '<option value="'.$group['id'].'">'.$group['name'].'</option>';
                                    }
                                    ?>
                                </select>
                            </td style="width: 50%">
                            <td>
                                <select style="width: 100%; height: 40px; margin-bottom: 0" id="exercise_name_from_database" name="exercise_name_from_database">
                                </select>
                            </td>
                        </tr>
                    </table>
                    <!--<select id="exercise_from_database" name="exercise_from_database" style="width: 100%; height: 40px; margin-bottom: 0">
                        <option></option>
                        <?php
                        foreach ($exercise_list as $exercise) {
                            echo '<option value="'.$exercise['id'].'">'.$exercise['name'].'</option>';
                        }
                        ?>
                    </select>-->
                    <div style="padding: 10px 0"><hr></div>
                    <h4>Exercise name: </h4>
                    <input id="exercise_name" name="exercise_name" type="text" min="0" placeholder="Enter exercise name...">
                    <h4>Exercise quanty: </h4>
                    <input style="width: 78%" id="exercise_quanty" name="exercise_quanty" type="number" min="1" placeholder="Enter exercise quanty...">
                    <select id="exercise_unit" name="exercise_unit" style="width: 20%; height: 40px">
                        <option value="min">min</option>
                        <option value="rep">rep</option>
                    </select>
                    <a id="add_exercise_to_plan" class="btn btn-positive btn-block">Add</a>
                    <div id="add_exercise_fail" align="center" style="display: none">
                        <span style="color: red"></span>
                    </div>
                </form>
            </div>
        </div>
        <!-- END EXERCISE MODAL -->

        <!-- ADD PLAN MODAL -->
        <div id="add_plan_modal" class="modal">
            <header class="bar bar-nav">
                <a class="icon icon-close pull-right" href="#add_plan_modal"></a>
                <h1 class="title">Add plan</h1>
            </header>

            <div class="content">
                <form id="add_plan_form" class="content-padded" style="padding-bottom: 20px">
                    <h4>Plan name: </h4>
                    <input id="plan_name" name="plan_name" type="text" min="0" placeholder="Enter plan name...">
                    <h4>Icon: </h4>
                    <div style="padding-bottom: 15px">
                        <?php foreach ($exercise_icons as $icon){ ?>
                            <label>
                                <input type="radio" name="avatar" value="<?=$icon['source'] ?>" />
                                <img height="46px" width="46px" src="<?=$icon['source'] ?>">
                            </label>
                        <?php } ?>
                    </div>
                    <a id="add_plan" class="btn btn-positive btn-block">Add</a>
                    <div id="add_plan_fail" align="center" style="display: none">
                        <span style="color: red"></span>
                    </div>
                </form>
            </div>
        </div>
        <!-- END PLAN MODAL -->

        <!-- REMOVE PLAN MODAL -->
        <div id="remove_plan_modal" class="modal">
            <header class="bar bar-nav">
                <a class="icon icon-close pull-right" href="#remove_plan_modal"></a>
                <h1 id="remove_plan_modal_header" class="title">Remove plan</h1>
            </header>

            <div class="content">
                <form id="remove_plan_form" class="content-padded" style="padding-bottom: 20px">
                    <h4>Select plan to remove: </h4>
                    <select id="remove_plan_select" name="remove_plan_select" style="width: 100%; height: 40px">
                        <?php
                            foreach ($exercise_plans as $plan) {
                                echo '<option value="'.$plan['name'].'">'.$plan['name'].'</option>';
                            }
                        ?>
                    </select>
                    <a id="remove_plan" class="btn btn-negative btn-block">REMOVE</a>
                    <div id="add_plan_fail" align="center" style="display: none">
                        <span style="color: red"></span>
                    </div>
                </form>
            </div>
        </div>
        <!-- REMOVE PLAN MODAL -->
    </div>

<?php
print_low_navbar('exercises');

include "footer.php";
?>