<?php
    include "ressources/header.php";
    if(isset($_SESSION['user'])) {
        header("location:index.php");
    }
    if(isset($_POST['connect'])) {
        $mail = htmlspecialchars($_POST['mail']);
        $mdp = htmlspecialchars($_POST['pwd']);
        $sql = "SELECT * FROM users WHERE email='{$mail}' AND password='{$mdp}'";
        $req = $cnx->query($sql);
        $res = $req->fetchAll();
        if(count($res)>0) {
            $_SESSION['user']['id'] = $res['id'];
            $_SESSION['user']['name'] = $res['fullname'];
            header("location:index.php");
        }
    }
?>

<div class="contact-clean">
    <form method="post">
        <h2 class="text-center">Sign In</h2>
        <div class="form-group">
            <input class="form-control" type="email" name="mail" placeholder="Email" required>
            <small class="form-text indic">Please enter a correct email address.</small>
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="pwd" placeholder="Password" required>
        </div>
        <div class="form-group">
            <a href="signup.php" class="form-text indic" style="text-decoration:none;font-size:14px;font-weight:bold;">You don't have an account ? Sign up.</a>
        </div>
        <div class="form-group"><button class="btn btn-primary" type="submit" name="connect">Send</button></div>
    </form>
</div>

<?php
    include "ressources/footer.php";
?>