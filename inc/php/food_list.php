<?php
include "header.php";
include "low_navbar.php";
include "lib/php/db.php";

$food_list_query = $db->prepare("CALL get_food_list()");
$food_list_query->execute();
$food_list = $food_list_query->fetchAll();
$food_list_query->closeCursor();

?>

    <header class="bar bar-nav">
        <a class="icon icon-left-nav pull-left" href="/index.php?p=food" data-transition="slide-out"></a>
        <a class="icon icon-gear pull-right" href="#settings_modal" data-transition="slide-out"></a>
        <h1 class="title">List all food</h1>
    </header>
    <div class="content">
        <ul class="table-view">
            <?php foreach ($food_list as $food){ ?>
            <li class="table-view-cell media">
                <a style="padding-right: 15px;">
                    <div class="media-body">
                        <?=$food['name']?>
                        <table style="width: 100%">
                            <tr align="center">
                                <th><p>Protein:</p></th>
                                <th><p>Carbs:</p></th>
                                <th><p>Fat:</p></th>
                                <th><p>Energy:</p></th>
                            </tr>
                            <tr align="center">
                                <td><p><?=$food['protein']?> g</p></td>
                                <td><p><?=$food['carbs']?> g</p></td>
                                <td><p><?=$food['fat']?> g</p></td>
                                <td><p><?=$food['calories']?> cal</p></td>
                            </tr>
                        </table>
                    </div>
                </a>
            </li>
            <?php } ?>
        </ul>
    </div>

<?php
print_low_navbar('food');

include "footer.php";
?>