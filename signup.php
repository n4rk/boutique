<?php
    include "ressources/header.php";
?>

<div class="contact-clean">
    <form method="post">
        <h2 class="text-center">Sign Up</h2>
        <div class="form-group">
            <input class="form-control" type="text" name="fullname" placeholder="Your Name">
        </div>
        <div class="form-group">
            <input class="form-control" type="email" name="mail" placeholder="Email">
            <small class="form-text indic">Please enter a valid email.</small>
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="pwd" placeholder="Password">
        </div>
        <div class="form-group">
            <a href="login.php" class="form-text indic" style="text-decoration:none;font-size:14px;font-weight:bold;">You already have an account ? Log In.</a>
        </div>
        <div class="form-group"><button class="btn btn-primary" type="submit" name="connect">Send</button></div>
    </form>
</div>

<?php
    include "ressources/footer.php";
?>