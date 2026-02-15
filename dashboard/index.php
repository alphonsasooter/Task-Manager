<?php
session_start();
include("../config/db.php");

if (!isset($_SESSION['admin'])) {
    header("Location: ../auth/login.php");
    exit();
}

$search = "";

if (isset($_GET['search'])) {
    $search = trim($_GET['search']);
}

if ($search != "") {
    $stmt = $conn->prepare("
        SELECT * FROM students 
        WHERE fullname LIKE ? OR email LIKE ? OR phone LIKE ? OR course LIKE ?
        ORDER BY id DESC
    ");

    $like = "%" . $search . "%";
    $stmt->bind_param("ssss", $like, $like, $like, $like);
    $stmt->execute();
    $students = $stmt->get_result();
} else {
    $students = mysqli_query($conn, "SELECT * FROM students ORDER BY id DESC");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard | Student Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<nav class="navbar navbar-dark bg-dark px-3">
    <span class="navbar-brand">Student Portal</span>
    <div>
        <span class="text-white me-3">
            Welcome, <?php echo htmlspecialchars($_SESSION['admin']); ?>
        </span>
        <a href="../auth/logout.php" class="btn btn-sm btn-danger">Logout</a>
    </div>
</nav>

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Students List</h3>
        <a href="add_student.php" class="btn btn-success">+ Add Student</a>
    </div>

    <!-- Search Bar -->
    <form method="GET" class="d-flex mb-3">
        <input type="text" name="search" class="form-control me-2"
               placeholder="Search name, email, phone, course..."
               value="<?php echo htmlspecialchars($search); ?>">
        <button class="btn btn-primary">Search</button>
        <a href="index.php" class="btn btn-secondary ms-2">Reset</a>
    </form>

    <div class="card shadow rounded-4 p-3">
        <table class="table table-bordered table-hover mb-0">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Course</th>
                    <th>Created</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                <?php if ($students && mysqli_num_rows($students) > 0) { ?>
                    <?php while ($row = mysqli_fetch_assoc($students)) { ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo htmlspecialchars($row['fullname']); ?></td>
                            <td><?php echo htmlspecialchars($row['email']); ?></td>
                            <td><?php echo htmlspecialchars($row['phone']); ?></td>
                            <td><?php echo htmlspecialchars($row['course']); ?></td>
                            <td><?php echo $row['created_at']; ?></td>
                            <td>
                                <a href="edit_student.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning">
                                    Edit
                                </a>

                                <a href="delete_student.php?id=<?php echo $row['id']; ?>"
                                   class="btn btn-sm btn-danger"
                                   onclick="return confirm('Are you sure you want to delete this student?');">
                                    Delete
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } else { ?>
                    <tr>
                        <td colspan="7" class="text-center text-muted">
                            No students found.
                        </td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>
    </div>

</div>

</body>
</html>
