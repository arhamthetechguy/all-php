<?php 

if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $img = $_FILES['file'];
    $imgName = $img['name'];
    $imgTempName = $img['tmp_name'];

    $destination = 'images/' . $imgName;
    move_uploaded_file($imgTempName, $destination);
}

?>