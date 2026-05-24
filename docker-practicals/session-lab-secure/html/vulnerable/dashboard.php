<?php
ini_set('session.use_strict_mode', 0);
ini_set('session.use_only_cookies', 0);
ini_set('session.use_trans_sid', 1);
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

echo "Welcome " . $_SESSION['user'];
echo "<br><a href='logout.php'>Logout</a>";
