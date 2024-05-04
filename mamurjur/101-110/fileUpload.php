<?php
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     if (isset($_FILES['img'])) {
//         $img = $_FILES['img'];
//         $imgName = $img['name'];
//         $tmgType = $img['type'];
//         $imgTempName = $img['tmp_name'];
//         $imgError = $img['error'];
//         $imgSize = $img['size'];

//         $imgExt = explode('.', $imgName);
//         $imgActualExt = strtolower(end($imgExt));

//         if(!is_dir('uploads/')){
//             mkdir('uploads/');
//         }

//         $allowed = ['jpg', 'gif', "bmp", 'png', 'jpeg', 'pdf'];

//         if (in_array($imgActualExt, $allowed)) {
//             if ($imgError === 0) {
//                 if ($imgSize < 100000) {
//                     $imgNewName = uniqid('', true) . '.' . $imgActualExt;
//                     $imgDestination = 'uploads/' . $imgNewName;
//                     move_uploaded_file($imgTempName, $imgDestination);
//                     echo 'Uploaded';
//                 } else {
//                     echo 'File is too large';
//                 }
//             } else {
//                 echo 'Error uploading file';
//             }
//         } else {
//             echo 'File is not allowed';
//         }
//     }
// }

function uloadFile($inputFileName, $MaxFileSize, $allowedFile, $fileDirectory){
    if(isset($_POST['upload']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
        $file = $_FILES[$inputFileName];
        $fileName = $file['name'];
        $fileTempName = $file['tmp_name'];
        $fileError = $file['error'];
        $fileSize = $file['size'];

        $fileExt = explode('.', $fileName);
        $actualFileExt = strtolower(end($fileExt));

        if(!is_dir($fileDirectory)){
            mkdir($fileDirectory);
        }

        if(in_array($actualFileExt, $allowedFile)){
            if($fileError === 0){
                if($fileSize < $MaxFileSize){
                    $existingFile = $fileDirectory . $fileName;
                    if(file_exists($existingFile)){
                        unlink($existingFile);
                    }
                    $fileNewName = uniqid('', true) . '.' . $actualFileExt;
                    $fileDestination = $fileDirectory . $fileNewName;
                    move_uploaded_file($fileTempName, $fileDestination);
                    echo "File Uploaded successfully";
                } else {
                    return "File is too big";
                }
            } else {
                return "Error uploading file";
            }
        } else {
            return "File is not allowed";
        }
    }
    return null;
}

if(isset($_POST['upload']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
    $allowedFile = ['jpg', 'gif', 'bmp', 'png', 'jpeg', 'pdf'];
    $MaxFileSize = 1024 * 1024;
    $fileDirectory = 'uploads/';
    $result = uloadFile('img', $MaxFileSize, $allowedFile, $fileDirectory);
    if($result){
        echo $result;
    }
}

// function uploadFile($inputFile, $allowedFileType, $MaxFileSize, $fileUploadDirectory){
//     if(isset($_POST['upload']) && $_SERVER['REQUEST_METHOD'] == 'POST' ){
//         $file = $_FILES[$inputFile];
//         $fileName = $file['name'];
//         $fileTempName = $file['tmp_name'];
//         $fileError = $file['error'];
//         $fileSize = $file['size'];

//         $fileExt = explode('.', $fileName);
//         $actualFileExt = strtolower(end($fileExt));

//         if(!is_dir($fileUploadDirectory)){
//             mkdir($fileUploadDirectory);
//         }

//         if(in_array($actualFileExt, $allowedFileType)){
//             if($fileError === 0){
//                 if($fileSize < $MaxFileSize){
//                     $existingFile = $fileUploadDirectory . $fileName;
//                     if(file_exists($existingFile)){
//                         unlink($existingFile);
//                     }
//                     $newFileName = uniqid('', true) . '.' . $actualFileExt;
//                     $fileDestination = $fileUploadDirectory . $newFileName;
//                     move_uploaded_file($fileTempName, $fileDestination);
//                     echo 'File Uploaded successfully';
//                 } else {
//                     return "File is too large";
//                 }
//             } else {
//                 return "Error file uploading";
//             }
//         } else {
//             return "File type is not allowed";
//         }
//     }
//     return null;
// }

// if(isset($_POST['upload']) && $_SERVER['REQUEST_METHOD'] == 'POST' ){
//     $allowedFileType = ['jpg', 'gif', 'bmp', 'png', 'jpeg', 'pdf'];
//     $MaxFileSize = 100000;
//     $fileUploadDirectory = 'uploads/';
//     $result = uploadFile('img', $allowedFileType, $MaxFileSize, $fileUploadDirectory);
//     if($result){
//         echo $result;
//     }
// }

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
        <input type="submit" name="upload" value="Upload Image">
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
