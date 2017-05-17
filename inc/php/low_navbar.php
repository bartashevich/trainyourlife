<?php

function print_low_navbar($active_tab){

    $home = '';
    $exercises = '';
    $food = '';

    if($active_tab == 'home'){
        $home = 'active';
    }
    else if($active_tab == 'exercises'){
        $exercises = 'active';
    }
    else if($active_tab == 'food'){
        $food = 'active';
    }

    echo '<nav class="bar bar-tab">
                <a class="tab-item '.$home.'" href="/index.php?p=home" data-transition="slide-in">
                    <span class="icon icon-home"></span>
                    <span class="tab-label">Home</span>
                </a>
                <a class="tab-item '.$exercises.'" href="/index.php?p=exercises" data-transition="slide-in">
                    <span class="icon icon-person"></span>
                    <span class="tab-label">Exercises</span>
                </a>
                <a class="tab-item '.$food.'" href="/index.php?p=food" data-transition="slide-in">
                    <span class="icon icon-star-filled"></span>
                    <span class="tab-label">Food</span>
                </a>
                <a class="tab-item" href="#">
                    <span class="icon icon-person"></span>
                    <span class="tab-label">Profile</span>
                </a>
                <a class="tab-item" href="#">
                    <span class="icon icon-download"></span>
                    <span class="tab-label">History</span>
                </a>
            </nav>';
}