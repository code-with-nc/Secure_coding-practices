<?php
session_start();
?>

<h1>🔐 Session Management Demo</h1>

<h2>Select Mode</h2>

<a href="broken_login.php">
    <button style="background:red;color:white;padding:10px;">
        ❌ Broken Session Login
    </button>
</a>

<br><br>

<a href="secure_login.php">
    <button style="background:green;color:white;padding:10px;">
        ✅ Secure Session Login
    </button>
</a>
