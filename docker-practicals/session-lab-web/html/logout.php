<?php
session_start();

// destroy session fully
session_unset();
session_destroy();

header("Location: login.php");
exit();
?>
