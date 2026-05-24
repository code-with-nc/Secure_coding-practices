<?php
ini_set('session.use_strict_mode', 0);
ini_set('session.use_only_cookies', 0);
ini_set('session.use_trans_sid', 1);

session_start();
?>

<h2>Login (Vulnerable)</h2>
<form method="POST" action="login.php">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <button type="submit">Login</button>
</form>
