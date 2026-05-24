<?php
$conn = new mysqli("mysql", "root", "root", "auth_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
