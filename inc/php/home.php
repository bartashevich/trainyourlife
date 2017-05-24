<?php
    include "header.php";
    include "low_navbar.php";

    session_start();

    if(!isset($_SESSION['token'])){
        header("Location: /index.php?p=login_first");
        die();
    }
?>

<header class="bar bar-nav">
    <a href="/index.php?p=settings" data-transition="slide-in" class="icon icon-gear pull-right"></a>
    <h1 class="title">Home</h1>
</header>
<div class="content">
    <ul class="table-view">
        <!--<li class="table-view-cell" style="padding-right: 15px">
            <div id="muscle_spider_chart" style="min-width: 400px; max-width: 600px; height: 400px; margin: 0 auto"></div>
        </li>-->

        <li style="padding: 5px 15px" class="table-view-divider text-center">Current Food Plan</li>
        <li class="table-view-cell media">
            <a class="navigate-right" href="/index.php?p=diet-plans" data-transition="slide-in" style="padding-right: 15px;">
                <img class="media-object pull-left" src="/img/food_plan_personal.jpg" height="42px" width="42px">
                <div class="media-body">
                    My personal plan
                    <table style="width: 100%">
                        <tr class="food" align="center">
                            <th><p>Protein:</p></th>
                            <th><p>Carbs:</p></th>
                            <th><p>Fat:</p></th>
                            <th><p>Calories:</p></th>
                        </tr>
                        <tr align="center">
                            <td><p>200g</p></td>
                            <td><p>557g</p></td>
                            <td><p>75g</p></td>
                            <td><p>3703</p></td>
                        </tr>
                    </table>
                </div>
            </a>
        </li>
        <li class="table-view-divider"></li>
        <li style="padding: 5px 15px" class="table-view-divider text-center">Current Exercise Plan</li>
        <li class="table-view-cell media">
            <a class="navigate-right" href="/index.php?p=exercise-plans" data-transition="slide-in" style="padding-right: 15px;">
                <img class="media-object pull-left" src="/img/exercise_plan_personal.jpg" height="42px" width="42px">
                <div class="media-body">
                    Workout Plan
                    <p>39 days left</p>
                </div>
            </a>
        </li>
    </ul>
</div>

<?php
    print_low_navbar('home');

    include "footer.php";
?>