<?php
    include "header.php";
    include "low_navbar.php";
    include "lib/php/db.php";

    $exercise_group_list_query = $db->prepare("CALL get_exercise_group_list()");
    $exercise_group_list_query->execute();
    $exercise_group_list = $exercise_group_list_query->fetchAll();
    $exercise_group_list_query->closeCursor();
?>

<header class="bar bar-nav">
    <a class="icon icon-left-nav pull-left" href="/index.php?p=exercises" data-transition="slide-out"></a>
    <a class="icon icon-gear pull-right" href="#settings_modal" data-transition="slide-out"></a>
    <h1 class="title">Exercises</h1>
</header>
<div class="content">
    <ul class="table-view">
        <?php foreach ($exercise_group_list as $group){ ?>
            <li class="table-view-cell media">
                <a class="navigate-right" href="/index.php?p=exercise_list&group=<?=$group['id']?>" data-transition="slide-in" style="padding-right: 15px;">
                    <img class="media-object pull-left" src="<?=$group['avatar']?>" height="42px" width="42px">
                    <div class="media-body">
                        <?=$group['name']?>
                    </div>
                </a>
            </li>
        <?php } ?>
        <li class="table-view-cell media">
            <a class="navigate-right" href="/index.php?p=exercise_list" data-transition="slide-in" style="padding-right: 15px;">
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