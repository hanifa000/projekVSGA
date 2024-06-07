<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Terrarium.qu</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@100;200;300;400;500;600;700;800;900&family=Comfortaa:wght@300..700&family=DM+Sans:wght@100..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="CSS/login.css?v=1.0" />
</head>

<body>
  <?php
  include 'nav.php';
  ?>

  <!-- Hero Section Start -->
  <section class="hero" id="home">
    <form action="proses-login.php" method="post">
        <h2>LOGIN</h2>
        <table>
            <tr>
                <td><input name="email" type="email" placeholder="Email" required></td>
            </tr>
            <tr>
                <td><input name="password" type="password" placeholder="Password" required></td>
            </tr>
            <tr>
                <td>Captcha<br>
                    <img src="captcha.php" alt="Captcha" />
                    <input name="captcha_code" type="text">
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="LOGIN"></td>
            </tr>
        </table>
        <p>Don't have an account? <a href="register.php">Register here</a></p>
    </form>
  </section>
  <!-- Hero Section End -->

  <?php include 'footer.php' ?>
  <!-- Feather Icons -->
  <script>
    feather.replace();
  </script>

  <!-- My JavaScript -->
  <script src="js/script.js"></script>
</body>
</html>