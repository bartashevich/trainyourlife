<?php
include "header.php";
include "low_navbar.php";
?>

    <header class="bar bar-nav">
        <a class="icon icon-left-nav pull-left" href="/index.php?p=exercises" data-transition="slide-out"></a>
        <a class="icon icon-gear pull-right"></a>
        <h1 class="title">Exercise plans</h1>
    </header>
    <div class="content">
        <h5 style="padding-left: 10px">You don't have any plan.</h5>
        <div style="margin-bottom: 5px" class="bar bar-standard bar-footer-secondary">
            <button class="btn btn-block btn-positive">Make new plan</button>
        </div>
    </div>

<?php
print_low_navbar('exercises');

include "footer.php";
?>