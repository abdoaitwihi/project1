$(document).ready(function () {
   $(window).scroll(function () {
      var window_top = $(window).scrollTop() + 1;
      if (window_top > 50) {
         $(".header").addClass("menu_fixed animated fadeInDown");
      } else {
         $(".header").removeClass("menu_fixed animated fadeInDown");
      }
   });
   var review = $(".nos-offres");
   if (review.length) {
      review.owlCarousel({
         items: 3,
         loop: true,
         dots: true,
         autoplay: true,
         autoplayHoverPause: true,
         autoplayTimeout: 5000,
         nav: false,
         margin: 30,
         responsiveClass: true,
         responsive: {
            0: {
               items: 1,
            },
            576: {
               items: 2,
            },
            991: {
               items: 4,
            },
         },
         nav: true,
         navText: ["", ""],
      });
   }
   var review2 = $(".font-confiance");
   if (review2.length) {
      review2.owlCarousel({
         items: 3,
         loop: true,
         dots: true,
         autoplay: true,
         autoplayHoverPause: true,
         autoplayTimeout: 5000,
         nav: false,
         margin: 30,
         responsiveClass: true,
         responsive: {
            0: {
               items: 1,
            },
            576: {
               items: 2,
            },
            991: {
               items: 3,
            },
         },
         nav: true,
         navText: ["", ""],
      });
   }
});
