<?php
session_start();

if ($_POST) {

    if ($_POST['username'] == "admin" && $_POST['password'] == "password") {

        // 🔐 MUST BE FIRST (before output)
        session_regenerate_id(true);

        $_SESSION['user'] = "admin";

        // ❌ DO NOT echo before redirect
        header("Location: dashboard.php");
        exit();

    } else {
        echo "Invalid credentials";
    }
}
?>

<h2>Secure Login</h2>

<form method="POST">
    <input type="text" name="username" placeholder="Username"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <button type="submit">Login</button>
</form>
