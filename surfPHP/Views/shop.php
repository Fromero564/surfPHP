<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />

    <link rel="stylesheet" href="../css/normalize.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <title>Tu Sitio Web</title>
  </head>
  <nav class="menu-noresponsive sticky">
      <ul class="navigation">
        <img
          src="../photos/NukumoiRetroLogo.jpeg"
          alt="Logo"
          class="logo-surf"
        />
        <li><a href="#">HOME</a></li>
        <li><a href="/surf/Views/ourStory.php">OUR STORY</a></li>
        <li class="has-submenu">
          <input type="checkbox" id="surfLessonsToggle" class="toggle" />
          <label for="surfLessonsToggle" class="hoverable">
            <span class="hoverable">SURF LESSONS</span></label
          ><i class="fa-solid fa-angle-down"></i>
          <ul class="submenu">
            <li><a href="/surf/Views/poipuBeachSurf.php">POIPU BEACH SURF</a></li>
            <li><a href="/surf/Views/privateLessons.php">PRIVATE LESSONS</a></li>
            <li>
              <a href="/surf/Views/surfGuideForAdvanced.php">SURF GUIDE FOR ADVANCED</a>
            </li>
            <li><a href="/surf/Views/rochelleBallard.php">ROCHELLE BALLARD</a></li>
          </ul>
        </li>
        <li><a href="/surf/Views/beachRental.php">BEACH RENTAL</a></li>
        <li><a href="/surf/Views/shop.php">SHOP</a></li>
        <li><a href="/surf/Views/surfGuide.php">SURF GUIDE</a></li>
      </ul>
    </nav>

    <div class="respmenu">
      <input type="checkbox" />
      <i class="fas fa-bars"></i>
      <i class="fas fa-times"></i>
      <nav>
        <ul>
          <li><a href="#">HOME</a></li>
          <li><a href="/surf/Views/ourStory.php">OUR STORY</a></li>
          <li class="has-submenu">
            <input type="checkbox" id="surfLessonsToggle" class="toggle" />
            <label for="surfLessonsToggle" class="hoverable">
              <span class="hoverable">SURF LESSONS</span></label
            ><i class="fa-solid fa-angle-down"></i>
            <ul class="submenu">
              <li><a href="/surf/Views/poipuBeachSurf.php">POIPU BEACH SURF</a></li>
              <li><a href="/surf/Views/privateLessons.php">PRIVATE LESSONS</a></li>
              <li>
                <a href="/surf/Views/surfGuideForAdvanced.php">SURF GUIDE FOR ADVANCED</a>
              </li>
              <li><a href="/surf/Views/rochelleBallard.php">ROCHELLE BALLARD</a></li>
            </ul>
          </li>
          <li><a href="/surf/Views/beachRental.php">BEACH RENTAL</a></li>
          <li><a href="/surf/Views/shop.php">SHOP</a></li>
          <li><a href="/surf/Views/surfGuide.php">SURF GUIDE</a></li>
        </ul>
      </nav>
    </div>
  <body>
    <div class="container-shop">

    
<?php
require("../Model/Conexion.php");
$con = new Conexion();
$productos = $con->getProducts();

foreach ($productos as $producto) {
    echo '<div class="card-shop">';
    echo '<img src="./photos/foto2.png" alt="Producto de Surf" />';
    echo '<hr class="divider" />';
    echo '<h2>' . $producto["name"] . '</h2>';
    echo '<p>' . $producto["colour"] . '</p>';
    echo '<p class="price"> $' . $producto["price"] . '</p>';
    echo '<a href="#" class="learn-more-button">Learn More</a>';
    echo '</div>';
}
?>


    </div>
  </body>
  <footer class="footer">
    <div class="column1">
      <h3>CONTACT INFO</h3>
      <ul>
        <li><i class="fas fa-phone"></i> Teléfono: +123-456-7890</li>
        <li><i class="fas fa-envelope"></i> Correo: info@tupaginasurf.com</li>
        <li><i class="fas fa-map-marker"></i> Dirección: 123 Surf Street</li>
      </ul>
    </div>
    <div class="column2">
      <h3></h3>
      <ul class="social-icons">
        <li>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-google"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-facebook"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-tripadvisor"></i></a>
        </li>
      </ul>
    </div>
    <div class="column3">
      <h3>QUICK LINKS</h3>
      <ul>
        <li><a href="index.html">HOME</a></li>
        <li><a href="ourStory.html">OUR STORY</a></li>
        <li><a href="surfLessons.html">SURF LESSONS</a></li>
        <li><a href="beachRental.html">BEACH RENTAL</a></li>
        <li><a href="shop.html">SHOP</a></li>
        <li><a href="surfGuide.html">SURF GUIDE</a></li>
      </ul>
    </div>
  </footer>
</html>
