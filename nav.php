<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Navbar </title>

    <!-- CSS Link -->
    <link rel="stylesheet" href="../css/nav.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Font Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- Montserrat Font -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-- Rowdies Font -->
        <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&display=swap" rel="stylesheet">
        <!-- Anta Font -->
        <link href="https://fonts.googleapis.com/css2?family=Anta&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

</head>
<body>
    <!-- Header section -->
    <header class="header">

        <!-- Logo -->
        <div class="logo">
            <span> SAVING LIVES </span>
        </div>

        <!-- navbar -->
        <div class="navbar">

            <!-- Main menu -->
            <ul>
                <li><a href="index.php"> Home </a></li>
                <li><a href="#"> Service </a></li>
                <li><a href="gallery.php"> Gallery </a></li>
                <li><a href="#"> About <i class="fa-solid fa-chevron-down"></i></a>

                    <!-- Drop down 1 -->
                    <ul>
                        <li><a href="FAQs.php">FAQs</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3 <span><i class="fa-solid fa-chevron-right"></i></span></a>

                            <!-- Drop down 2 -->
                            <ul>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="contactus.php"> Contact </a></li>
            </ul>
            <!-- END of main menu -->

        </div>
        <!-- END of navbar -->

        <!-- User Profile -->
        <?php
        if(isset($_SESSION['email'])) {
        ?>
            <div class="navbar">
                <ul>
                    <li><a href="#"> <?php echo($_SESSION['name']); ?> <i class="fa-solid fa-chevron-down"></i></a>
                        <ul>
                            <li><a href="#"> Profile </a></li>
                            <li><a href="logout.php"> Log Out </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        <?php
        } else {
        ?>

    <!-- Login & Signup Buttons -->
        <div class="login-signup-btns">
            <button onclick="location.href = './login.php'" id="login-btn"> Log In </button>
            <button onclick="location.href = './signup.php'" id="signup-btn"> Sign Up </button>
        </div>

        <?php
        }
        ?>

    </header>
    <!-- END of header section -->
</body>
</html>