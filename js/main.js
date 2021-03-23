
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


});

window.addEventListener("load", () => {

  if (window.innerWidth <= 768) {
    // Expand footer menus on 768px-
    (function() {
      const fuls = [...document.querySelectorAll('footer nav > div:not(:last-child)')];
      const fexpands = [...document.querySelectorAll('footer nav > div:not(:last-child) > h3 > .expand')];

      if (fuls.length && fexpands.length) {

        for (let i = 0; i < fexpands.length; i++) {

          fexpands[i].addEventListener('click', () => {
            if (fuls[i].classList.contains('expanded')) {
              fuls[i].classList.remove('expanded');
            } else {
              for (let j = 0; j < fuls.length; j++) {
                fuls[j].classList.remove('expanded');
              }
              fuls[i].classList.add('expanded');
            }

          });

        }

      }
    })();
  }

  // Disallow search indexes
  const nofollow = document.querySelector('meta[name="robots"]');
  if (nofollow) {
    nofollow.setAttribute("content", "noindex, nofollow");
  } else {
    document.querySelector('head').innerHTML += `<meta name="robots" content="noindex, nofollow" />`;
  }

  // Open/close openConsults
  (function() {
    const openConsults = document.querySelectorAll('.openConsult');
    const consult = document.querySelector('.modalConsult');
    const closeConsult = document.querySelector('#closeConsult');

    if (openConsults.length && consult && closeConsult) {

      for (let i = 0; i < openConsults.length; i++) {
        openConsults[i].addEventListener('click', () => {
          consult.classList.add('active');
        });
      }

      closeConsult.addEventListener('click', () => {
        consult.classList.remove('active');
      });
      consult.addEventListener('click', (e) => {
        if (e.target == consult) {
          consult.classList.remove('active');
        }
      });

    }
  })();

});