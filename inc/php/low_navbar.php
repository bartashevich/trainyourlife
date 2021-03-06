<?php

function print_low_navbar($active_tab){

    $home = '';
    $exercises = '';
    $food = '';
    $profile = '';
    $history = '';

    if($active_tab == 'home'){
        $home = 'active';
    }
    else if($active_tab == 'exercises'){
        $exercises = 'active';
    }
    else if($active_tab == 'food'){
        $food = 'active';
    }
    else if($active_tab == 'profile'){
        $profile = 'active';
    }
    else if($active_tab == 'history'){
        $history = 'active';
    }

    echo '<nav class="bar bar-tab">
                <a class="tab-item '.$home.'" href="/index.php?p=home" data-transition="slide-in">
                    <span class="icon"><img height="15px" width="15px" src="/img/rsz_home-512.png"></span>
                    <span class="tab-label">Home</span>
                </a>
                <a class="tab-item '.$exercises.'" href="/index.php?p=exercises" data-transition="slide-in">
                    <span class="icon"><img height="15px" width="15px" src="/img/rsz_73-512.png"></span>
                    <span class="tab-label">Exercises</span>
                </a>
                <a class="tab-item '.$food.'" href="/index.php?p=food" data-transition="slide-in">
                    <span class="icon"><img height="15px" width="15px" src="/img/rsz_restaurant.jpg"></span>
                    <span class="tab-label">Food</span>
                </a>
                <a class="tab-item '.$profile.'" href="/index.php?p=profile" data-transition="slide-in">
                    <span class="icon"><img height="15px" width="15px" src="/img/rsz_user-icon.png"></span>
                    <span class="tab-label">Profile</span>
                </a>
                <a class="tab-item '.$history.'" href="/index.php?p=history" data-transition="slide-in">
                    <span class="icon"><img height="15px" width="15px" src="/img/rsz_ic_history.png"></span>
                    <span class="tab-label">History</span>
                </a>
            </nav>';

    echo '<!-- SETTINGS MODAL -->
    <div id="settings_modal" class="modal">
        <header class="bar bar-nav">
            <a class="icon icon-close pull-right" href="#settings_modal"></a>
            <h1 class="title">Settings</h1>
        </header>
        <div class="content">
            <ul class="table-view">
                <li class="table-view-cell">
                    Login Status
                    <div id="logout_button" onclick="logout_button()" class="toggle active">
                        <div class="toggle-handle"></div>
                    </div>
                </li>
                <li style="padding-right: 15px" class="table-view-cell">
                    <span style="text-align:left">Language</span>
                    <span style="float: right">
                        <select style="height: 40px; margin-bottom: 0">
                            <option>English</option>
                            <option>Portuguese</option>
                        </select>
                    </span>
                </li>
            </ul>
        </div>
    </div>
    <!-- REMOVE MEAL MODAL -->';
}