<?php 
$name = "Arham";

function getBio() {
    // global $name;
    // echo $name;

    echo "My name is : " . $GLOBALS['name'];
}
getBio();


?>