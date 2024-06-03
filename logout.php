<?php
include("connection.php");
session_start();
if(isset($_SESSION['email'])) {
    if(session_destroy()) {
        header("Location:login.php");
    }
}


?>