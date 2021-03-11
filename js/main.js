
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
  (function () {
    wow = new WOW({
      boxClass: "wow",
      animateClass: "animated",
      offset: -100,
      mobile: true,
      live: true,
    });
    wow.init();

    // Change duration to all the elements
    const wows = document.querySelectorAll(".wow");

    if (wows.length) {
      for (let i = 0; i < wows.length; i++) {

        wows[i].setAttribute("data-wow-duration", "0.5s");

      }
    }
  })();
});

window.addEventListener("load", () => {

});