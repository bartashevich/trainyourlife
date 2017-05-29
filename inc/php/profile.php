<?php
include "header.php";
include "low_navbar.php";
include "lib/php/db.php";

//USERS WEIGHT HISTORY
$weight_query = $db->prepare("CALL get_users_weight(".$db->quote($_SESSION['token']).")");
$weight_query->execute();
$weight = $weight_query->fetchAll();
$weight_query->closeCursor();

//CURRENT WEIGHT
$current_weight_query = $db->prepare("CALL get_current_weight(".$db->quote($_SESSION['token']).")");
$current_weight_query->execute();
$current_weight = $current_weight_query->fetch();
$current_weight_query->closeCursor();

if($current_weight['weight'] != null){
    $current_weight = $current_weight['weight']."kg";
}
else{
    $current_weight = 'Unknown';
}

?>

<!-- Make sure all your bars are the first things in your <body> -->
<header class="bar bar-nav">
    <a class="icon icon-gear pull-right" href="#settings_modal" data-transition="slide-out"></a>
    <h1 class="title">Profile</h1>
</header>

<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
<div class="content">
    <div class="description" style="padding: 15px">
        <h4 style="display: inline; text-align: left">Current weight: <?=$current_weight?></h4><span style="float: right;"><a href="#add_weight_modal" data-transition="slide-out" class="btn btn-positive">Update</a></span>
    </div>
    <div style="padding: 15px 0"><hr></div>
    <div class="content-padded" align="center">
        <h4>Your weight statistics</h4>
        <div class="segmented-control">
            <a class="control-item" onclick="dailyWeight()">Daily</a>
            <a class="control-item" onclick="monthlyWeight()">Monthly</a>
            <a class="control-item active" onclick="$('#weight_container').show();$('#container').hide();">All time</a>
        </div>
        <div style="padding-top: 10px; padding-right: 10px; display: none" id="container"></div>
        <div style="padding-top: 10px" id="weight_container">
            <table class="weight">
                <tr>
                    <th>Date</th>
                    <th>Weight</th>
                </tr>
                <?php foreach ($weight as $measure){ ?>
                <tr>
                    <td><?=$measure['date']?></td>
                    <td><?=$measure['weight']?> kg</td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>

<!-- ADD WEIGHT MODAL -->
<div id="add_weight_modal" class="modal">
    <header class="bar bar-nav">
        <a class="icon icon-close pull-right" href="#add_weight_modal"></a>
        <h1 id="add_weight_modal_header" class="title">Add weight</h1>
    </header>

    <div class="content">
        <form id="add_weight_form" class="content-padded" style="padding-bottom: 20px">
            <h4>Your weight: </h4>
            <input id="weight_number" name="weight_number" type="number" step="0.01" min="0" placeholder="Enter your weight...">
            <h4>Date of measurement: </h4>
            <input title="weight_date" id="weight_date" type="date" name="weight_date" value="<?=date("Y-m-d")?>">
            <a id="add_weight" name="add_weight" class="btn btn-positive btn-block">Save</a>
            <div id="add_weight_success" align="center" style="display: none">
                <span style="color: green">Your weight was registered.</span>
            </div>
            <div id="add_weight_fail" align="center" style="display: none">
                <span style="color: red"></span>
            </div>
        </form>
    </div>
</div>
<!-- ADD WEIGHT MODAL -->


<?php
print_low_navbar('profile');

include "footer.php";
?>