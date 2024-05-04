<?php 

session_start();
// if(isset($_SESSION['key'])){
//     echo $_SESSION['key'];
// } else {
//     echo "Session not found";
// }
echo $_SESSION['username'];
echo $_SESSION['password'];


?>