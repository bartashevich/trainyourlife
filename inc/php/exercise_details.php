<?php
include "header.php";
?>

    <!-- Make sure all your bars are the first things in your <body> -->
    <header class="bar bar-nav">
        <a class="icon icon-left-nav pull-left" href="/index.php?p=exercise-group" data-transition="slide-out"></a>
        <h1 class="title">Leg Raises</h1>
    </header>

    <!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
    <div class="content" style="padding: 10px">
        <div align="center">
            <img style="max-width: 100%; padding-top: 50px" src="/img/leg-raises.jpg">
        </div>

        <div class="description">
            <hr>
            <h5 align="center">Instructions:</h5>
            <ul>
                <li>
                    Lie down on your back, and out your hands beneath your hips for support.
                </li>
                <li>
                    Then lift your legs up until they form a right angle with the floor.
                </li>
                <li>
                    Slowly bring your legs back down and repeat the exercise.
                </li>
            </ul>
            <hr>
            <h5 align="center">Video:</h5>
            <iframe width="100%" height="250px" src="https://www.youtube.com/embed/JB2oyawG9KI" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>


<?php
include "footer.php";
?>