<?php
include "header.php";
include "low_navbar.php";
include "lib/php/db.php";

//EXERCISE DETAILS
/*$weight_query = $db->prepare("CALL get_exercise_by_id(".$db->quote($exercise_id).")");
$weight_query->execute();
$exercise = $weight_query->fetch();
$weight_query->closeCursor();*/
?>

<!-- Make sure all your bars are the first things in your <body> -->
<header class="bar bar-nav">
    <a class="icon icon-gear pull-right" href="#settings_modal" data-transition="slide-out"></a>
    <h1 class="title">Profile</h1>
</header>

<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
<div class="content">
    <div class="description" style="padding: 15px">
        <h4 style="display: inline; text-align: left">Current weight: 50kg</h4><span style="float: right;"><a href="#add_weight_modal" class="btn btn-positive">Update</a></span>
    </div>
    <div class="content-padded" align="center">
        <h4>Your weight statistics</h4>
        <div class="segmented-control">
            <a class="control-item" onclick="dailyWeight()">Daily</a>
            <a class="control-item" onclick="monthlyWeight()">Monthly</a>
            <a class="control-item" onclick="allWeight()">All time</a>
        </div>

        <div style="padding-top: 10px" id="container">
            <h5>Select option above...</h5>
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
        <form class="content-padded" style="padding-bottom: 20px">
            <h4>Your weight: </h4>
            <input id="weight_number" name="weight_number" type="number" step="0.01" min="0" placeholder="Enter your weight...">
            <h4>Date of measurement: </h4>
            <input title="weight_date" id="weight_date" type="date" name="weight_date" max="2018-1-1" placeholder="Enter your mesurement date...">
            <a href="#" onclick="$('#weight_number').val(''); $('#weight_date').val('');" class="btn btn-positive btn-block">Save</a>
        </form>
    </div>
</div>
<!-- ADD WEIGHT MODAL -->

<script>
    $( document ).ready(function() {
        alert("ola");
    });

    $(document).on('load','#weight_date',function(){
        alert('started');
    });

    $( window ).load(function() {
        alert("ola");
    });
</script>


<?php
print_low_navbar('profile');

include "footer.php";
?>