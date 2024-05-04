<?php 

$myUser = fopen('userlist.txt', 'a');
$username = "AG Arham";
$password = "123456564635465";
if(fwrite($myUser, $username)){
    echo "File has been written.";
}

if(fwrite($myUser, $password)){
    echo "password has been written.";
}
fclose($myUser);
?>