<?php
    include "header.php";
    include "low_navbar.php";
?>

<header class="bar bar-nav">
    <a class="icon icon-left-nav pull-left" href="/index.php?p=exercises" data-transition="slide-out"></a>
    <a class="icon icon-gear pull-right" href="#settings_modal" data-transition="slide-out"></a>
    <h1 class="title">Exercises</h1>
</header>
<div class="content">
    <ul class="table-view">
        <li class="table-view-cell media">
            <a class="navigate-right" href="/index.php?p=exercise-group" data-transition="slide-in" style="padding-right: 15px;">
                <img class="media-object pull-left" src="/img/abs-workout.jpg" height="42px" width="42px">
                <div class="media-body">
                    Abs
                </div>
            </a>
        </li>
        <li class="table-view-cell media">
            <a class="navigate-right" href="/index.php?p=exercise-group" data-transition="slide-in" style="padding-right: 15px;">
                <img class="media-object pull-left" src="/img/butt-workout.jpg" height="42px" width="42px">
                <div class="media-body">
                    Butt
                </div>
            </a>
        </li>
        <li class="table-view-cell media">
            <a class="navigate-right" href="/index.php?p=exercise-group" data-transition="slide-in" style="padding-right: 15px;">
                <img class="media-object pull-left" src="/img/arm-workout.jpg" height="42px" width="42px">
                <div class="media-body">
                    Arm
                </div>
            </a>
        </li>
        <li class="table-view-cell media">
            <a class="navigate-right" href="/index.php?p=exercise-group" data-transition="slide-in" style="padding-right: 15px;">
                <img class="media-object pull-left" src="/img/leg-workout.jpg" height="42px" width="42px">
                <div class="media-body">
                    Leg
                </div>
            </a>
        </li>
        <li class="table-view-cell media">
            <a class="navigate-right" href="/index.php?p=exercise-group" data-transition="slide-in" style="padding-right: 15px;">
                <img class="media-object pull-left" src="/img/chest-workout.jpg" height="42px" width="42px">
                <div class="media-body">
                    Chest
                </div>
            </a>
        </li>
        <li class="table-view-cell media">
            <a class="navigate-right" href="/index.php?p=exercise-group" data-transition="slide-in" style="padding-right: 15px;">
                <img class="media-object pull-left" src="/img/back-workout.jpg" height="42px" width="42px">
                <div class="media-body">
                    Back
                </div>
            </a>
        </li>
        <li class="table-view-cell media">
            <a class="navigate-right" href="/index.php?p=exercise-group" data-transition="slide-in" style="padding-right: 15px;">
                <img class="media-object pull-left" src="/img/full-body-workout.jpg" height="42px" width="42px">
                <div class="media-body">
                    All exercises
                </div>
            </a>
        </li>
    </ul>
</div>

<?php
    print_low_navbar('exercises');

    include "footer.php";
?>