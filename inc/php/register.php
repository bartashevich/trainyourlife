<?php
include "header.php";
?>

<!-- Make sure all your bars are the first things in your <body> -->
<header class="bar bar-nav">
    <a class="icon icon-left-nav pull-left" href="/index.php?p=login" data-transition="slide-out"></a>
    <h1 class="title">Register</h1>
</header>

<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
<div class="content">
    <form class="content-padded">
        <input type="text" placeholder="Full name">
        <input type="text" placeholder="Username">
        <input type="email" placeholder="Email">
        <input type="password" placeholder="Password">
        <input type="password" placeholder="Password (again)">
        <button class="btn btn-positive btn-block">Register</button>
    </form>
</div>

</body>
</html>
