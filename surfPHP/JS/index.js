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

let slidePosition = 0;
const slides = document.querySelectorAll(".slide");
const totalSlides = slides.length;

function nextSlide() {
  slides[slidePosition].style.display = "none";
  slidePosition = (slidePosition + 1) % totalSlides;
  slides[slidePosition].style.display = "block";
}

setInterval(nextSlide, 3000);
