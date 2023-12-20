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
    <link rel="shortcut icon" href="../photos/NukumoiRetroLogo.jpeg">
    <title>Surf Shop | Nukumoi Surf Co.</title>
  </head>

  <nav class="menu-noresponsive sticky" id="menu-noresponsive">
  <ul class="navigation" id="mainMenu">
        <img src="../photos/NukumoiRetroLogo.jpeg" alt="Logo" class="logo-surf" />
        <li><a href="../index">HOME</a></li>
        <li><a href="./ourStory">OUR STORY</a></li>
        <li><a href="./surfLessons">SURF LESSONS</a></li>
        <li><a href="./beachRental">BEACH RENTAL</a></li>
        <li><a href="./shop">SHOP</a></li>
        <img src="../photos/logosurf.png" alt="Logo" class="logo-surf2" />
      </ul>
    </nav>

    <div class="respmenu">
      <input type="checkbox" />
      <i class="fas fa-bars"></i>
      <i class="fas fa-times"></i>
      <nav>
        <ul>
          <li><a href="../index">HOME</a></li>
          <li><a href="./ourStory">OUR STORY</a></li>
          <li class="has-submenu">
            <input type="checkbox" id="surfLessonsToggle" class="toggle" />
            <label for="surfLessonsToggle" class="hoverable">
              <span class="hoverable">SURF LESSONS</span></label
            ><i class="fa-solid fa-angle-down"></i>
            <ul class="submenu">
              <li><a href="./poipuBeachSurf">POIPU BEACH SURF</a></li>
              <li><a href="./privateLessons">PRIVATE LESSONS</a></li>
              <li>
                <a href="./surfGuideForAdvanced">SURF GUIDE FOR ADVANCED</a>
              </li>
              <li><a href="./rochelleBallard">ROCHELLE BALLARD</a></li>
            </ul>
          </li>
          <li><a href="./beachRental">BEACH RENTAL</a></li>
          <li><a href="./shop">SHOP</a></li>
        </ul>
      </nav>
    </div>
  <body>
    <div class="container-shop">
<div id="men-section" class= "card-section-shop" style="display: flex;">

<?php

require("../Model/Conexion.php");
$con = new Conexion();
$productosMen = $con->getProductsMen();

foreach ($productosMen as $productoMan) {
    echo '<div class="card-shop">';
    if (isset($productoMan["photo_name"])) {
      $imagenSrc = '../photos/menShop/' . $productoMan["photo_name"];
      echo '<img src="' . $imagenSrc . '" alt="Producto de Surf" />';
  } else {
      echo '<p>No se encontró la imagen</p>';
  }
    echo '<hr class="divider" />';
    echo '<h2>' . $productoMan["name"] . '</h2>';
    echo '<p>' . $productoMan["colour"] . '</p>';
    echo '<p class="price"> $' . $productoMan["price"] . '</p>';
    echo '<p> ' . $productoMan["category"] . '</p>';
    echo '<a href="#" class="learn-more-button">Learn More</a>';
    echo '</div>';
}
?>
</div>
<div id="women-section" class= "card-section-shop" style="display: flex;">
<?php
$productosWomen = $con->getProductsWomen();

foreach ($productosWomen as $productoWoman) {
    echo '<div class="card-shop">';
    if (isset($productoWoman["photo_name"])) {
      $imagenSrc = '../photos/womenShop/' . $productoWoman["photo_name"];
      echo '<img src="' . $imagenSrc . '" alt="Producto de Surf" />';
  } else {
      echo '<p>No se encontró la imagen</p>';
  }
    echo '<hr class="divider" />';
    echo '<h2>' . $productoWoman["name"] . '</h2>';
    echo '<p>' . $productoWoman["colour"] . '</p>';
    echo '<p class="price"> $' . $productoWoman["price"] . '</p>';
    echo '<p>' . $productoWoman["category"] . '</p>';
    echo '<a href="#" class="learn-more-button">Learn More</a>';
    echo '</div>';
}
?>
</div>
<div id="children-section" class= "card-section-shop" style="display: flex;">
<?php
$productosChildren = $con->getProductsChildren();

foreach ($productosChildren as $productoChild) {
    echo '<div class="card-shop">';
    if (isset($productoChild["photo_name"])) {
      $imagenSrc = '../photos/kidsShop/' . $productoChild["photo_name"];
      echo '<img src="' . $imagenSrc . '" alt="Producto de Surf" />';
  } else {
      echo '<p>No se encontró la imagen</p>';
  }
    echo '<hr class="divider" />';
    echo '<h2>' . $productoChild["name"] . '</h2>';
    echo '<p>' . $productoChild["colour"] . '</p>';
    echo '<p class="price"> $' . $productoChild["price"] . '</p>';
    echo '<p> ' . $productoChild["category"] . '</p>';
    echo '<a href="#" class="learn-more-button">Learn More</a>';
    echo '</div>';
}
?>
</div>
<div id="hat-section" class= "card-section-shop" style="display: flex;">
<?php
$productosHats = $con->getProductsHats();

foreach ($productosHats as $productoHat) {
    echo '<div class="card-shop">';
    if (isset($productoHat["photo_name"])) {
      $imagenSrc = '../photos/hatsShop/' . $productoHat["photo_name"];
      echo '<img src="' . $imagenSrc . '" alt="Producto de Surf" />';
  } else {
      echo '<p>No se encontró la imagen</p>';
  }
    echo '<hr class="divider" />';
    echo '<h2>' . $productoHat["name"] . '</h2>';
    echo '<p>' . $productoHat["colour"] . '</p>';
    echo '<p class="price"> $' . $productoHat["price"] . '</p>';
    echo '<p>' . $productoHat["category"] . '</p>';
    echo '<a href="#" class="learn-more-button">Learn More</a>';
    echo '</div>';
}
?>
</div>
    </div>
  </body>
  <footer class="footer">
   <div class="column1">
        <h3>CONTACT INFO</h3>
        <ul>
          <li><i class="fas fa-phone"></i> 808.742.8019</li>
          <li><i class="fas fa-envelope"></i>christine@nukumoi.com</li>
          <li><i class="fas fa-map-marker"></i>2080 Hoone Rd.Poipu, HI 96756 Kaua'i, Hawai'i, USA</li>
        </ul>
      </div>
      <div class="column2">
        <div>
          <img
            src="../photos/NukumoiRetroLogo.jpeg"
            alt="Logo"
            class="logo-surffooter"
          />
        </div>
        <ul class="social-icons">
          <li>
            <a href="https://www.instagram.com/nukumoisurf/" target="_blank"><i class="fab fa-instagram"></i></a>
          </li>
          <li>
            <a href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14810.295135432982!2d-159.4528656!3d21.87397!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c071a964bdcd715%3A0xe3c81ead6273d13d!2sNukumoi%20Surf%20Co.!5e0!3m2!1ses-419!2sar!4v1698277012523!5m2!1ses-419!2sar" target='_blanck'><i class="fab fa-google"></i></a>
          </li>
          <li>
            <a href="https://www.facebook.com/nukumoi" target="_blank"><i class="fab fa-facebook"></i></a>
          </li>
        </ul>
      </div>
    <div class="column3">
      <h3>QUICK LINKS</h3>
      <ul>
      <li><a href="../index">HOME</a></li>
        <li><a href="./ourStory">OUR STORY</a></li>
        <li><a href="./surfLessons">SURF LESSONS</a></li>
        <li><a href="./beachRental">BEACH RENTAL</a></li>
        <li><a href="./shop">SHOP</a></li>
      </ul>
    </div>
  </footer>
</html>
