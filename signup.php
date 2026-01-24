<?php
include "db.php";

if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO users (name, email, password) 
              VALUES ('$name', '$email', '$password')";

    if (mysqli_query($conn, $query)) {
        header("Location: login.php");
    } else {
        echo "Signup failed!";
    }
}
?>

<form method="POST">
    <h2>Signup</h2>
    <input type="text" name="name" placeholder="Name" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button name="signup">Signup</button>
</form>

<p>Already have an account? <a href="login.php">Login</a></p>
