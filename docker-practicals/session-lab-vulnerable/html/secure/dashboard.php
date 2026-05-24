<?php
session_start();

// Extra validation (optional hardening)
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

echo "Welcome " . htmlspecialchars($_SESSION['user']);
echo "<br><a href='logout.php'>Logout</a>";
