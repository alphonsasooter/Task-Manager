<?php
$host = "127.0.0.1";
$user = "root";
$pass = "Spec!1112";          // keep empty if you have no password
$db   = "student_portal";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
