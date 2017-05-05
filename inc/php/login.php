<?php
    include "header.php";
?>

<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
<!--<div class="content" style="background-color: #8f8f94" align="center">
    <div style="padding: 20px; margin: 20px; width: 300px">
        <div class="content-padded" align="center">
            <img style="max-width: 100%" src="/uploads/images/logo.png">
        </div>
        <form class="input-group">
            <input type="email" placeholder="Email">
            <input type="password" placeholder="Password">
        </form>
        <div align="center" style="padding-top: 30px">
            <button class="btn btn-primary" style="width: 130px">LOG IN</button>
        </div>
        <div align="center" style="padding-top: 30px">
            <p><a class="push-right" data-transition="slide-in" href="#recoverModal">Forgot your password?</a><br>
                <a class="push-right" href="/index.php?p=register" data-transition="slide-in">Don't have an account yet?</a></p>
        </div>
    </div>
</div>-->

<!-- Register Modal -->
<!--<div id="registerModal" class="modal">
    <header class="bar bar-nav">
        <a class="icon icon-close pull-right" href="#registerModal"></a>
        <h1 class="title">Registration</h1>
    </header>

    <div class="content">
        <form class="input-group">
            <input type="text" placeholder="Full name">
            <input type="email" placeholder="Email">
            <input type="text" placeholder="Username">
            <input type="password" placeholder="Password">
            <input type="password" placeholder="Password confirmation">
        </form>
        <div class="content-padded">
            <button class="btn btn-positive btn-block">Register</button>
        </div>
    </div>
</div>-->

<!-- Recover Modal -->
<!--<div id="recoverModal" class="modal">
    <header class="bar bar-nav">
        <a class="icon icon-close pull-right" href="#recoverModal"></a>
        <h1 class="title">Password Recovery</h1>
    </header>

    <div class="content">
        <form class="input-group">
            <input type="email" placeholder="Type your email">
        </form>
        <div class="content-padded">
            <button class="btn btn-positive btn-block">Recover</button>
        </div>
    </div>
</div>

</body>
</html>-->

<!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
<div class="content">
    <div class="content-padded" align="center">
        <img style="max-width: 100%" src="/uploads/images/logo.png">
    </div>
    <form class="content-padded">
        <input type="text" placeholder="Email / Username">
        <input type="password" placeholder="Password">
        <button class="btn btn-positive btn-block">Login</button>
        <a href="/index.php?p=home" data-transition="slide-in" class="btn btn-primary btn-block">Continue without login...</a>
    </form>
    <div align="center" style="padding-top: 30px">
        <p><a href="/index.php?p=password_recovery" data-transition="slide-in">Forgot your password?</a><br>
            <a href="/index.php?p=register" data-transition="slide-in">Don't have an account yet?</a></p>
    </div>
</div>

<?php
    include "footer.php";
?>