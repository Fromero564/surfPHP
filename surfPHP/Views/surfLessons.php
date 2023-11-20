<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <!--Bootstrap-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <!--Our JS-->
    <script src="./JS/index.js"></script>
    <!--Our CSS-->
    <link rel="stylesheet" href="../css/normalize.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <title>Tu Sitio Web</title>
  </head>
  <body>
  <nav class="menu-noresponsive sticky" id="navnoresponsive" >
      <ul class="navigation" id="mainMenu">
        <img src="../photos/NukumoiRetroLogo.jpeg" alt="Logo" class="logo-surf" />
        <li><a href="../index.php">HOME</a></li>
        <li><a href="./ourStory.php">OUR STORY</a></li>
        <li><a href="./surfLessons.php">SURF LESSONS</a></li>
        <li><a href="./beachRental.php">BEACH RENTAL</a></li>
        <li><a href="./shop.php">SHOP</a></li>
        <img src="../photos/logosurf.jpg" alt="Logo" class="logo-surf2" />
      </ul>
    </nav>

    <div class="respmenu">
    <img src="../photos/NukumoiRetroLogo.jpeg" alt="Logo" class="logosurfresponsive" />
    <img src="../photos/logosurf.png" alt="Logo" class="logosurfresponsive" />
      <input type="checkbox" />
      <i class="fas fa-bars"></i>
      <i class="fas fa-times"></i>
      <nav>
        <ul>
          <li><a href="../index.php">HOME</a></li>
          <li><a href="./ourStory.php">OUR STORY</a></li>
           <li><a href="./surfLessons.php">SURF LESSONS</a></li>
          <li><a href="./beachRental.php">BEACH RENTAL</a></li>
          <li><a href="./shop.php">SHOP</a></li>
        </ul>
      </nav>
    </div>


    <div class="photo-poipu">
      <img src="../photos/Webp.net-resizeimage.jpg" alt="" />
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
    <section>
      <div class="container-card">
        <div class="card card2 servicios-div">
          <figure class="figure-container">
            <div class="overlay-icons">
              <i class="fas fa-clock time-icon">
                <p class="p-icons">90 MINUTES</p>
              </i>
              <i class="fas fa-user ages-icon">
                <p class="p-icons">10+</p>
              </i>
              <i class="fas fa-users people-icon">
                <p class="p-icons">2-8 PEOPLE</p>
              </i>
            </div>

            <img src="../photos/PrivateGroup.jpeg" />
            <div class="dollar-icon">
              <p class="from-text">FROM</p>
              <i class="fas fa-dollar-sign">90</i>
            </div>
          </figure>
          <div class="contenido">
            <h3>Group <br> Surf Lesson</h3>
            <p>
             Shared  lessons with other parties close to the shore in Sunny Poipu beach. Catch waves and make new friends! 
            </p>
            <div class='buttonBL'>
            <a href=""> Book Now</a>
            <a href=""> Learn More</a>
            </div>
          </div>
        </div>

        <div class="card card2 servicios-div">
          <figure class="figure-container">
            <div class="overlay-icons">
              <i class="fas fa-clock time-icon">
                <p class="p-icons">90 MINUTES</p>
              </i>
              <i class="fas fa-user ages-icon">
                <p class="p-icons">9+</p>
              </i>
              <i class="fas fa-users people-icon">
                <p class="p-icons">3-8 PEOPLE</p>
              </i>
            </div>

            <img src="../photos/OhanaPrivate.jpeg" />

            <div class="dollar-icon">
              <p class="from-text">FROM</p>
              <i class="fas fa-dollar-sign">95</i>
            </div>
          </figure>
          <div class="contenido">
            <h3> Private Ohana <br> Surf Lesson </h3>
            <p>
              This is our most popular. Perfect for small groups, and the whole 
              family to enjoy the ocean and riding waves together! A family that surfs together stays together!
            </p>
            <div class='buttonBL'>
            <a href=""> Book Now</a>
            <a href=""> Learn More</a>
            </div>
          </div>
        </div>

        <div class="card card2 servicios-div">
          <figure class="figure-container">
            <div class="overlay-icons">
              <i class="fas fa-clock time-icon">
                <p class="p-icons">90 MINUTES</p>
              </i>
              <i class="fas fa-user ages-icon">
                <p class="p-icons">9 AND UNDER</p>
              </i>
              <i class="fas fa-users people-icon">
                <p class="p-icons">2 MINIMUM</p>
              </i>
            </div>
            <img src="../photos/KidsPrivatelLessons.jpg" />
            <div class="dollar-icon">
              <p class="from-text">FROM</p>
              <i class="fas fa-dollar-sign">125</i>
            </div>
          </figure>
          <div class="contenido">
            <h3>Kids Private Group<br>  Surf Lessons</h3>
            <p>
         We love sharing with the keiki! We give special attention focusing on the safety,
          fun, and sensitivity of young children.
            </p>
            <div class='buttonBL'>
            <a href=""> Book Now</a>
            <a href=""> Learn More</a>
          </div>

          </div>
        </div>

        <div class="card card2 servicios-div">
          <figure class="figure-container">
            <div class="overlay-icons">
              <i class="fas fa-clock time-icon">
                <p class="p-icons">90 MINUTES</p>
              </i>
              <i class="fas fa-user ages-icon">
                <p class="p-icons">ALL AGES</p>
              </i>
              <i class="fas fa-users people-icon">
                <p class="p-icons">1-2</p>
              </i>
            </div>
            <img src="../photos/PrivateSurfLessons.jpeg" />

            <div class="dollar-icon">
              <p class="from-text">FROM</p>
              <i class="fas fa-dollar-sign">275</i>
            </div>
          </figure>
          <div class="contenido">
            <h3>Private <br> Surf lessons </h3>
            <p>
             One on one guidance with our skilled instructors gives you personalized
              attention for safety, more opportunity to ride waves and progress your surfing ability .
            </p>
            <div class='buttonBL'>
              <a href=""> Book Now</a>
              <a href=""> Learn More</a>
            </div>
          </div>
        </div>

        <div class="card card2 servicios-div">
          <figure class="figure-container">
            <div class="overlay-icons">
              <i class="fas fa-clock time-icon">
                <p class="p-icons">90 MINUTES</p>
              </i>
              <i class="fas fa-user ages-icon">
                <p class="p-icons">ALL AGES</p>
              </i>
              <i class="fas fa-users people-icon">
                <p class="p-icons">1-4 PEOPLE</p>
              </i>
            </div>
            <img src="../photos/SurfGuide.jpg" />

            <div class="dollar-icon">
              <p class="from-text">FROM</p>
              <i class="fas fa-dollar-sign">350</i>
            </div>
          </figure>
          <div class="contenido">
            <h3>Guided <br>Surf Experience</h3>
            <p>
            Our experienced local surf instructor will take you to the best wave on that day, according to the swell, winds, and tide for your desired wave and ability.
            </p>
            <div class='buttonBL'>
              <a href=""> Book Now</a>
              <a href=""> Learn More</a>
            </div>
          </div>
        </div>

        <div class="card card2 servicios-div">
          <figure class="figure-container">
            <div class="overlay-icons">
              <i class="fas fa-clock time-icon">
                <p class="p-icons">90 MINUTES</p>
              </i>
              <i class="fas fa-user ages-icon">
                <p class="p-icons">ALL AGES</p>
              </i>
              <i class="fas fa-users people-icon">
                <p class="p-icons">1-4 PEOPLE</p>
              </i>
            </div>
            <img src="../photos/RochelleB.jpg" />

            <div class="dollar-icon">
              <p class="from-text">FROM</p>
              <i class="fas fa-dollar-sign">450</i>
            </div>
          </figure>
          <div class="contenido">
            <h3>Rochelle Ballard <br> Surf Experience</h3>
            <p>
              Surf with Kauai’s legendary elite professional female surfer,
              Rochelle Ballard, stunt double and starred in Blue Crush, Master’s
              World Champion, runner up to the WSL World Title, and multiple
              championship event winner.
            </p>
            <div class='buttonBL'>
              <a href=""> Book Now</a>
              <a href=""> Learn More</a>
            </div>
          </div>
        </div>

      </div>
    </section>
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
        <div>
          <img
            src="../photos/NukumoiRetroLogo.jpeg"
            alt="Logo"
            class="logo-surffooter"
          />
        </div>
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
