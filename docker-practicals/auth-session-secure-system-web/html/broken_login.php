<?php
session_start();
?>

<h2>❌ Broken Session Login</h2>

<form method="POST">
    <input type="text" name="username" placeholder="Username"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <button type="submit">Login</button>
</form>

<?php
if ($_POST) {

    // ❌ VULNERABLE LOGIN (NO SESSION FIXATION PROTECTION)
    if ($_POST['username'] == "admin" && $_POST['password'] == "password") {

        $_SESSION['user'] = "admin";

        echo "Login successful (BROKEN MODE)";
        echo "<br><a href='dashboard.php'>Go Dashboard</a>";
    } else {
        echo "Invalid credentials";
    }
}
?>
