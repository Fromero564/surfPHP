window.addEventListener("scroll", function () {
  var windowWidth = window.innerWidth;


  if (windowWidth < 800) {
  
    document.getElementById("mainMenu").style.display = "none";
    document.getElementById("navnoresponsive").style.display = "none";
    return; 
  }
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
