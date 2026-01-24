<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<h2>Welcome,Dear <?php echo $_SESSION['name']; ?> 🎉</h2>

<p>This is your dashboard. I hope you have liked it very much.</p>

<a href="logout.php">Logout</a>
