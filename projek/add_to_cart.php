<?php
session_start();

if (isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];
    
    // Inisialisasi keranjang belanja jika belum ada
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    
    // Tambahkan atau perbarui jumlah produk dalam keranjang belanja
    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id]['quantity'] += 1;
    } else {
        $_SESSION['cart'][$product_id] = ['quantity' => 1];
    }
    
    // Kembali ke halaman sebelumnya
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit();
} else {
    // Jika ID produk tidak ditemukan
    echo "ID produk tidak ditemukan.";
}
?>
