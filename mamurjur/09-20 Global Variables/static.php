<?php 

function getBio(){
    static $qty = '10';
    echo $qty . "<br>";
    $qty .= "Arham";
}
getBio();
getBio();
getBio();
getBio();
getBio();
getBio();

?>