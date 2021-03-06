<?php
include "header.php";
include "low_navbar.php";
?>

    <header class="bar bar-nav">
        <a class="icon icon-gear pull-right" href="#settings_modal" data-transition="slide-out"></a>
        <h1 class="title">Food</h1>
    </header>
    <div class="content">
        <ul class="table-view">
            <li class="table-view-cell media">
                <a class="navigate-right" href="/index.php?p=diet_plans" data-transition="slide-in" style="padding-right: 15px;">
                    <img class="media-object pull-left" src="/img/diet-plan.jpg" height="42px" width="42px">
                    <div class="media-body">
                        My diet
                    </div>
                </a>
            </li>
            <li class="table-view-cell media">
                <a class="navigate-right" href="/index.php?p=food_list" data-transition="slide-in" style="padding-right: 15px;">
                    <img class="media-object pull-left" src="/img/list-food.jpg" height="42px" width="42px">
                    <div class="media-body">
                        List all food
                    </div>
                </a>
            </li>
        </ul>
    </div>

<?php
print_low_navbar('food');

include "footer.php";
?>