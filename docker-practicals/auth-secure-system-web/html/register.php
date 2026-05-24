<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
        header("Location: login.php");
    } else {
        echo "Error: Username may already exist";
    }
}
?>

<link rel="stylesheet" href="style.css">

<div class="container">
    <h2>Register</h2>

    <form method="POST">
        <input name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Register</button>
    </form>

    <br>

    <a href="login.php">🔐 Already have an account? Login</a><br>
    <a href="index.php">🏠 Back to Home</a>
</div>
