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
    <!--Our CSS-->
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/style.css" />
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
        <li><a href="Views/ourStory.php">OUR STORY</a></li>
        <li class="has-submenu">
          <input type="checkbox" id="surfLessonsToggle" class="toggle" />
          <label for="surfLessonsToggle" class="hoverable">
            <span class="hoverable">SURF LESSONS</span></label
          ><i class="fa-solid fa-angle-down"></i>
          <ul class="submenu">
            <li><a href="Views/poipuBeachSurf.php">POIPU BEACH SURF</a></li>
            <li><a href="Views/privateLessons.php">PRIVATE LESSONS</a></li>
            <li>
              <a href="Views/surfGuideForAdvanced.php">SURF GUIDE FOR ADVANCED</a>
            </li>
            <li><a href="Views/rochelleBallard.php">ROCHELLE BALLARD</a></li>
          </ul>
        </li>
        <li><a href="Views/beachRental.php">BEACH RENTAL</a></li>
        <li><a href="Views/shop.php">SHOP</a></li>
        <li><a href="Views/surfGuide.php">SURF GUIDE</a></li>
      </ul>
    </nav>

    <div class="respmenu">
      <input type="checkbox" />
      <i class="fas fa-bars"></i>
      <i class="fas fa-times"></i>
      <nav>
        <ul>
          <li><a href="#">HOME</a></li>
          <li><a href="Views/ourStory.php">OUR STORY</a></li>
          <li class="has-submenu">
            <input type="checkbox" id="surfLessonsToggle" class="toggle" />
            <label for="surfLessonsToggle" class="hoverable">
              <span class="hoverable">SURF LESSONS</span></label
            ><i class="fa-solid fa-angle-down"></i>
            <ul class="submenu">
              <li><a href="Views/poipuBeachSurf.php">POIPU BEACH SURF</a></li>
              <li><a href="Views/privateLessons.php">PRIVATE LESSONS</a></li>
              <li>
                <a href="Views/surfGuideForAdvanced.php">SURF GUIDE FOR ADVANCED</a>
              </li>
              <li><a href="Views/rochelleBallard.php">ROCHELLE BALLARD</a></li>
            </ul>
          </li>
          <li><a href="Views/beachRental.php">BEACH RENTAL</a></li>
          <li><a href="Views/shop.php">SHOP</a></li>
          <li><a href="Views/surfGuide.php">SURF GUIDE</a></li>
        </ul>
      </nav>
    </div>

    <section class="promo-box">
      <h1>Rochelle Ballard Surf Experience ~ Kauai's Best Surf School</h1>
      <a href="surfLessons.html" class="book-now-button">BOOK NOW</a>
    </section>

    <div class="container-card">
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
          <a href="poipuBeachSurf.html"> Learn More</a>
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

          <img src="./photos/IMG_2720.JPG" />

          <div class="dollar-icon">
            <p class="from-text">FROM</p>
            <i class="fas fa-dollar-sign">100</i>
          </div>
        </figure>
        <div class="contenido">
          <h3>Private Lessons for Beginners</h3>
          <p>
            (taking your surfing to the next level) 90 minutes including land
            lesson, water safety, and surf time. Our skilled and experienced
            instructors ensure one on one water safety, great moment
          </p>
          <a href=""> Book Now</a>
          <a href="privateLessons.html"> Learn More</a>
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
          <a href="surfGuideForAdvanced.html"> Learn More</a>
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
          <img src="./photos/foto4.png" />

          <div class="dollar-icon">
            <p class="from-text">FROM</p>
            <i class="fas fa-dollar-sign">100</i>
          </div>
        </figure>
        <div class="contenido">
          <h3>Rochelle Ballard Surf Experience</h3>
          <p>
            Surf with Kauai’s legendary elite professional female surfer,
            Rochelle Ballard, stunt double and starred in Blue Crush, Master’s
            World Champion, runner up to the WSL World Title, and multiple
            championship event winner.
          </p>
          <div>
            <a href=""> Book Now</a>
            <a href="rochelleBallard.html"> Learn More</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row align-center" id="row-356844962">
      <div id="col-2017702317" class="col medium-7 small-12 large-7">
        <div class="col-inner text-center">
          <h2 class="uppercase">
            <span style="font-size: 160%">WELCOME TO OUR ONLINE STORE</span>
          </h2>
        </div>
      </div>
    </div>
    <div class="container section-title-container">
      <h2 class="section-title section-title-center">
        <b></b><span class="section-title-main">FEATURED PRODUCTS</span><b></b>
      </h2>
    </div>
    <section>
      <div class="photo-container">
        <div class="photo">
          <img src="./photos/foto2.png" alt="Producto 1" />
          <div class="overlay">
            <h2 class="description">T-shirt Women</h2>
            <a href="shop.html" class="button">Shop Now</a>
          </div>
        </div>
        <div class="photo">
          <img src="./photos/foto3.png" alt="Producto 2" />
          <div class="overlay">
            <h2 class="description">Hats</h2>
            <a href="shop.html" class="button">Shop Now</a>
          </div>
        </div>
        <div class="photo">
          <img src="./photos/foto4.png" alt="Producto 3" />
          <div class="overlay">
            <h2 class="description">T-shirt Men</h2>
            <a href="shop.html" class="button">Shop Now</a>
          </div>
        </div>
      </div>
    </section>
    <section class="section-history">
      <h3>
        <a href="ourStory.html" class="our-history"><span>OUR HISTORY</span></a>
      </h3>
      <p>
        Welcome to Nukumoi Surf Shop, (Nukumoi, pronnouned Nuku-moy) The
        ultimate destination for all of your surfing, ocean, and beach
        activities. We provide the best surf lessons, surfboard rentals, beach
        gear, snorkel gear, our Nukumoi branded collection, surf apparel, gopro,
        sunglasses, and so much more. Come on in! (Nukumoi, pronnouned Nuku-moy)
      </p>
    </section>
    <section class="section-reviews">
      <div class="card-review">
        <p>
          "Morning surf lesson with Chris and Kahola was awesome! They made this
          Kansas girl feel like a real surfer girl. So patient, kind, and
          enthusiastic. Worth every penny."
        </p>
        <span
          >5 / 5 <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
          ><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
          ><i class="fa-solid fa-star"></i
        ></span>
        <a href="https://g.co/kgs/Bgguqq">See this review in google</a>
      </div>
      <div class="card-review2">
        <p>
          "Great selection of gear for surfing or snorkeling, for beginners to
          advanced. Staff is knowledgeable and helpful. Pick up a local shirt
          while you are there, lots of styles to choose from!!"
        </p>
        <span
          >5 / 5 <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
          ><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
          ><i class="fa-solid fa-star"></i
        ></span>
        <a href="https://g.co/kgs/p9tsp9">See this review in google</a>
      </div>
      <div class="card-review">
        <p>
          "Did a surf lesson with a group of friends and had a blast. Our two
          instructors took excellent care of us and made sure we were
          comfortable the entire time. So glad we did it, was definitely a
          highlight of our entire trip"
        </p>
        <span
          >5 / 5 <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
          ><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
          ><i class="fa-solid fa-star"></i
        ></span>
        <a href="https://g.co/kgs/icTxon">See this review in google</a>
      </div>
      <div class="card-review2">
        <p>
          "We rented snorkel equipment from this company and had quick service,
          clean gear, and an easy return. It was pretty cheap, too! Highly
          recommend!"
        </p>
        <span
          >5 / 5 <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
          ><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
          ><i class="fa-solid fa-star"></i
        ></span>
        <a href="https://g.co/kgs/o1o5vT">See this review in google</a>
      </div>
    </section>
    <!--Carrousel para responsive-->
    <section class="reviews-responsive">
      <div
        id="carouselExampleAutoplaying"
        class="carousel slide"
        data-bs-ride="carousel"
        data-bs-interval="3000"
      >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="card-review">
              <p>
                "Morning surf lesson with Chris and Kahola was awesome! They
                made this Kansas girl feel like a real surfer girl. So patient,
                kind, and enthusiastic. Worth every penny."
              </p>
              <span
                >5 / 5 <i class="fa-solid fa-star"></i
                ><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
                ><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ></span>
              <a href="https://g.co/kgs/Bgguqq">See this review in google</a>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card-review2">
              <p>
                "Great selection of gear for surfing or snorkeling, for
                beginners to advanced. Staff is knowledgeable and helpful. Pick
                up a local shirt while you are there, lots of styles to choose
                from!!"
              </p>
              <span
                >5 / 5 <i class="fa-solid fa-star"></i
                ><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
                ><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ></span>
              <a href="https://g.co/kgs/p9tsp9">See this review in google</a>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card-review">
              <p>
                "Did a surf lesson with a group of friends and had a blast. Our
                two instructors took excellent care of us and made sure we were
                comfortable the entire time. So glad we did it, was definitely a
                highlight of our entire trip"
              </p>
              <span
                >5 / 5 <i class="fa-solid fa-star"></i
                ><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
                ><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ></span>
              <a href="https://g.co/kgs/icTxon">See this review in google</a>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card-review2">
              <p>
                "We rented snorkel equipment from this company and had quick
                service, clean gear, and an easy return. It was pretty cheap,
                too! Highly recommend!"
              </p>
              <span
                >5 / 5 <i class="fa-solid fa-star"></i
                ><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
                ><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i
              ></span>
              <a href="https://g.co/kgs/o1o5vT">See this review in google</a>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleAutoplaying"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleAutoplaying"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <section>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14810.295135432982!2d-159.4528656!3d21.87397!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c071a964bdcd715%3A0xe3c81ead6273d13d!2sNukumoi%20Surf%20Co.!5e0!3m2!1ses-419!2sar!4v1698277012523!5m2!1ses-419!2sar"
        width="100%"
        height="450"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </section>
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
    </div>
  </footer>
</html>
