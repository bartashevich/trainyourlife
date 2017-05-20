<?php
    include "header.php";
?>

<!-- Make sure all your bars are the first things in your <body> -->
<header class="bar bar-nav">
    <a class="icon icon-left-nav pull-left" href="/index.php?p=home" data-transition="slide-out"></a>
    <h1 class="title">Weight Statistics</h1>
</header>

<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
<div class="content">
    <form class="content-padded" style="padding-bottom: 20px">
        <h4>Your weight: </h4>
        <input id="weight_number" name="weight_number" type="number" step="0.01" min="0" placeholder="Enter your weight...">
        <h4>Date of measurement: </h4>
        <input title="weight_date" id="weight_date" type="date" name="weight_date" max="2018-1-1" placeholder="Enter your mesurement date...">
        <a href="#" onclick="$('#weight_number').val(''); $('#weight_date').val('');" class="btn btn-positive btn-block">Save</a>
    </form>
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


<?php
    include "footer.php";
?>