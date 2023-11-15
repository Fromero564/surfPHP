window.addEventListener("scroll", function () {
  var scrollY = window.scrollY;
  var promoSectionHeight = 100 - scrollY;

  document.getElementById("promoSection").style.height =
    promoSectionHeight + "vh";

  /*if (promoSectionHeight === 100) {*/
  if (promoSectionHeight >= 1) {
    document.getElementById("mainMenu").style.display = "none";
    document.getElementById("navnoresponsive").style.display = "none";
  } else {
    document.getElementById("mainMenu").style.display = "flex";
    document.getElementById("navnoresponsive").style.display = "flex";
  }
});


let sliderInner = document.querySelector(".slider--inner");

let images = sliderInner.querySelectorAll("img");

let index = 1;

setInterval(function () {
  let porcentage = index * -100;
  sliderInner.style.transform = "translateX(" + porcentage + "%)";
  if (index > images.length - 1) {
    index = 0;
  }
}, 1000);
