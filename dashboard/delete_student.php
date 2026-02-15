<?php
session_start();
include("../config/db.php");

if (!isset($_SESSION['admin'])) {
    header("Location: ../auth/login.php");
    exit();
}

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM students WHERE id=$id");

header("Location: index.php");
exit();
?>
