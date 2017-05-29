<?php
    include "header.php";
    include "low_navbar.php";
    include "lib/php/db.php";

    if(isset($_SESSION['token'])){
        $token = $_SESSION['token'];
    }
    else{
        exit();
    }

    $nutrition_query = $db->prepare("CALL get_daily_nutrition(".$db->quote($token).")");
    $nutrition_query->execute();
    $nutrition = $nutrition_query->fetch();
    $nutrition_query->closeCursor();

?>

<header class="bar bar-nav">
    <a class="icon icon-gear pull-right" href="#settings_modal" data-transition="slide-out"></a>
    <h1 class="title">Home</h1>
</header>
<div class="content">
    <ul class="table-view">
        <!--<li class="table-view-cell" style="padding-right: 15px">
            <div id="muscle_spider_chart" style="min-width: 400px; max-width: 600px; height: 400px; margin: 0 auto"></div>
        </li>-->

        <li style="padding: 5px 15px" class="table-view-divider text-center">Current Food Plan</li>
        <li class="table-view-cell media">
            <a href="/index.php?p=diet_plans" data-transition="slide-in" style="padding-right: 15px;">
                <img class="media-object pull-left" src="/img/food_plan_personal.jpg" height="42px" width="42px">
                <div class="media-body">
                    My personal plan
                    <table style="width: 100%">
                        <tr class="food" align="center">
                            <th><p>Protein:</p></th>
                            <th><p>Carbs:</p></th>
                            <th><p>Fat:</p></th>
                            <th><p>Energy:</p></th>
                        </tr>
                        <tr align="center">
                            <td><p><?=$nutrition['protein_sum']?>g</p></td>
                            <td><p><?=$nutrition['carbs_sum']?>g</p></td>
                            <td><p><?=$nutrition['fat_sum']?>g</p></td>
                            <td><p><?=$nutrition['calories_sum']?> cal</p></td>
                        </tr>
                    </table>
                </div>
            </a>
        </li>
        <li class="table-view-divider"></li>
        <li style="padding: 5px 15px" class="table-view-divider text-center">Current Exercise Plan</li>
        <li class="table-view-cell media">
            <a href="/index.php?p=exercise_plans" data-transition="slide-in" style="padding-right: 15px;">
                <img class="media-object pull-left" src="/img/exercise_plan_personal.jpg" height="42px" width="42px">
                <div class="media-body">
                    Workout Plan
                </div>
            </a>
        </li>
    </ul>
</div>

<?php
    print_low_navbar('home');

    include "footer.php";
?>