<?php 
    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
        header("location: ../../Before-Login\Login_&_Register\login.php");
        exit();
    }

?>

