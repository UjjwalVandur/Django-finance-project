<?php
session_start();
if(isset($_SESSION['email'])) {
    header("Location:index.php");
}
    include("connection.php");

    $otpError = $otpMsg = "";
    if(isset($_POST['verify'])) {
        if(isset($_GET['code'])) {
            $activation_code = $_GET['code'];
            $otp = $_POST['otp'];

            $select_query = "SELECT * FROM `users` WHERE `activation_code` = '$activation_code'";
            $select_result = mysqli_query($con, $select_query);
            if(mysqli_num_rows($select_result) > 0) {
                $select_row = mysqli_fetch_assoc($select_result);

                $row_otp = $select_row['otp'];
                $row_registration_time = $select_row['registration_time'];

                $row_registration_time = date('Y-m-d H:i:s', strtotime($row_registration_time));
                $row_registration_time = date_create($row_registration_time);
                date_modify($row_registration_time, "+2 minutes");
                $time_up = date_format($row_registration_time, 'Y-m-d H:i:s');

                if($row_otp !== $otp) {
                    $otpError = "Please provide correct OTP.";
                } else {
                    $otpError = "";
                    if(date('Y-m-d H:i:s') >= $time_up) {
                        $otpMsg = "Your time up.";
                        header("Refresh:1; url=verify.php?code=$activation_code");
                    } else {
                        $update_query = "UPDATE `users` SET `otp` = '', `status` = 'active' WHERE `otp` = '$otp' AND `activation_code` = '$activation_code'";
                        $update_result = mysqli_query($con, $update_query);
                        if($update_result) {
                            $otpMsg = "Activated Successfully.";
                            header("Refresh:5; url=login.php");
                        } else {
                            $otpError = "Something went wrong !";
                        }
                    }
                }
            } else {
                header("Location:register.php");
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Email Verification </title>

    <!-- CSS Link -->
    <link rel="stylesheet" href="email_verification.css">
    <link rel="stylesheet" href="nav.css">

    <!-- FONT AWESOME Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- GOOGLE FONT Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anta&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

</head>
<body>
    <!-- <form action="" method='post'>
        <input type="text" name="otp" id="otp">
        <input type="submit" value="verify" name="verify">
    </form> -->

    <?php include("nav.php"); ?>
    <div class="background"></div>

    <?php 
        if($otpMsg == "Activated Successfully.") {
    ?>
        <div class="redirect-message">
            <p> Redirecting to Log In Page in <?php echo("<span id=timer> 5 </span>");?> seconds. </p>
        </div>
    <?php
        } else if($otpMsg == "Your time up.") {
    ?>
        <div class="error-message">
            <p> Your time is up! Try Again. </p>
        </div>
    <?php
        }
    ?>

    <div class="container">
        <div class="otp-card">
            <div id="head"> EMAIL VERIFICATION </div>
            <?php
                if($otpError != '') {
            ?>
                <div class="error-message"> <?php echo($otpError); ?> </div>
            <?php
                } else if($otpMsg == "Activated Successfully.") {
            ?>
                <div class="correct-message"> <?php echo($otpMsg); ?> </div>
            <?php
                }
            ?>
            <form class="otpdetails" action="" method="POST">

                <div class="otp">
                    <label for="otp"> Enter your OTP :</label>
                    <input type="text" name="otp" id="otp" class="<?php if($otpError != "") {echo "error-border";} ?>">
                </div>

                <input type="submit" value="Verify" id="btn" name="verify">
            </form>
        </div>
    </div>
    
    <script>
        let seconds = 5;
        function displaySeconds() {
            seconds -= 1;
            document.querySelector("#timer").innerText = seconds;
            // console.log(seconds);
        }
        setInterval(displaySeconds, 1000);
    </script>
</body>
</html>