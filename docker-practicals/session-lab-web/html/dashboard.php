<?php
session_start();

// check login
if(!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

// session timeout (5 min)
if(time() - $_SESSION['time'] > 300) {
    session_destroy();
    header("Location: login.php");
    exit();
}

echo "Welcome " . $_SESSION['user'];
echo "<br><a href='logout.php'>Logout</a>";
?>
