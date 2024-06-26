<?php 
require_once("initialize_database.php");
require_once ("./header.php");

// selecting data
$id = $_GET['id'] ?? header("location:./");
$id = $conn->real_escape_string($id);
$sql = "SELECT * FROM `students` WHERE `id` = '$id'";
$result = $conn->query($sql);
$result->num_rows == 0 ? header("location:./") : null;
$obj = $result->fetch_object();

$dStudentMessage = "";  // Initialize an empty message variable

// delete condition
if(isset($_POST["dst"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
    $result = $conn->query( "DELETE FROM `students` WHERE `id` = $id");
    if($result) {
        $delFile = unlink("./uploads/" . $obj->img);
        if ($delFile) {
        $dStudentMessage = "Student deleted successfully!🙄";
         echo "<script>setTimeout(() => location.href='./', 2000)</script>";
        }
    } else {
        echo "Student not deleted";
    }
}
?>

<!-- delete form -->
<div class="container text-center">
    <div class="row">
        <div class="col-md-4 w-100 mt-3 mx-auto">
            <form action="" method="post">
                <?php if (empty($dStudentMessage)) { ?>
                    <h5 class="text-danger mb-3">Are you sure you want to delete this student?😳</h5>
                    <input class="btn btn-danger btn-md px-5" type="submit" value="Yes" name="dst">
                    <a href="./"><button class="btn btn-primary btn-md px-5" type="button">No</button></a>
                <?php } else { ?>
                    <h5 class="text-success"><?= $dStudentMessage ?></h5>
                <?php } ?>
            </form>
        </div>
    </div>
</div>

<?php 
require_once ("./footer.php");
?>
