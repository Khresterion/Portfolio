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
// ACTIVE BUTTONS
// -------------
let buttons = document.querySelectorAll("a");

buttons.foreach((a) => {
  a.addEventListener("click", function () {
    buttons.foreach((a) => a.classList.remove("active"));
    this.classList.add("active");
  });
});
// -------------
// NAVBAR
// -------------
let mainNav = document.getElementById("js-menu");
let navBarToggle = document.getElementById("js-navbar-toggle");

navBarToggle.addEventListener("click", function () {
  mainNav.classList.toggle("active");
});
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
