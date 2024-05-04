<?php 

if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $img = $_FILES['file'];
    // var_dump($img);

    $fileName = $img['name'];
    $fileExt = explode('.', $fileName);
    $fileExtFinal = $fileExt[1];
    $allowedExt = ['jpg', 'png', 'jpeg', 'webp'];

    if(in_array($fileExtFinal, $allowedExt)){
        echo "Valid Fomat";
    } else {
        echo "Choose a valid file format";
    }
}

?>