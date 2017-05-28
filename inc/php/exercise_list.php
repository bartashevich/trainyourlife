<?php
include "header.php";
include "low_navbar.php";
include "lib/php/db.php";

$group_id = 0;
$previous_url = 'exercise_list';

if(isset($_GET['group'])){
    $group_id = $_GET['group'];
    $previous_url .= '&group='.$group_id;
}

$group_name_query = $db->prepare("SELECT exercise_group.`name` FROM exercise_group WHERE exercise_group.id = ".$db->quote($group_id));
$group_name_query->execute();
$group_name = $group_name_query->fetch();
$group_name_query->closeCursor();

if($group_id == 0){
    $group_name['name'] = 'All';
}
else if($group_name['name'] == null){
    exit();
}

$exercise_list_query = $db->prepare("CALL get_exercise_by_group(".$db->quote($group_id).")");
$exercise_list_query->execute();
$exercise_list = $exercise_list_query->fetchAll();
$exercise_list_query->closeCursor();

?>

    <header class="bar bar-nav">
        <a class="icon icon-left-nav pull-left" href="/index.php?p=exercise_group" data-transition="slide-out"></a>
        <a class="icon icon-gear pull-right" href="#settings_modal" data-transition="slide-out"></a>
        <h1 class="title"><?=$group_name['name']?></h1>
    </header>
    <div class="content">
        <ul class="table-view">
            <?php foreach ($exercise_list as $exercise){ ?>
            <li class="table-view-cell media">
                <a class="navigate-right" href="/index.php?p=exercise_list_details&exercise=<?=$exercise['id']?>&previous=<?=urlencode($previous_url)?>" data-transition="slide-in" style="padding-right: 15px;">
                    <div class="media-body">
                        <?=$exercise['name']?>
                    </div>
                </a>
            </li>
            <?php } ?>
        </ul>
    </div>

<?php
print_low_navbar('exercises');

include "footer.php";
?>