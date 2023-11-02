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
  <body>
  <nav class="menu-noresponsive sticky">
      <ul class="navigation">
        <img
          src="./photos/NukumoiRetroLogo.jpeg"
          alt="Logo"
          class="logo-surf"
        />
        <li><a href="#">HOME</a></li>
        <li><a href="./Views/ourStory.php">OUR STORY</a></li>
        <li class="has-submenu">
          <input type="checkbox" id="surfLessonsToggle" class="toggle" />
          <label for="surfLessonsToggle" class="hoverable">
            <span class="hoverable">SURF LESSONS</span></label
          ><i class="fa-solid fa-angle-down"></i>
          <ul class="submenu">
            <li><a href="./Views/poipuBeachSurf.php">POIPU BEACH SURF</a></li>
            <li><a href="./Views/privateLessons.php">PRIVATE LESSONS</a></li>
            <li>
              <a href="./Views/surfGuideForAdvanced.php">SURF GUIDE FOR ADVANCED</a>
            </li>
            <li><a href="/Views/rochelleBallard.php">ROCHELLE BALLARD</a></li>
          </ul>
        </li>
        <li><a href="./Views/beachRental.php">BEACH RENTAL</a></li>
        <li><a href="./Views/shop.php">SHOP</a></li>
        <li><a href="./Views/surfGuide.php">SURF GUIDE</a></li>
      </ul>
    </nav>

    <div class="respmenu">
      <input type="checkbox" />
      <i class="fas fa-bars"></i>
      <i class="fas fa-times"></i>
      <nav>
        <ul>
          <li><a href="#">HOME</a></li>
          <li><a href="./Views/ourStory.php">OUR STORY</a></li>
          <li class="has-submenu">
            <input type="checkbox" id="surfLessonsToggle" class="toggle" />
            <label for="surfLessonsToggle" class="hoverable">
              <span class="hoverable">SURF LESSONS</span></label
            ><i class="fa-solid fa-angle-down"></i>
            <ul class="submenu">
              <li><a href="./Views/poipuBeachSurf.php">POIPU BEACH SURF</a></li>
              <li><a href="./Views/privateLessons.php">PRIVATE LESSONS</a></li>
              <li>
                <a href="./Views/surfGuideForAdvanced.php">SURF GUIDE FOR ADVANCED</a>
              </li>
              <li><a href="./Views/rochelleBallard.php">ROCHELLE BALLARD</a></li>
            </ul>
          </li>
          <li><a href="./Views/beachRental.php">BEACH RENTAL</a></li>
          <li><a href="./Views/shop.php">SHOP</a></li>
          <li><a href="./Views/surfGuide.php">SURF GUIDE</a></li>
        </ul>
      </nav>
    </div>
    <div class="photo-poipu">
      <img src="./photos/DSC06887.jpg" alt="" />
      <div class="text-img">
        <h1>SURF LESSONS</h1>
        <h2>
          Want to Learn to Surf? Our Private Surf Lessons are THE BEST on Kauai,
          HI
        </h2>
        <p>
          We are stoked you found us! Checkout the different class options
          below, and don't hesitate to give us a call if you have any questions.
        </p>
      </div>
    </div>
    <div class="text-information">
      <div class="title-info">
        <h2>
          Private Lessons for Beginners, Advanced Beginner or Intermediate
        </h2>
      </div>
      <div class="card-info">
        <p>QUICK DETAILS</p>
        <div class="">
          <ul>
            <li>Ages:</li>
            <li>Duration:</li>
            <li>Capacity:</li>
          </ul>
          <p>Additional information</p>
          <p class="card-p">
            If you are doing a surf lesson for the first time or even a few
            times, it’s helpful to check out this ‘how to stand up on the board
            when catching a wave’ video. It’s called the pop up technique.
          </p>
        </div>
      </div>
    </div>
    <div class="extra-info">
      <p>
        (taking your surfing to the next level) 90 minutes including land
        lesson, water safety, and surf time) Our skilled and experienced
        instructors ensure one on one water safety,
      </p>
    </div>
    <div class="container-card">
      <div class="card card2 servicios-div poipu-card">
        <figure class="figure-container">
          <div class="overlay-icons">
            <i class="fas fa-clock time-icon"
              ><p class="p-icons">90 MINUTES</p></i
            >
            <i class="fas fa-user ages-icon"><p class="p-icons">ALL AGES</p></i>
            <i class="fas fa-users people-icon"
              ><p class="p-icons">1-4 PEOPLE</p></i
            >
          </div>

          <img src="./photos/DSC06887.jpg" />
          <div class="dollar-icon">
            <p class="from-text">FROM</p>
            <i class="fas fa-dollar-sign">100</i>
          </div>
        </figure>
        <div class="contenido">
          <h3>Poipu Beach Surf Lessons for Beginners</h3>
          <p>
            90 minutes including land lesson, water safety, and water time.
            Poipu Beach Surf Lessons for Beginners offers an exciting and safe
            introduction to the exhilarating world of surfing.
          </p>

          <a href=""> Book Now</a>
          <a href=""> Learn More</a>
        </div>
      </div>

      <div class="card card2 servicios-div poipu-card">
        <figure class="figure-container">
          <div class="overlay-icons">
            <i class="fas fa-clock time-icon"
              ><p class="p-icons">90 MINUTES</p></i
            >
            <i class="fas fa-user ages-icon"><p class="p-icons">ALL AGES</p></i>
            <i class="fas fa-users people-icon"
              ><p class="p-icons">1-4 PEOPLE</p></i
            >
          </div>

          <img src="./photos/IMG_2720.JPG" />

          <div class="dollar-icon">
            <p class="from-text">FROM</p>
            <i class="fas fa-dollar-sign">100</i>
          </div>
        </figure>
        <div class="contenido">
          <h3>
            Private Lessons for Beginners, Advanced Beginner or Intermediate
          </h3>
          <p>
            (taking your surfing to the next level) 90 minutes including land
            lesson, water safety, and surf time. Our skilled and experienced
            instructors ensure one on one water safety,
          </p>
          <a href=""> Book Now</a>
          <a href=""> Learn More</a>
        </div>
      </div>

      <div class="card card2 servicios-div poipu-card">
        <figure class="figure-container">
          <div class="overlay-icons">
            <i class="fas fa-clock time-icon"
              ><p class="p-icons">90 MINUTES</p></i
            >
            <i class="fas fa-user ages-icon"><p class="p-icons">ALL AGES</p></i>
            <i class="fas fa-users people-icon"
              ><p class="p-icons">1-4 PEOPLE</p></i
            >
          </div>
          <img src="./photos/Webp.net-resizeimage.jpg" />
          <div class="dollar-icon">
            <p class="from-text">FROM</p>
            <i class="fas fa-dollar-sign">100</i>
          </div>
        </figure>
        <div class="contenido">
          <h3>Surf Guide for advanced surfers only</h3>
          <p>
            Our experienced local surf instructor will take you to the best wave
            on that day, according to the swell, winds, and tide for your
            desired wave and ability. This is for Intermediate and Advanced
            surfing only.
          </p>
          <a href=""> Book Now</a>
          <a href=""> Learn More</a>
        </div>
      </div>
    </div>
  </body>
  <footer>
    <div class="footer">
      <div class="column1">
        <h3>CONTACT INFO</h3>
        <ul>
          <li><i class="fas fa-phone"></i> Teléfono: +123-456-7890</li>
          <li><i class="fas fa-envelope"></i> Correo: info@tupaginasurf.com</li>
          <li><i class="fas fa-map-marker"></i> Dirección: 123 Surf Street</li>
        </ul>
      </div>
      <div class="column2">
        <div>
          <img
            src="./photos/NukumoiRetroLogo.jpeg"
            alt="Logo"
            class="logo-surf"
          />
        </div>
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
    </div>
  </footer>
</html>
