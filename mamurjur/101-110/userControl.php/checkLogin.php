<?php 
session_start();

if(isset($_POST['login']) && $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == 'admin' && $password == '123'){
        $msg = "Login Success";

        $_SESSION['username'] = $username;
        header("location: dashboard.php?msg=$msg");
    } else {
        $msg = "Something went wrong";
        header("location: login.php?msg=$msg");
    }
    echo "check";
}
// echo "Check";
?>