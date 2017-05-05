<?php
    include "header.php";
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
                    <i style="padding: 0px 11.5px" class="fa fa-balance-scale" aria-hidden="true"></i> 72.00 kg <i class="fa fa-bar-chart pull-right" aria-hidden="true"></i>
                </div>
            </a>
        </li>
        <li class="table-view-cell table-view-divider"></li>
        <li class="table-view-cell" style="padding-right: 15px">
            <div align="center">
                <h4>Muscle Usage</h4>
                <img align="center" height="200px" src="http://www.advsofteng.com/images/multiradar_g.png">
            </div>
        </li>
    </ul>
</div>

<nav class="bar bar-tab">
    <a class="tab-item active" href="/index.php?p=home" data-transition="slide-in">
        <span class="icon icon-home"></span>
        <span class="tab-label">Home</span>
    </a>
    <a class="tab-item" href="/index.php?p=exercises" data-transition="slide-in">
        <span class="icon icon-person"></span>
        <span class="tab-label">Exercises</span>
    </a>
    <a class="tab-item" href="/index.php?p=food" data-transition="slide-in">
        <span class="icon icon-star-filled"></span>
        <span class="tab-label">Food</span>
    </a>
    <a class="tab-item" href="#">
        <span class="icon icon-search"></span>
        <span class="tab-label">Search</span>
    </a>
    <a class="tab-item" href="#">
        <span class="icon icon-gear"></span>
        <span class="tab-label">Settings</span>
    </a>
</nav>

<?php
    include "footer.php";
?>