<?php
$host = "sql102.infinityfree.com";
$user = "if0_40816351";
$pass = "iftee2026devOps";
$dbname = "if0_40816351_login_system";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
