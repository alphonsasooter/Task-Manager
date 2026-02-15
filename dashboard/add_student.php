<?php
session_start();
include("../config/db.php");

if (!isset($_SESSION['admin'])) {
    header("Location: ../auth/login.php");
    exit();
}

$msg = "";

if (isset($_POST['save'])) {
    $fullname = $_POST['fullname'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $course   = $_POST['course'];

    $query = "INSERT INTO students (fullname, email, phone, course)
              VALUES ('$fullname', '$email', '$phone', '$course')";

    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
        exit();
    } else {
        $msg = "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-4">
    <div class="card shadow rounded-4 p-4">
        <h3 class="mb-3">Add Student</h3>

        <?php if ($msg != "") { ?>
            <div class="alert alert-danger"><?php echo $msg; ?></div>
        <?php } ?>

        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" name="fullname" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Course</label>
                <input type="text" name="course" class="form-control" required>
            </div>

            <button type="submit" name="save" class="btn btn-success">Save</button>
            <a href="index.php" class="btn btn-secondary">Back</a>
        </form>
    </div>
</div>

</body>
</html>
