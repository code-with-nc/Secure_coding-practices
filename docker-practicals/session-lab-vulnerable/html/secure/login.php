<?php

ini_set('session.cookie_httponly', 1);
ini_set('session.use_strict_mode', 1);

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === "admin" && $password === "password") {

        session_regenerate_id(true);

        $_SESSION['user'] = $username;

        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid credentials";
    }

} else {
    // If someone opens login.php directly
    header("Location: index.php");
    exit();
}
