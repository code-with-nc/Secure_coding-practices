<?php
$host = "db";
$user = "root";
$pass = "root";
$db   = "authdb";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
