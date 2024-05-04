<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <script src="https://cdn.tiny.cloud/1/ygthnykg8iy3p95jcdl1xfodtxps8r78mm9dgy00izmkqxyc/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>

    <form action="save.php" method="post" enctype="multipart/form-data" >
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username"><br><br>

        <label for="email">Email</label><br>
        <input type="email" name="email" id="email"><br><br>

        <label for="password">Password</label><br>
        <input type="password" name="password" id="password"><br><br>
        
        <label for="date">Date</label><br>
        <input type="date" name="date" id="date"><br><br>

        <label for="time">Time</label><br>
        <input type="time" name="time" id="time"><br><br>

        <label for="color">Color</label><br>
        <input type="color" name="color" id="color"><br><br>

        <label for="url">URL</label><br>
        <input type="url" name="url" id="url"><br><br>
        
        <label for="file">File</label><br>
        <input type="file" name="file" id="file"><br><br>

        <label for="month">Month</label><br>
        <input type="month" name="month" id="month"><br><br>
        
        <label for="courses">Courses</label><br>
        <select name="courses[]" id="courses" multiple>
            <option value="" selected >Select your course</option>
            <option value="wordpress">Wordpress</option>
            <option value="PHP">PHP</option>
            <option value="Full-Stack">Full-Stack</option>
        </select><br><br>
        
        <input type="hidden" name="ip" value="<?= $_SERVER['REMOTE_PORT'] ?>">

        <label for="range">Range</label><br>
        <input type="range" name="range" id="range" min="1" max="100" ><br><br>

        <label for="search">Search</label><br>
        <input type="search" name="search" id="search"><br><br>

        <label for="localDate">Local Date</label><br>localDate
        <input type="datetime-local" name="localDate" id="localDate"><br><br>
         
        <label for="message">Message</label><br>
        <textarea name="message" id="message" cols="30" rows="5"></textarea><br><br>

        <button type="reset">Reset</button>
        <button type="submit" name="submit" >Submit</button>
    </form>

    <script>
        // Initialize TinyMCE on the textarea with id "message"
        tinymce.init({
            selector: '#message'
        });
    </script>

</body>
</html>