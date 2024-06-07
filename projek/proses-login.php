<?php
session_start();
include "config.php";

$email = $_POST['email'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

if ($_POST["captcha_code"] == $_SESSION["captcha_code"]) {
    $login = mysqli_query($conn, $sql);
    $ketemu = mysqli_num_rows($login);
    $r = mysqli_fetch_array($login);

    if ($ketemu > 0) {
        $_SESSION['email'] = $r['email'];
        header("Location: index.php");
        exit();
    } else {
        echo "<script>";
        echo "alert('Login failed! email & password are incorrect. Please try again.');";
        echo "window.location.href = 'login.php';";
        echo "</script>";
    }
} else {
    echo "<script>";
    echo "alert('Login failed! Captcha is incorrect. Please try again.');";
    echo "window.location.href = 'login.php';";
    echo "</script>";
}

mysqli_close($conn);
?>
