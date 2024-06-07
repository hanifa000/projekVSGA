<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motor</title>
</head>
<body>
    <!-- Navbar Start -->
    <nav class="navbar">
        <a href="index.php">
        <img src="img/ravispa.png" class="navbar-logo"> </a>

        <div class="navbar-nav">
            <a href="index.php#home">HOME</a>
            <a href="index.php#about">PROFIL</a>
            <a href="index.php#visi-misi">VISI & MISI</a>
            <a href="index.php#product">PRODUK KAMI</a>
            <a href="index.php#location">LOKASI</a>
        </div>

        <div class="navbar-extra">
        <div class="dropdown" id="account-dropdown">
            <a href="#" id="account"><i data-feather="user"></i></a>
            <div class="dropdown-content">
                <?php
                if (isset($_SESSION['email'])) {
                    echo '<a href="cart.php">Cek Keranjang</a>';
                    echo '<a href="logout.php">Keluar</a>';
                } else {
                    echo '<a href="login.php">Sign in</a>';
                    echo '<a href="register.php">Sign up</a>';
                }
                ?>
            </div>
        </div>
        <div class="dropdown" id="account-dropdown">
        <a href="#" id="menu"><i data-feather="chevron-down"></i></a>
            <div class="dropdown-content">
            <a href="artikel.php">ARTIKEL</a>
            <a href="galeri.php">GALERI FOTO</a>
            <a href="klien.php">KLIEN KAMI</a>
            </div>
        </div>
        </div>
        </div>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->
    <script src="js/script.js"></script>
</body>
</html>
