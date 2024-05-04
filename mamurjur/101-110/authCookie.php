<?php 

// cooke parameters
// =================
// name
// value
// expire
// path
// domain
// secure
// httonly

setcookie('name', 'Arham', time() + 10);
if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
} else {
    echo 'cookie not found';
}
?>