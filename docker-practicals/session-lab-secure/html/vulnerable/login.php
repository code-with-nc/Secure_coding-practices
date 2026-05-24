<?php

// 🔥 Make it intentionally vulnerable
ini_set('session.use_strict_mode', 0);   // allow attacker session IDs
ini_set('session.use_only_cookies', 0);  // allow URL session IDs
ini_set('session.use_trans_sid', 1);
session_start();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Hardcoded credentials
if ($username === "admin" && $password === "password") {

    $_SESSION['user'] = $username;

    // ❌ NO session_regenerate_id (this is the vulnerability)

    header("Location: dashboard.php");
    exit();
} else {
    echo "Invalid credentials";
}
