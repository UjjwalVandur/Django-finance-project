<?php
    session_start();
    if(isset($_SESSION['email'])) {
        header("Location:index.php");
    }
        include("connection.php");

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;

        // Generating OTP
        $otp_str = str_shuffle("0123456789");
        $otp = substr($otp_str, 0, 5);
    
        // Generating Verification Code
        $activation_str = rand(100000, 10000000);
        $activation_code = str_shuffle("abcdefghijlmnopqrstuvwxyz".$activation_str);

        // variable creation
        $usernameError = $emailError = $passwordError = $errorMsg = "";
        $username = $email = $password = "";

        if($_SERVER["REQUEST_METHOD"] == "POST") {

            // taking input values and storing it into creates variables
            $otp = $_POST["otp"];
            $activation_code = $_POST["activation_code"];
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];


            // checking all inputs
            if(empty($_POST["username"])) {
                $usernameError = "Username can't be Empty !";
            } else {
                $username = test_input($_POST["username"]);
                if(!preg_match("/^[a-zA-Z' ]*$/", $username)) {
                    $usernameError = "Only alphabets are allowed !";
                } else {
                    $usernameError = "";
                }
            }
            
            if(empty($_POST["email"])) {
                $emailError = "Email can't be Empty !";
            } else {
                $email = test_input($_POST["email"]);
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailError = "Email format is Invalid !";
                } else {
                    $emailError = "";
                }
            }

            if(empty($_POST["password"])) {
                $passwordError = "Password can't be Empty !";
            } else {
                $password = test_input($_POST["password"]);
                $passwordError = "";
            }


            if($usernameError == "" && $emailError == "" && $passwordError == "") {

            // checking if email already exists or not
            $check_email_query = "SELECT * FROM `users` WHERE `email` = '$email'";
            $check_email_query_run = mysqli_query($con, $check_email_query);

            // if email exists
            if(mysqli_num_rows($check_email_query_run) > 0) {
                $selectRow = mysqli_fetch_assoc($check_email_query_run);

                // checking if email is verified or not
                $status = $selectRow["status"];

                // if verified then already registered.
                if($status == 'active') {
                    $errorMsg = "Email already being Registered! Try logging your account.";

                // if not verified then verification step
                } else {
                    $errorMsg = "";
                    $password = md5($_POST['password']);
                    $update_query = "UPDATE `users` SET `first_name` = '$username', `password` = '$password', `otp` = '$otp', `activation_code` = '$activation_code' WHERE `email` = '$email'";
                    $update_result = mysqli_query($con, $update_query);
                    if($update_result) {

                        require 'vendor/autoload.php';

                        $mail = new PHPMailer(true);

                        $mail->isSMTP();
                        $mail->Host = 'smtp.gmail.com';
                        $mail->SMTPAuth = true;
                        $mail->Username = 'dhruvgala2004@gmail.com';
                        $mail->Password = 'vqnohuriglvsmagi';
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                        $mail->Port = 465;
                        
                        $mail->setFrom('dhruvgala2004@gmail.com', 'Saving Lives Foundation');
                        $mail->addAddress($email, $username);
                        
                        $mail->isHTML(true);
                        $mail->Subject = "Verification Code for email verification";
                        $mail->Body    = "<p> <b>$otp</b> is the otp for your email verification and will stay active for 2 minutes. </p>";
                        
                        if($mail->send()) {
                            echo("Message has been sent. Please check email for verification code.");
                            header("Location:verify.php?code=$activation_code");
                        } else {
                            echo("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
                        } 
                    }
                }
            } else {
                require 'vendor/autoload.php';

                $mail = new PHPMailer(true);

                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'dhruvgala2004@gmail.com';
                $mail->Password = 'vqnohuriglvsmagi';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                $mail->Port = 465;
                        
                $mail->setFrom('dhruvgala2004@gmail.com', 'Saving Lives Foundation');
                $mail->addAddress($email, $username);
                        
                $mail->isHTML(true);
                $mail->Subject = "Verification Code for email verification";
                $mail->Body    = "<p> <b>$otp</b> is the otp for your email verification and will stay active for 2 minutes. </p>";
                        
                if($mail->send()) {
                    $password = md5($_POST['password']);
                    $insertQuery = "INSERT INTO `users` (`first_name`, `email`, `password`, `otp`, `activation_code`) VALUES ('$username', '$email', '$password', '$otp', '$activation_code');";
                    $insertResult = mysqli_query($con, $insertQuery);
                    if($insertResult) {
                        echo("Message has been sent. Please check email for verification code.");
                        header("Location:verify.php?code=$activation_code");
                    } else {
                        echo("Something went wrong !");
                    }
                } else {
                    echo("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
                }
                
            }

        }
    }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Signup Form </title>

    <!-- CSS Link -->
    <link rel="stylesheet" href="signup.css">
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
        <div class="signup-card">
            <div id="head"> SIGNUP </div>
            <form class="userdetails" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

                <input type="hidden" name="otp" value="<?php echo($otp); ?>">
                <input type="hidden" name="activation_code" value="<?php echo($activation_code); ?>">

                <div class="username">
                    <label for="username"> Username :</label>
                    <input type="text" name="username" id="username" value="<?php if($usernameError == "") {echo $username;} ?>" class="<?php if($usernameError != "") {echo "error-border";} ?>">
                    <p class="<?php if($usernameError != "") {echo "error-msg";} ?>"> <?php if($usernameError != "") {echo($usernameError);} ?> </p>

                </div>

                <div class="email">
                    <label for="email"> Email :</label>
                    <input type="email" name="email" id="email" value="<?php if($emailError == "") {echo $email;} ?>" class="<?php if($emailError != "") {echo "error-border";} ?>">
                    <p class="<?php if($emailError != "") {echo "error-msg";} ?>"> <?php if($emailError != "") {echo($emailError);} ?> </p>
                </div>

                <div class="password">
                    <label for="password"> Password :</label>
                    <input type="password" name="password" id="password" value="<?php if($passwordError == "") {echo $password;} ?>" class="<?php if($passwordError != "") {echo "error-border";} ?>">
                    <p class="<?php if($passwordError != "") {echo "error-msg";} ?>"> <?php if($passwordError != "") {echo($passwordError);} ?> </p>
                </div>

                <div class="login">
                    <p> Already have an account ? <a href="login.php"> Log In </a></p>
                </div>

                <input type="submit" value="Sign Up" id="btn">
            </form>
        </div>
    </div>
</body>
</html>