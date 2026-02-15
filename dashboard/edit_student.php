<?php
session_start();
include("../config/db.php");

if (!isset($_SESSION['admin'])) {
    header("Location: ../auth/login.php");
    exit();
}

$id = $_GET['id'];
$student = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$row = mysqli_fetch_assoc($student);

if (isset($_POST['update'])) {
    $fullname = $_POST['fullname'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $course   = $_POST['course'];

    $query = "UPDATE students SET
                fullname='$fullname',
                email='$email',
                phone='$phone',
                course='$course'
              WHERE id=$id";

    mysqli_query($conn, $query);
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-4">
    <div class="card shadow rounded-4 p-4">
        <h3 class="mb-3">Edit Student</h3>

        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" name="fullname" class="form-control" value="<?php echo $row['fullname']; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" value="<?php echo $row['phone']; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Course</label>
                <input type="text" name="course" class="form-control" value="<?php echo $row['course']; ?>" required>
            </div>

            <button type="submit" name="update" class="btn btn-warning">Update</button>
            <a href="index.php" class="btn btn-secondary">Back</a>
        </form>
    </div>
</div>

</body>
</html>
