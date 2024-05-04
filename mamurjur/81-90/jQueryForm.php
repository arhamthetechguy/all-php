<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery Form validation</title>
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
</head>
<body>
    
<form action="<?php $_SERVER['PHP_SELF'] ?>" id="regForm" >
<label for="username">Username</label><br>
<input type="text" name="username" id="username"><br><br>

<label for="email">Email</label><br>
<input type="email" name="email" id="email"><br><br>

<label for="password">password</label><br>
<input type="password" name="password" id="password"><br><br>

<label for="re-password">Re-enter Password</label><br>
<input type="re-password" name="re-password" id="re-password"><br><br>

<input type="submit" value="Submit">
</form>

<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<script>
    jQuery.validator.setDefaults({
    debug: true,
    success: "valid"
    });

    $('#regForm').validate({
        rules: {
            username: {
                required: true,
                minlength: 6,
                maxlength: 10
            }
        },
        email: {
            required: true,
        },
        messages:{
            username: "Please input usename"
        }
    });
</script>
</body>
</html>