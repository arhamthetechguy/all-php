<?php
    require_once 'header.php';
    require_once './studentClass.php';
    use oopcrud\studentClass\studentClass as student;

    $student = new student();

    if (isset($_POST['addStudent'])) {
        $name = $student->clean($_POST['name']);
        if ($student->validation($name)) {
            if ($student->addStudent($name)) {
            $bsAlert = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                $student->msg
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
                </button>
            </div>";
        } else {
            $bsAlert = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                $student->msg
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
                </button>
            </div>";
            }
        }
    }
?>

<div class="container">
    <div class="row">
        <div class="col-md-6 py-5">
            <h3>Add New Student</h3>
            <form action="" method="post" >
                <div class="mb-2">
                    <label for="name" class="form-label" >Student Name</label>
                    <input type="text" class="form-control <?= $student->errName !== null ? 'is-invalid' : null ?> " id="name" name="name" value="<?= $student->oldName ?>">
                    <div class="invalid-feedback ">
                        <?= $student->errName ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-3 " name="addStudent" >Add Student</button>
            </form>
            <div>
            <?= $bsAlert ?? null ?>
            </div>
        </div>
    </div>
</div>

<?php
    require_once 'footer.php';
?>