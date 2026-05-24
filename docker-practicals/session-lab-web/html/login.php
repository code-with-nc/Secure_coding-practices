<?php
session_start();

if(isset($_POST['login'])) {

    $user = $_POST['username'];
    $pass = $_POST['password'];

    if($user == "admin" && $pass == "1234") {

        // 🔥 FIX 1: destroy old session
        session_regenerate_id(true);

        // store session
        $_SESSION['user'] = $user;
        $_SESSION['time'] = time();

        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid login!";
    }
}
?>
