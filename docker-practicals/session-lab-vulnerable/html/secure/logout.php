<?php
session_start();

// Destroy session securely
$_SESSION = [];
session_destroy();

header("Location: index.php");
