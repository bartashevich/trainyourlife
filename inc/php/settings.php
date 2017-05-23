<?php
include "header.php";
include "low_navbar.php";
?>

    <header class="bar bar-nav">
        <a class="icon icon-gear pull-right"></a>
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
        </ul>
    </div>

<?php
print_low_navbar('');

include "footer.php";
?>