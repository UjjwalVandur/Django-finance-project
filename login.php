<?php

session_start();
    if(isset($_SESSION['email'])) {
        header("Location:index.php");
    }
include("connection.php");

$errorMsg = "";
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $select_query = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password' AND `status` = 'active'";
    $select_result = mysqli_query($con, $select_query);
    if(mysqli_num_rows($select_result) > 0) {
        $rememberme = $_POST['rememberme'];
        if($rememberme == 'checked') {
            setcookie('email', $email);
            setcookie('password', $password);
        } else {
            setcookie('email', '');
            setcookie('password', '');
        }
        if($row_data = mysqli_fetch_assoc($select_result)) {
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $row_data['first_name'];
            header("Location:index.php");
            
        } else {
            $errorMsg = "Something went wrong.";
        }
    } else {
        $errorMsg = "Please register first for login.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login Form </title>

    <!-- CSS Link -->
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="nav.css">

    <!-- FONT AWESOME Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- GOOGLE FONT Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anta&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
</head>
<body>

    <?php include('nav.php'); ?>
    <div class="background"></div>
    
    <?php 
        if($errorMsg != '') {
            ?>
        <div class="error-message"> <?php echo($errorMsg); ?> </div>
        <?php
        }
        ?>

    <div class="container">
        <div class="login-card">
            <div id="head"> LOGIN </div>
            <form class="userdetails" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">


                <div class="email">
                    <label for="email"> Email :</label>
                    <input type="email" name="email" id="email" value="<?php if(isset($_COOKIE['email'])) {echo($_COOKIE['email']);}?>">
                </div>

                <div class="password">
                    <label for="password"> Password :</label>
                    <input type="password" name="password" id="password">
                </div>

                <div class="rememberme-forgotpass">
                    <div class="rememberme">
                        <input type="checkbox" name="rememberme" id="rememberme" class="rememberme-checkbox" value="checked" <?php if(isset($_COOKIE['email'])) {echo("checked");} ?>> Remember me
                    </div>
                    <div class="forgotpass"><a href=""> Forgot Password ?</a></div>
                </div>


                <div class="login">
                    <p> Don't have an account ? <a href="signup.php"> Sign Up </a></p>
                </div>

                <input type="submit" value="Log In" id="btn">
            </form>
        </div>
    </div>
</body>
</html>