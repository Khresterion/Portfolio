// -------------
// TYPE SCRIPT
// -------------
let typed3 = new Typed(".typed", {
  strings: ["Jérémy Boulanger"],
  typeSpeed: 40,
  backSpeed: 0,
  smartBackspace: true, // this is a default
  loop: false,
});

// -------------
// HEADER
// -------------
function scrollBanner() {
  var scrollPos;
  var headerText = document.querySelector("#about .header-paralax");
  scrollPos = window.scrollY;

  if (scrollPos <= 800) {
    headerText.style.transform = "translateY(" + -scrollPos / 10 + "px" + ")";
    headerText.style.opacity = 1 - scrollPos / 800;
  }
}
window.addEventListener("scroll", scrollBanner);

// -------------
// PROGRESSBAR
// -------------

// -------------
// PORTFOLIO
// -------------
$(".image").click(function () {
  $(".image").removeClass("active");
  $(this).addClass("active");
});

// -------------
// AOS
// -------------
AOS.init();
