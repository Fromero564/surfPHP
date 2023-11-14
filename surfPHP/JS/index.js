window.addEventListener("scroll", function () {
  var scrollY = window.scrollY;
  var promoSectionHeight = 100 - scrollY;

  document.getElementById("promoSection").style.height =
    promoSectionHeight + "vh";

  if (promoSectionHeight === 100) {
    document.getElementById("mainMenu").style.display = "none";
    document.getElementById("navnoresponsive").style.display = "none";
  } else {
    document.getElementById("mainMenu").style.display = "flex";
    document.getElementById("navnoresponsive").style.display = "flex";
  }
});

const carousel = document.querySelector(".carousel-container");
let slidePosition = 0;
const totalSlides = document.querySelectorAll(".slide").length;

setInterval(() => {
  slidePosition = (slidePosition + 1) % totalSlides;
  carousel.style.transform = `translateX(-${slidePosition * 100}%)`;
}, 3000); // Cambia esta cifra para ajustar la velocidad del deslizamiento
