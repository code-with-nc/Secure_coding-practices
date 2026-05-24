<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}
?>

<h2>📊 Dashboard</h2>

<p>Welcome: <?php echo $_SESSION['user']; ?></p>

<a href="logout.php">Logout</a>
