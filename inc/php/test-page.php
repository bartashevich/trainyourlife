<?php
include "header.php";
?>

    <header class="bar bar-nav">
        <a href="/index.php?p=settings" data-transition="slide-in" class="icon icon-gear pull-right"></a>
        <h1 class="title">Home</h1>
    </header>
    <div class="content">
        <a href="#myModalexample" class="btn">Open modal</a>
        <div id="myModalexample" class="modal">
            <header class="bar bar-nav">
                <a class="icon icon-close pull-right" href="#myModalexample"></a>
                <h1 class="title">Modal</h1>
            </header>

            <div class="content">
                <p class="content-padded">The contents of my modal go here. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
            </div>
        </div>
    </div>

<?php

include "footer.php";
?>