<?php
    include "ressources/header.php";
    if(isset($_SESSION['user'])) {
        header("location:index.php");
    }
    if(isset($_POST['signup'])) {
        $fname = htmlspecialchars($_POST['fullname']);
        $mail = htmlspecialchars($_POST['mail']);
        $mdp = htmlspecialchars($_POST['pwd']);
        $sql = "INSERT INTO users(fullname,email,password) VALUES('{$fname}','{$mail}','{$mdp}')";
        $req = $cnx->prepare($sql);
        $req->execute();
        $_SESSION['user']['id'] = $res['id'];
        $_SESSION['user']['name'] = $res['fullname'];
        header("location:index.php");
    }
?>

<div class="contact-clean">
    <form method="post">
        <h2 class="text-center">Sign Up</h2>
        <div class="form-group">
            <input class="form-control" type="text" name="fullname" placeholder="Your Name" required>
        </div>
        <div class="form-group">
            <input class="form-control" type="email" name="mail" placeholder="Email" required>
            <small class="form-text indic">Please enter a valid email.</small>
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="pwd" placeholder="Password" required>
        </div>
        <div class="form-group">
            <a href="login.php" class="form-text indic" style="text-decoration:none;font-size:14px;font-weight:bold;">You already have an account ? Log In.</a>
        </div>
        <div class="form-group"><button class="btn btn-primary" type="submit" name="signup">Send</button></div>
    </form>
</div>

<?php
    include "ressources/footer.php";
?>