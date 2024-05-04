<?php 

session_start();
if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $username = $_POST['username'];
    $password = $_POST['password'];


    // username = admin || password = 1234

    if($username == 'admin' && $password == 1234){
        echo "Login Success";
        
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
    } else {
        echo "Something went wrong";
    }
}
?>