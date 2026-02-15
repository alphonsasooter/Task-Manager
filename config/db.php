<?php

$host = getenv("MYSQLHOST") ?: "127.0.0.1";
$user = getenv("MYSQLUSER") ?: "root";
$pass = getenv("MYSQLPASSWORD") ?: "";
$db   = getenv("MYSQLDATABASE") ?: "task_manager";
$port = getenv("MYSQLPORT") ?: 3306;

$conn = mysqli_connect($host, $user, $pass, $db, $port);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>
