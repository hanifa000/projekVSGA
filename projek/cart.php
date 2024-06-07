<?php
session_start();

// Dummy product data
$products = [
    1 => ["name" => "Agv K5 Jet Evo Mono Helmet Nardo Gris", "price" => 323966, "image" => "img/produk1.jpg"],
    2 => ["name" => "Helstons Twin Motul Jacket Grey", "price" => 228650, "image" => "img/p.jpg"],
    3 => ["name" => "Bike Parts Center Bubble Shield Solid Smoke 7731", "price" => 177000, "image" => "img/produk2.jpg"],
    4 => ["name" => "Spidi Moto Jogger Pants Green", "price" => 177000, "image" => "img/produk4.jpg"],
    5 => ["name" => "Troy Lee Designs Air Blurr Gloves Pink", "price" => 170900, "image" => "img/produk5.jpg"],
    6 => ["name" => "Fasthouse Toaster 24.1 Gloves Black", "price" => 33999, "image" => "img/produk6.jpg"],
    7 => ["name" => "Fox Launch Pro Knee Guard Black", "price" => 135000, "image" => "img/produk7.jpg"],
];

// Jika keranjang belanja tidak kosong
$cart_products = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
$total_price = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Comfortaa:wght@300..700&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="css/cart.css?v=1.0" />
</head>
<body>
    <?php include 'nav.php'; ?>
    
    <div class="container">
        <h1>Keranjang Belanja</h1>
        <!-- Tampilkan daftar produk yang ada di keranjang -->
        <ul class="cart-items">
            <?php foreach ($cart_products as $product_id => $details): ?>
                <?php 
                $product = $products[$product_id];
                $product_price = $product['price'] * $details['quantity'];
                $total_price += $product_price;
                ?>
                <li class="cart-item">
                    <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                    <div class="cart-item-info">
                        <p class="cart-item-name"><?php echo $product['name']; ?></p>
                        <p class="cart-item-price">Price: <?php echo number_format($product['price'], 2); ?></p>
                        <p class="cart-item-quantity">Quantity: <?php echo $details['quantity']; ?></p>
                        <p class="cart-item-total">Total: <?php echo number_format($product_price, 2); ?></p>
                    </div>
                    <!-- Form untuk menghapus produk dari keranjang -->
                    <form action="remove_from_cart.php" method="POST">
                        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                        <a href="#" id="account" class="cart-item-remove"><i data-feather="trash-2"></i></a>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
        
        <!-- Tampilkan total belanja -->
        <div class="cart-total">
            <h2>Subtotal: Rp <?php echo number_format($total_price, 2); ?></h2>
            <p>Shipping: <input type="text" placeholder="Enter shipping address"></p>
            <h2>Total: Rp <?php echo number_format($total_price, 2); ?></h2>
            <!-- Form untuk melakukan checkout -->
            <form action="checkout.php" method="POST" enctype="multipart/form-data">
                <label for="qris">Upload Bukti Pembayaran QRIS:</label>
                <input type="file" name="qris" id="qris" required>
                <button type="submit" class="checkout-button">Checkout</button>
            </form>
        </div>
    </div>

    <?php include 'footer.php'; ?>
    <!-- Feather Icons -->
  <script>
    feather.replace();
  </script>
  <script src="JS/script.js"></script>
</body>
</html>
