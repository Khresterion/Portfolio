// -------------
// BURGER
// -------------
// $(function () {
//   $(".navbar a, footer a").on("click", function (event) {
//     event.preventDefault();
//     let hash = this.hash;

//     $("body,html").animate(
//       { scrollTop: $(hash).offset().top },
//       900,
//       function () {
//         window.location.hash = hash;
//       }
//     );
//   });
// });

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

  if (scrollPos <= 600) {
    headerText.style.transform = "translateY(" + -scrollPos / 10 + "px" + ")";
    headerText.style.opacity = 1 - scrollPos / 600;
  }
}
window.addEventListener("scroll", scrollBanner);

// -------------
// PROGRESSBAR
// -------------
let delay = 500;
$(".progress-bar").each(function (i) {
  $(this)
    .delay(delay * i)
    .animate({ width: $(this).attr("aria-valuenow") + "%" }, delay);

  $(this)
    .prop("Counter", 0)
    .animate(
      {
        Counter: $(this).text(),
      },
      {
        duration: delay,
        easing: "swing",
        step: function (now) {
          $(this).text(Math.ceil(now) + "%");
        },
      }
    );
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
