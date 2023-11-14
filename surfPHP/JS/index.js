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

function slideNext() {
  carousel.scrollLeft += carousel.clientWidth;
}

setInterval(slideNext, 3000);
