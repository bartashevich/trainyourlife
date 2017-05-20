<?php
include "header.php";
include "low_navbar.php";

print_r($_POST);
?>

<header class="bar bar-nav">
    <a class="icon icon-left-nav pull-left" href="/index.php?p=food" data-transition="slide-out"></a>
    <a class="icon icon-gear pull-right"></a>
    <h1 class="title">My diet</h1>
</header>
<div class="content">
    <!--<h5 style="padding-left: 10px">You don't have any plan.</h5>-->
    <ul class="table-view">
        <li class="table-view-cell media">
            <a id="diet-menu" class="navigate-right" data-target="#eat1000" style="padding-right: 15px;text-decoration: none;">
                <img class="media-object pull-left" src="/img/breakfast_logo.jpg" height="42px" width="42px">
                <div class="media-body">
                    10:00 AM - Breakfast
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
        <div id="eat1000" style="padding-left: 10px; padding-top: 10px; display: none">
            <ul class="table-view">
                <li class="table-view-cell media">
                    <a id="navigate_right" class="navigate-right" href="/index.php?p=product" style="padding-right: 15px;">
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
                            <p>Amount: 200g</p>
                        </div>
                    </a>
                </li>
                <?php if(isset($_POST['food_menu']) && $_POST['food_menu'] == '#eat1000'){ ?>

                <li class="table-view-cell media">
                    <a id="navigate_right" class="navigate-right" href="/index.php?p=product" data-transition="slide-in" style="padding-right: 15px;">
                        <img class="media-object pull-left" src="" height="42px" width="42px">
                        <div class="media-body">
                            <?php echo $_POST['food_name']; ?> <p id="delete_food" style="display: none" align="right"><i style="font-size: 25px" class="fa fa-times" aria-hidden="true"></i></p>
                            <p>Amount: <?php echo $_POST['food_quanty']; ?>g</p>
                        </div>
                    </a>
                </li>

                <?php } ?>
            </ul>
            <div align="center" id="add_food_button" style="display: none">
                <a id="add_food" data-parent="#eat1000" style="padding: 5px 0; width: 50%" class="btn btn-block btn-positive">Add food</a>
                <hr>
            </div>
        </div>
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
                <?php if(isset($_POST['food_menu']) && $_POST['food_menu'] == '#eat1300'){ ?>

                    <li class="table-view-cell media">
                        <a id="navigate_right" class="navigate-right" href="/index.php?p=product" data-transition="slide-in" style="padding-right: 15px;">
                            <img class="media-object pull-left" src="" height="42px" width="42px">
                            <div class="media-body">
                                <?php echo $_POST['food_name']; ?> <p id="delete_food" style="display: none" align="right"><i style="font-size: 25px" class="fa fa-times" aria-hidden="true"></i></p>
                                <p>Amount: <?php echo $_POST['food_quanty']; ?>g</p>
                            </div>
                        </a>
                    </li>

                <?php } ?>
            </ul>
            <div align="center" id="add_food_button" style="display: none">
                <a id="add_food" data-parent="#eat1300" style="padding: 5px 0; width: 50%" class="btn btn-block btn-positive">Add food</a>
                <hr>
            </div>
        </div>
    </ul>
    <div style="margin-bottom: 5px" class="bar bar-standard bar-footer-secondary">
        <button id="edit_button" onclick="edit_food_plan();" class="btn btn-block btn-positive">Edit plan</button>
    </div>
    <div id="add_food_modal" class="modal">
        <header class="bar bar-nav">
            <a class="icon icon-close pull-right" href="#add_food_modal"></a>
            <h1 id="add_food_modal_header" class="title">Modal</h1>
        </header>

        <div class="content">
            <form class="content-padded" style="padding-bottom: 20px" action="/index.php?p=diet-plans" method="POST">
                <input id="food_menu" name="food_menu" type="text" style="display: none">
                <h4>Food name: </h4>
                <input id="food_name" name="food_name" type="text" min="0" placeholder="Enter food name...">
                <h4>Food quanty: </h4>
                <input id="food_quanty" name="food_quanty" type="number" min="1" placeholder="Enter food quanty...">
                <button type="submit" class="btn btn-positive btn-block">Add</button>
            </form>
        </div>
    </div>

</div>

<?php
print_low_navbar('food');

include "footer.php";
?>