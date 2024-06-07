<!-- File: logout.php -->
<?php
session_start();

// Hapus semua variabel sesi
session_unset();

// Hancurkan sesi
session_destroy();

// Alihkan ke halaman login (ganti dengan halaman yang sesuai)
header("Location: login.php");
exit();
?>
