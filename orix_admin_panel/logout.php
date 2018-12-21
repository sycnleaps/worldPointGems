<?php
//Start session
session_start();

//Unset the variables stored in session
unset($_SESSION['uid']);
unset($_SESSION['fname']);
unset($_SESSION['lname']);
unset($_SESSION['email']);
session_destroy();
header('location:login.php');
exit();
?>