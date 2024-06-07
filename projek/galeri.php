<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Motor</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Comfortaa:wght@300..700&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="CSS/galeri.css?v=1.0" />
</head>
<body>
  <?php
  include 'nav.php';
  ?>

    <!-- Bagian Produk Mulai -->
    <section id="galeri" class="galeri">
        <h2><span>GALERI</span></h2>
        <div class="galeri-grid">
        <?php
            // Data produk contoh
            $galeris = [
                [
                    "id" => 1,
                    "name" => "Touring Pegunungan",
                    "image" => "img/galeri1.jpg",
                    "description" => "Petualangan seru di pegunungan dengan klub motor kami.",
                ],
                [
                    "id" => 2,
                    "name" => "Gathering Tahunan",
                    "image" => "img/galeri2.jpg",
                    "description" => "Acara tahunan untuk mempererat persaudaraan antar anggota.",
                ],
                [
                    "id" => 3,
                    "name" => "Lomba Balap",
                    "image" => "img/galeri3.jpg",
                    "description" => "Keseruan lomba balap yang diadakan setiap tahun.",
                ],
                [
                    "id" => 4,
                    "name" => "Kopdar Mingguan",
                    "image" => "img/galeri4.jpg",
                    "description" => "Kopi darat mingguan untuk berdiskusi dan berbagi cerita.",
                ],
                [
                    "id" => 5,
                    "name" => "Charity Ride",
                    "image" => "img/galeri5.jpg",
                    "description" => "Kegiatan amal sambil touring dengan klub motor.",
                ],
                [
                    "id" => 6,
                    "name" => "Perjalanan Jarak Jauh",
                    "image" => "img/galeri6.jpg",
                    "description" => "Perjalanan panjang yang penuh tantangan dan keseruan.",
                ],
                [
                    "id" => 7,
                    "name" => "Pelatihan Safety Riding",
                    "image" => "img/galeri6.jpg",
                    "description" => "Pelatihan keselamatan berkendara untuk anggota baru.",
                ],
                [
                    "id" => 8,
                    "name" => "Eksplorasi Wisata",
                    "image" => "img/galeri5.jpg",
                    "description" => "Mengunjungi tempat-tempat wisata menarik dengan motor.",
                ],
                [
                    "id" => 9,
                    "name" => "Klub Motor Klasik",
                    "image" => "img/galeri4.jpg",
                    "description" => "Klub motor dengan koleksi motor klasik yang terawat.",
                ],
                [
                    "id" => 10,
                    "name" => "Adventure Off-Road",
                    "image" => "img/galeri3.jpg",
                    "description" => "Menantang alam dengan petualangan off-road.",
                ],
            ];


            foreach ($galeris as $galeri) {
              echo '
              <div class="galeri-card" onclick="showgaleriDetails(' . $galeri["id"] . ')">
                  <img src="' . $galeri["image"] . '" alt="' . $galeri["name"] . '" class="galeri-img">
                  <h3>' . $galeri["name"] . '</h3>
                  <p>' . $galeri["description"] . '</p>
              </div>
              ';
            }
            ?>
        </div>
    </section>
    <!-- Bagian Produk Selesai -->

    <!-- Modal Produk Mulai -->
    <div id="galeri-modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <div id="modal-body"></div>
        </div>
    </div>
    <!-- Modal Produk Selesai -->

    <?php include 'footer.php' ?>

  <!-- Feather Icons -->
  <script>
    feather.replace();
  </script>

  <!-- My JavaScript -->
  <script src="js/script.js"></script>
  
</body>
</html>
