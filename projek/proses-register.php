<?php
session_start();
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    // Memeriksa apakah email sudah ada
    $check_email_sql = "SELECT * FROM users WHERE email='$email'";
    $check_email_result = mysqli_query($conn, $check_email_sql);

    if (mysqli_num_rows($check_email_result) > 0) {
        echo "<script>";
        echo "alert('email sudah digunakan. Silakan pilih email lain.');";
        echo "window.location.href = 'register.php';";
        echo "</script>";
    } else {
        // Menyisipkan user baru ke dalam database
        $insert_user_sql = "INSERT INTO users (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$password')";

        if (mysqli_query($conn, $insert_user_sql)) {
            echo "<script>";
            echo "alert('Registrasi berhasil! Anda sekarang dapat login.');";
            echo "window.location.href = 'login.php';";
            echo "</script>";
        } else {
            echo "Error: " . $insert_user_sql . "<br>" . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);
?>
