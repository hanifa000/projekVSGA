<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['qris']) && $_FILES['qris']['error'] == UPLOAD_ERR_OK) {
        $upload_dir = 'uploads/';

        // Kosongkan keranjang belanja setelah checkout
        unset($_SESSION['cart']);

        // Memindahkan file langsung ke direktori uploads/ dengan nama yang sama
        if (move_uploaded_file($_FILES['qris']['tmp_name'], $upload_dir . $_FILES['qris']['name'])) {
            // Redirect ke halaman terima kasih atau halaman lain setelah checkout
            header("Location: thank_you.php");
            exit();
        } else {
            echo "Upload bukti pembayaran gagal.";
        }
    } else {
        echo "Silakan upload bukti pembayaran.";
    }
} else {
    echo "Invalid request.";
}
?>
