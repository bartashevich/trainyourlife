<?php
include "header.php";
include "low_navbar.php";
?>

    <header class="bar bar-nav">
        <a class="icon icon-gear pull-right" href="#settings_modal" data-transition="slide-out"></a>
        <h1 class="title">Exercises</h1>
    </header>
    <div class="content">
        <ul class="table-view">
            <li class="table-view-cell media">
                <a class="navigate-right" href="/index.php?p=exercise_plans" data-transition="slide-in" style="padding-right: 15px;">
                    <img class="media-object pull-left" src="/img/exercise-plan.jpg" height="42px" width="42px">
                    <div class="media-body">
                        Exercise plans
                    </div>
                </a>
            </li>
            <li class="table-view-cell media">
                <a class="navigate-right" href="/index.php?p=exercise_group" data-transition="slide-in" style="padding-right: 15px;">
                    <img class="media-object pull-left" src="/img/list-exercises.jpg" height="42px" width="42px">
                    <div class="media-body">
                        List all exercises
                    </div>
                </a>
            </li>
        </ul>
    </div>

<?php
print_low_navbar('exercises');

include "footer.php";
?>