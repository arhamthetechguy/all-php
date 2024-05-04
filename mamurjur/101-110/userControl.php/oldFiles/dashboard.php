<?php 
session_start();

if(isset($_SESSION['username'])){
    echo $_SESSION['username'];
} else {
    $msg = "Login first";
    header("location: login.php?msg=$msg");
}

?>
<br>
<a href="logout.php">Logout</a>