<?php
include "header.php";
include "low_navbar.php";
?>

    <header class="bar bar-nav">
        <h1 class="title">Login first</h1>
    </header>
    <div class="content">
        <h4 align="center" style="padding-top: 25px">You need to login first...</h4>
        <p align="center"><a href="/index.php?p=login" class="btn btn-primary">Login page</a></p>
    </div>

<?php
print_low_navbar('');

include "footer.php";
?>