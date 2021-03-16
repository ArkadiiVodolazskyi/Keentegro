
document.addEventListener("DOMContentLoaded", () => {
  // Use .img-svg on image to remove it with svg version
  (function () {
    $("img.img-svg").each(function () {
      var $img = $(this);
      var imgClass = $img.attr("class");
      var imgURL = $img.attr("src");
      $.get(
        imgURL,
        function (data) {
          var $svg = $(data).find("svg");
          if (typeof imgClass !== "undefined") {
            $svg = $svg.attr("class", imgClass + " replaced-svg");
          }
          $svg = $svg.removeAttr("xmlns:a");
          if (
            !$svg.attr("viewBox") &&
            $svg.attr("height") &&
            $svg.attr("width")
          ) {
            $svg.attr(
              "viewBox",
              "0 0 " + $svg.attr("height") + " " + $svg.attr("width"),
            );
          }
          $img.replaceWith($svg);
        },
        "xml",
      );
    });
  })();

  // Initialize wow.js
  // (function () {
  //   wow = new WOW({
  //     boxClass: "wow",
  //     animateClass: "animated",
  //     offset: -100,
  //     mobile: true,
  //     live: true,
  //   });
  //   wow.init();

  //   // Change duration to all the elements
  //   const wows = document.querySelectorAll(".wow");

  //   if (wows.length) {
  //     for (let i = 0; i < wows.length; i++) {

  //       wows[i].setAttribute("data-wow-duration", "0.5s");

  //     }
  //   }
  // })();

  // Footer clients slick_lg
  $("footer .clients .slick_lg").not('.slick-initialized').slick({
    arrows: true,
    draggable: true,
    focusOnSelect: false,
    infinite: false,
    autoplay: false,
    dots: false,
    variableWidth: true,
    vertical: false,
    verticalSwiping: false,
    slidesToShow: 6,
    slidesToScroll: 1,
    prevArrow: `
      <button type="button">
        <i class="fas fa-chevron-left"></i>
      </button>
    `,
    nextArrow: `
      <button type="button">
        <i class="fas fa-chevron-right"></i>
      </button>
    `,
    responsive: [
      {
        breakpoint: 1280,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          arrows: true,
          draggable: true,
          touchThreshold: 300,
        }
      },
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          arrows: true,
          draggable: true,
          touchThreshold: 300,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          arrows: false,
          draggable: true,
          touchThreshold: 300,
        }
      },
    ]
  });
});

window.addEventListener("load", () => {

});