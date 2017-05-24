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
            <li class="table-view-cell">
                <a href="/index.php?p=weight_stats" data-transition="slide-in" style="padding-right: 15px;">
                    <div class="media-body">
                        <i style="padding: 0 12px" class="fa fa-balance-scale" aria-hidden="true"></i> Insert your weight ... <i class="fa fa-bar-chart pull-right" aria-hidden="true"></i>
                    </div>
                </a>
            </li>
            <li class="table-view-cell table-view-divider"></li>

            <!--<li class="table-view-cell" style="padding-right: 15px">
                <div id="muscle_spider_chart" style="min-width: 400px; max-width: 600px; height: 400px; margin: 0 auto"></div>
            </li>-->
        </ul>
    </div>

<?php
print_low_navbar('profile');

include "footer.php";
?>