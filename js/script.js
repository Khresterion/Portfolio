// let lastScrollTop = 0;
// navbar = document.getElementById("navbar");

// window.addEventListener("scroll", function () {
//   const scrollTop =
//     window.pageTOffset || this.document.documentElement.scrollTop;

//   if (scrollTop > lastScrollTop) {
//     navbar.style.top = "-50px";
//   } else {
//     navbar.style.top = "0";
//   }
//   lastScrollTop = scrollTop;
// });

$(function () {
  $(".navbar a, footer a").on("click", function (event) {
    event.preventDefault();
    let hash = this.hash;

    $("body,html").animate(
      { scrollTop: $(hash).offset().top },
      900,
      function () {
        window.location.hash = hash;
      }
    );
  });
});

// TYPECRIPT
let typed3 = new Typed(".typed", {
  strings: ["Jérémy Boulanger"],
  typeSpeed: 40,
  backSpeed: 0,
  smartBackspace: true, // this is a default
  loop: false,
});

// AOS
AOS.init();

// PORTFOLIO
$(".image").click(function () {
  $(".image").removeClass("active");
  $(this).addClass("active");
});
