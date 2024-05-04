<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['img'])) {
        $img = $_FILES['img'];
        $imgName = $img['name'];
        $tmgType = $img['type'];
        $imgTempName = $img['tmp_name'];
        $imgError = $img['error'];
        $imgSize = $img['size'];

        $imgExt = explode('.', $imgName);
        $imgActualExt = strtolower(end($imgExt));

        $allowed = ['jpg', 'gif', "bmp", 'png', 'jpeg', 'pdf'];

        if (in_array($imgActualExt, $allowed)) {
            if ($imgError === 0) {
                if ($imgSize < 100000) {
                    $imgNewName = uniqid('', true) . '.' . $imgActualExt;
                    $imgDestination = 'uploads/' . $imgNewName;
                    move_uploaded_file($imgTempName, $imgDestination);
                    echo 'Uploaded';
                } else {
                    echo 'File is too large';
                }
            } else {
                echo 'Error uploading file';
            }
        } else {
            echo 'File is not allowed';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="img" id="addImg">
        <input type="submit" value="Upload Image">
    </form>
    <img src="" alt="" id="imgShow" width="150">
    <script>
        const addImg = document.getElementById("addImg");
        const imgShow = document.getElementById("imgShow");

        addImg.addEventListener("change", () => {
            const file = addImg.files[0];
            if (file) {
                const reader = new FileReader();
                reader.addEventListener("load", () => { imgShow.setAttribute("src", reader.result) });
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>
</html>
