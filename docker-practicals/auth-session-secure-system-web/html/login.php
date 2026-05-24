<?php
include("config.php");

// Dummy credentials
$user = "admin";
$pass = "password";

if ($_POST['username'] == $user && $_POST['password'] == $pass) {

    // 🔐 Prevent session fixation
    session_regenerate_id(true);

    $_SESSION['user'] = $user;

    header("Location: dashboard.php");
    exit();

} else {
    echo "Invalid login!";
}
?>
