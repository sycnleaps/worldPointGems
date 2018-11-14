<?php
session_start();
error_reporting(0);

unset($_SESSION['uid']);
unset($_SESSION['fname']);
unset($_SESSION['lname']);
unset($_SESSION['email']);
unset($_SESSION['admin']);
session_destroy();
require_once("db.php");

if (isset($_POST['login'])) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $uname = $_POST['username'];
        $password = $_POST['password'];

        //echo $password;
        //echo $uname;

        //$encrypt_password=md5($password);
        //echo $encrypt_password;

        $sql = "SELECT * FROM users WHERE email = '$uname' and password = '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);

        if ($row != 0) {
            session_start();
            $_SESSION['fname'] = $row['first_name'];
            $_SESSION['lname'] = $row['last_name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['uid'] = $row['id'];
            $_SESSION['admin'] = $row['isAdmin'];

            //echo $_SESSION['fname'];
            //echo $row['last_name'];
            //echo $row['id'];

            header("location:index.php");
        } else {
            header("location: login.php?action=login_invalid");
        }
    } else {
        header("location: login.php?action=login_empty");
    }
}

?>
