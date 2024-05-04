<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><?php

    if(isset($_GET['msg'])){
        echo $_GET['msg'];
    }

    ?></h3>

    <form action="checkLogin.php" method="post" >
        <input type="text" name="username" id="">
        <input type="password" name="password" id="">
        <input type="submit" value="Login" name="login" >
    </form>
</body>
</html>