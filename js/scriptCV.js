// $(document).ready(function () {
//   $("p").hide();
// });

mybutton = document.getElementById("myBtn");

window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

// // -------------
// // TYPE SCRIPT
// // -------------
const typed3 = new Typed(".typed", {
  strings: ["Jérémy Boulanger"],
  typeSpeed: 40,
  backSpeed: 0,
  smartBackspace: true, // this is a default
  loop: false,
});

// // -------------
// // ACTIVE BUTTONS
// // -------------
// let buttons = document.querySelectorAll("a");

// buttons.foreach((a) => {
//   a.addEventListener("click", function () {
//     buttons.foreach((a) => a.classList.remove("active"));
//     this.classList.add("active");
//   });
// });

// const currentLocation = location.href;
// const menuItem = document.querySelectorAll("a");
// const menuLength = menuItem.length;
// for (let i = 0; i < menuLength; i++) {
//   if (menuItem[i].href === currentLocation) {
//     menuItem[i].className = "active";
//   }
// }

// // -------------
// // NAVBAR
// // -------------
// $(function () {
//   $('nav a[href^="/' + location.pathname.split("/")[1] + '"]').addClass(
//     "active"
//   );
// });

$(document).ready(function () {
  $("ul li a").click(function () {
    $("li a").removeClass("active");
    $(this).addClass("active");
  });
});

// let mainNav = document.getElementById("js-menu");
// let navBarToggle = document.getElementById("js-navbar-toggle");

// navBarToggle.addEventListener("click", function () {
//   mainNav.classList.toggle("active");
// });
// // -------------
// // PORTFOLIO
// // -------------
// $(".item").hover(function () {
//   $(".item").removeClass("active");
//   $(this).addClass("active");
// });

// // -------------
// // AOS
// // -------------
// AOS.init();

// // -------------
// // Validation mail
// // -------------

// // -------------
// // PICTURE
// // -------------
$(function () {
  $("#photo").click(function () {
    $("#photo").fadeOut(1000);
  });
});
// // -------------
// // TOGGLE PROGRESS BARS
// // -------------

$(function () {
  $("#frontbutton").on("click", function () {
    $("#front").toggle(500);
  });
});

$(function () {
  $("#backbutton").on("click", function () {
    $("#back").toggle(500);
  });
});
