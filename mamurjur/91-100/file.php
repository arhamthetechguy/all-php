<?php 

// // echo readfile("message.txt");
// $myMessage = fopen('message.txt', "r") or die("Fle not found!");
// // echo $myMessage;
// $fileLength = filesize('message.txt');
// // echo $fileLength;
// echo fread($myMessage, $fileLength);
fclose($myMessage);

$myMessage = fopen("message.txt", "r") or die("Fiel not found");
// echo fgets($myMessage);
// while(!feof($myMessage)){
//     echo fgets($myMessage);
// }

// echo fgetc($myMessage);

while(!feof($myMessage)){
    echo fgetc($myMessage);
}
?>