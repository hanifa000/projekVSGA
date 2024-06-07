<?php
session_start();

if (isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];
    
    // hapus produk dari keranjang belanja
    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id]['quantity'] -= 1;
        if ($_SESSION['cart'][$product_id]['quantity'] <= 0) {
            unset($_SESSION['cart'][$product_id]);
        }
    }
    
    // Kembali ke halaman keranjang belanja
    header("Location: cart.php");
    exit();
} else {
    // Jika ID produk tidak ditemukan
    echo "ID produk tidak ditemukan.";
}
?>
