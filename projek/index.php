<?php
include 'config.php';
session_start();

// Produk dari database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
$products = $result->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>motor</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Comfortaa:wght@300..700&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="css/style.css?v=1.0" />
</head>
<body>
  <?php
  include 'nav.php';
  ?>

  <!-- Hero Section Start -->
  <section class="hero" id="home">
    <main class="content">
      <img src="img/about.jpg" alt="">
    </main>
  </section>
  <!-- Hero Section End -->

  <!-- About Section Start -->
  <section id="about" class="about">
    <h2><span>PROFIL</span></h2>

    <div class="row">
      <div class="about-img">
        <img src="img/about.jpg" alt="Profil" />
      </div>
      <div class="content">
        <h3>Apa itu <span>Ravispa</span>?</h3>
        <p>
          Selamat datang di Ravispa, klub motor yang diakui secara luas sebagai rumah bagi para pecinta petualangan dan kebebasan berkendara. 
          Kami adalah komunitas yang berdedikasi untuk menghadirkan pengalaman berkendara yang tak terlupakan bagi setiap anggota kami. 
          Dengan semangat kebersamaan dan kecintaan akan petualangan, kami membentuk ikatan yang kuat di antara para penggemar motor.
        </p>
      </div>
    </div>
    
    <section id="visi-misi" class="visi-misi">
    <div class="visi-misi">
      <div class="visi">
        <h4>VISI USAHA :</h4>
        <p>
        Menjadi pusat komunitas terkemuka bagi para penggemar petualangan motor, yang mempromosikan persaudaraan, keselamatan berkendara, dan semangat petualangan yang tak terbatas.
        </p>
      </div>
      <div class="misi">
        <h4>MISI USAHA :</h4>
        <ul>
          <li>Kami bertekad untuk menciptakan lingkungan yang inklusif dan ramah bagi semua penggemar motor, di mana persahabatan dan kolaborasi menjadi pondasi utama kami.</li>
          <li>Kami mengedepankan keselamatan sebagai prioritas utama kami. Melalui penyuluhan, pelatihan, dan praktik berkendara yang bertanggung jawab, kami berusaha untuk menciptakan lingkungan berkendara yang aman bagi semua.</li>
          <li>Kami percaya bahwa motor adalah alat untuk menjelajahi dunia dengan kebebasan tanpa batas. Melalui acara-acara petualangan, perjalanan kelompok, dan sharing pengalaman, kami ingin menginspirasi anggota kami untuk mengeksplorasi tempat-tempat baru dan menciptakan kenangan tak terlupakan.</li>
          <li>Sebagai wujud komitmen kami terhadap komunitas motor lokal, kami mendukung industri motor lokal dengan mempromosikan produk-produk lokal, termasuk helm dan motor yang sejenisnya.</li>
        </ul>
      </div>
    </div>
    </section>
  </section>
  <!-- About Section End -->

   <!-- Product Section Start -->
  <section id="product" class="product">
      <h2><span>PRODUK KAMI</span></h2>
      <div class="scroll-container">
          <div class="product-container" id="product-container">
              <?php foreach ($products as $product): ?>
              <div class="product-card">
                  <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                  <div class="product-info">
                      <h3><?php echo $product['name']; ?></h3>
                      <p><?php echo $product['description']; ?></p>
                      <h3>Price <?php echo number_format($product['price'], 2); ?></h3>

                      <form action="add_to_cart.php" method="POST" onsubmit="return addToCart()">
                          <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                          <button type="submit">
                              <i data-feather="shopping-cart"></i> Tambah ke Keranjang
                          </button>
                      </form>
                  </div>
              </div>
              <?php endforeach; ?>
          </div>
      </div>
  </section>
  <!-- Product Section End -->
  <script>
  function addToCart() {
      alert("Produk telah ditambahkan ke keranjang!");
      return true;
  }
  </script>

 <!-- location Section Start -->
 <section id="location" class="location">
  <p>
    Our Location📍
  </p>

  <div class="row">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.188370743318!2d110.40727397319435!3d-7.769839677068732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5993dcd3a59f%3A0xb4f5bab3a939f52b!2sJl.%20Seturan%20Raya%2C%20Kledokan%2C%20Caturtunggal%2C%20Kec.%20Depok%2C%20Kabupaten%20Sleman%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sid!2sid!4v1716306678695!5m2!1sid!2sid"
      allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
  </div>
  </section>
  <!-- location Section End -->

  <?php include 'footer.php' ?>

  <!-- Feather Icons -->
  <script>
    feather.replace();
  </script>

  <script src="js/script.js"></script>

</body>
</html>
