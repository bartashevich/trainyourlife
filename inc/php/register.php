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
    <form id="register" class="content-padded">
        <input id="full_name" name="full_name" type="text" placeholder="Full name">
        <input id="username" name="username" type="text" placeholder="Username">
        <input id="email" name="email" type="email" placeholder="Email">
        <input id="password" name="password" type="password" placeholder="Password">
        <input id="password_again" name="password_again" type="password" placeholder="Password (again)">
        <a onclick="register()" class="btn btn-positive btn-block">Register</a>
    </form>
    <div id="register_success" align="center" style="display: none">
        <span style="color: green">You were registered successfully!</span>
    </div>
    <div id="register_fail" align="center" style="display: none">
        <span style="color: red">A problem has occured!</span>
    </div>
</div>

<?php
    include "footer.php";
?>