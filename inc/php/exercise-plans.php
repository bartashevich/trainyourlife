<?php
include "header.php";
include "low_navbar.php";
?>

    <header class="bar bar-nav">
        <a class="icon icon-left-nav pull-left" href="/index.php?p=exercises" data-transition="slide-out"></a>
        <a class="icon icon-gear pull-right"></a>
        <h1 class="title">Exercise plans</h1>
    </header>
    <div class="content">
        <!--<h5 style="padding-left: 10px">You don't have any plan.</h5>-->
        <ul class="table-view">
            <li class="table-view-cell media">
                <a id="diet-menu" class="navigate-right" data-target="#eexercise1000" style="padding-right: 15px;text-decoration: none;">
                    <img class="media-object pull-left" src="/img/leg-workout.jpg" height="42px" width="42px">
                    <div class="media-body">
                        10:00 AM - Morning exercise
                        <table class="food" style="width: 100%">
                            <tr align="center">
                                <th><p>Time:</p></th>
                                <th><p>Repetitions:</p></th>
                            </tr>
                            <tr align="center">
                                <td><p>10m</p></td>
                                <td><p>10</p></td>
                            </tr>
                        </table>
                    </div>
                </a>
            </li>
            <div id="exercise1000" style="padding-left: 10px; padding-top: 10px; display: none">
                <ul class="table-view">
                    <li class="table-view-cell media">
                        <a id="navigate_right" class="navigate-right" href="/index.php?p=exercise_details" style="padding-right: 15px;">
                            <img class="media-object pull-left" src="/img/leg-workout.jpg" height="42px" width="42px">
                            <div class="media-body">
                                Jogging <p id="delete_food" style="display: none" align="right"><i style="font-size: 25px" class="fa fa-times" aria-hidden="true"></i></p>
                                <p>Time: 10m</p>
                            </div>
                        </a>
                    </li>

                    <li class="table-view-cell media">
                        <a id="navigate_right" class="navigate-right" href="/index.php?p=product" data-transition="slide-in" style="padding-right: 15px;">
                            <img class="media-object pull-left" src="/img/leg-raises.jpg" height="42px" width="42px">
                            <div class="media-body">
                                Leg raises <p id="delete_exercise" style="display: none" align="right"><i style="font-size: 25px" class="fa fa-times" aria-hidden="true"></i></p>
                                <p>Repetitions: 10</p>
                            </div>
                        </a>
                    </li>

                    <?php if(isset($_POST['exercise_menu']) && $_POST['exercise_menu'] == '#exercise1000'){ ?>

                        <li class="table-view-cell media">
                            <a id="navigate_right" class="navigate-right" href="/index.php?p=exercise_details" data-transition="slide-in" style="padding-right: 15px;">
                                <img class="media-object pull-left" src="" height="42px" width="42px">
                                <div class="media-body">
                                    <?php echo $_POST['exercise_name']; ?> <p id="delete_exercise" style="display: none" align="right"><i style="font-size: 25px" class="fa fa-times" aria-hidden="true"></i></p>
                                    <p>Amount: <?php echo $_POST['exercise_duration']; ?>m</p>
                                </div>
                            </a>
                        </li>

                    <?php } ?>
                </ul>
                <div align="center" id="add_exercise_button" style="display: none">
                    <a id="add_food" data-parent="#eat1000" style="padding: 5px 0; width: 50%" class="btn btn-block btn-positive">Add food</a>
                    <hr>
                </div>
            </div>
            <!--
            <li class="table-view-cell media">
                <a id="diet-menu" class="navigate-right" data-target="#eat1300" style="padding-right: 15px;text-decoration: none;">
                    <img class="media-object pull-left" src="/img/lunch-logo.lpg" height="42px" width="42px">
                    <div class="media-body">
                        13:00 AM - Lunch
                        <table class="food" style="width: 100%">
                            <tr align="center">
                                <th><p>Protein:</p></th>
                                <th><p>Carbs:</p></th>
                                <th><p>Fat:</p></th>
                                <th><p>Calories:</p></th>
                            </tr>
                            <tr align="center">
                                <td><p>10g</p></td>
                                <td><p>3.6g</p></td>
                                <td><p>0.4g</p></td>
                                <td><p>59</p></td>
                            </tr>
                        </table>
                    </div>
                </a>
            </li>
            <div id="eat1300" style="padding-left: 10px; padding-top: 10px; display: none">
                <ul class="table-view">
                    <li class="table-view-cell media">
                        <a id="navigate_right" class="navigate-right" href="/index.php?p=product" data-transition="slide-in" style="padding-right: 15px;">
                            <img class="media-object pull-left" src="https://i.ytimg.com/vi/qlfE0hfsbH0/maxresdefault.jpg" height="42px" width="42px">
                            <div class="media-body">
                                Egg Whites <p id="delete_food" style="display: none" align="right"><i style="font-size: 25px" class="fa fa-times" aria-hidden="true"></i></p>
                            </div>
                        </a>
                    </li>
                    <li class="table-view-cell media">
                        <a id="navigate_right" class="navigate-right" href="/index.php?p=product" data-transition="slide-in" style="padding-right: 15px;">
                            <img class="media-object pull-left" src="http://cdn.chobani.com/prod/chobani.com/img/display/plain/blended-non-fat-plain-53oz.png" height="42px" width="42px">
                            <div class="media-body">
                                Greek Yogurt <p id="delete_food" style="display: none" align="right"><i style="font-size: 25px" class="fa fa-times" aria-hidden="true"></i></p>
                            </div>
                        </a>
                    </li>
                    <?php if(isset($_POST['exercise_menu']) && $_POST['exercise_menu'] == '#eat1300'){ ?>

                        <li class="table-view-cell media">
                            <a id="navigate_right" class="navigate-right" href="/index.php?p=product" data-transition="slide-in" style="padding-right: 15px;">
                                <img class="media-object pull-left" src="" height="42px" width="42px">
                                <div class="media-body">
                                    <?php echo $_POST['exercise_name']; ?> <p id="delete_food" style="display: none" align="right"><i style="font-size: 25px" class="fa fa-times" aria-hidden="true"></i></p>
                                    <p>Amount: <?php echo $_POST['exercise_duration']; ?>g</p>
                                </div>
                            </a>
                        </li>

                    <?php } ?>
                </ul>
                <div align="center" id="add_food_button" style="display: none">
                    <a id="add_food" data-parent="#eat1300" style="padding: 5px 0; width: 50%" class="btn btn-block btn-positive">Add food</a>
                    <hr>
                </div>
            </div>-->
        </ul>
        <div style="margin-bottom: 5px" class="bar bar-standard bar-footer-secondary">
            <button id="edit_button2" onclick="edit_exercise_plan();" class="btn btn-block btn-positive">Edit plan</button>
        </div>
        <div id="add_food_modal" class="modal">
            <header class="bar bar-nav">
                <a class="icon icon-close pull-right" href="#add_food_modal"></a>
                <h1 id="add_food_modal_header" class="title">Modal</h1>
            </header>

            <div class="content">
                <form class="content-padded" style="padding-bottom: 20px" action="/index.php?p=exercise-plans" method="POST">
                    <input id="exercise_menu" name="exercise_menu" type="text" style="display: none">
                    <h4>Exercise name: </h4>
                    <input id="exercise_name" name="exercise_name" type="text" min="0" placeholder="Enter exercise name...">
                    <h4>Exercise duration: </h4>
                    <input id="exercise_duration" name="exercise_duration" type="number" min="1" placeholder="Enter exercise duration...">
                    <button type="submit" class="btn btn-positive btn-block">Add</button>
                </form>
            </div>
        </div>

    </div>

<?php
print_low_navbar('exercises');

include "footer.php";
?>