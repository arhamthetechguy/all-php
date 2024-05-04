<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="get">

    <input type="text" name="name" id="">
    <input type="submit" value="submit">

    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        // $username = $_REQUEST['name'];
        // $username = $_POST['name'];
        $username = $_GET['name'];
        // echo $username;


        if(empty($username)){
            echo 'input field required';
        } else {
            echo $username;
        }
    }
    ?>
</body>
</html>