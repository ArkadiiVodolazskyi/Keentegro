
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
      offset: 0,
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

  // Fix masked input cursor
  $.fn.setCursorPosition = function(pos) {
    if ($(this).get(0).setSelectionRange) {
      $(this).get(0).setSelectionRange(pos, pos);
    } else if ($(this).get(0).createTextRange) {
      var range = $(this).get(0).createTextRange();
      range.collapse(true);
      range.moveEnd('character', pos);
      range.moveStart('character', pos);
      range.select();
    }
  };

});

window.addEventListener("load", () => {

  // Global variables
  const body = document.body;
  let YOffset = null;

  // Fixed header
  (function() {
    const header = document.querySelector('header:not(.mobile):not(.desktop)');

    if (header) {

      // On load
      if (pageYOffset > 150) {
        header.classList.add('fixed');
      } else {
        header.classList.remove('fixed');
      }

      // On scroll
      window.addEventListener('scroll', () => {
        if (pageYOffset > 150) {
          header.classList.add('fixed');
        } else {
          header.classList.remove('fixed');
        }
      });

    }
  })();

  // Expand footer menus on 768px-
  if (window.innerWidth <= 768) {
    (function() {
      const fuls = [...document.querySelectorAll('footer nav > div:not(:last-child)')];
      const fexpands = [...document.querySelectorAll('footer nav > div:not(:last-child) > h3')];

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

          // Disable scroll
          YOffset = window.pageYOffset;
          iWidth = window.innerWidth;
          body.classList.add("discroll");
          body.style.top = `${-YOffset}px`;
          console.log(YOffset);
          body.style.width = `${window.innerWidth}px`;
        });
      }

      closeConsult.addEventListener('click', () => {

        // Animate on close
        closeConsult.classList.add("closing");
        setTimeout(() => {
          consult.classList.remove('active');
          closeConsult.classList.remove("closing");
        }, 200);

        // Enable scroll
        body.classList.remove("discroll");
        body.style.top = "unset";
        window.scrollTo(0, YOffset);
        body.style.width = `100%`;
      });
      consult.addEventListener('click', (e) => {
        if (e.target == consult) {
          consult.classList.remove('active');

          // Enable scroll
          body.classList.remove("discroll");
          body.style.top = "unset";
          window.scrollTo(0, YOffset);
          body.style.width = `100%`;
        }
      });

    }
  })();

  // Open/close header hamburger
  (function() {
    const overlay = document.querySelector('#overlay');

    const headerDesk = document.querySelector('header.desktop');

    const headerMob = document.querySelector('header.mobile');
    const openHeaderMob = document.querySelector('header .hamburger');
    const closeHeaderMob = document.querySelectorAll('header .closeHamb');

    if (headerMob && headerDesk && overlay && openHeaderMob && closeHeaderMob) {

      // Open mobile Menu
      openHeaderMob.addEventListener('click', () => {
        overlay.classList.add('active');

        if (window.innerWidth <= 768) {
          headerMob.classList.add('active');
        } else {
          headerDesk.classList.add('active');
        }

        // Disable scroll
        YOffset = window.pageYOffset;
        iWidth = window.innerWidth;
        body.classList.add("discroll");
        body.style.top = `${-YOffset}px`;
        body.style.width = `${window.innerWidth}px`;
      });

      // Close hamb menus
      for (let i = 0; i < closeHeaderMob.length; i++) {
        closeHeaderMob[i].addEventListener('click', () => {

          // Animate on close
          closeHeaderMob[i].classList.add("closing");
          setTimeout(() => {
            headerMob.classList.remove('active');
            headerDesk.classList.remove('active');
            overlay.classList.remove('active');
            closeHeaderMob[i].classList.remove("closing");

            // Enable scroll
            body.classList.remove("discroll");
          }, 200);

          // Enable scroll
          body.style.top = "unset";
          window.scrollTo(0, YOffset);
          body.style.width = `100%`;
        });
      }

      overlay.addEventListener('click', () => {
        headerMob.classList.remove('active');
        headerDesk.classList.remove('active');
        overlay.classList.remove('active');
        body.classList.remove('discroll');

        // Enable scroll
        body.classList.remove("discroll");
        body.style.top = "unset";
        window.scrollTo(0, YOffset);
        body.style.width = `100%`;
      });

    }
  })();

  // Mobile header submenus
  (function() {
    const mobTape = document.querySelector('header.mobile .down .wrapper');
    const mainLinks = [...document.querySelectorAll('header.mobile .down .mainMenu .mainLinks li[data-parentindex]')];
    const subMenus = [...document.querySelectorAll('header.mobile .down .subMenus ul[data-childindex]')];
    const subMenusTitles = [...document.querySelectorAll('header.mobile .down .subMenus ul[data-childindex] .title')];

    if (mobTape && mainLinks.length && subMenus.length && subMenusTitles.length) {

      for (let i = 0; i < mainLinks.length; i++) {
        mainLinks[i].addEventListener('click', () => {
          subMenus[i].classList.add('active');
          mobTape.classList.add('showSublinks');
        });
      }

      for (let i = 0; i < subMenusTitles.length; i++) {
        subMenusTitles[i].addEventListener('click', () => {
          mobTape.classList.remove('showSublinks');
          for (let j = 0; j < subMenus.length; j++) {
            subMenus[j].classList.remove('active');
          }
        });
      }

    }
  })();

  // Background logo animation
  if (window.innerWidth > 768) {
    (function() {
      // Init
      var container = body,
          inner = document.querySelector(".logo_bg");

      // Mouse
      var mouse = {
        _x: 0,
        _y: 0,
        x: 0,
        y: 0,
        updatePosition: function(event) {
          var e = event || window.event;
          this.x = e.clientX - this._x;
          this.y = (e.clientY - this._y) * -1;
        },
        setOrigin: function(e) {
          this._x = e.offsetLeft + Math.floor(e.offsetWidth / 2);
          this._y = e.offsetTop + Math.floor(e.offsetHeight / 2);
        },
        show: function() {
          return "(" + this.x + ", " + this.y + ")";
        }
      };

      // Track the mouse position relative to the center of the container.
      mouse.setOrigin(container);

      //----------------------------------------------------

      var counter = 0;
      var refreshRate = 10;
      var isTimeToUpdate = function() {
        return counter++ % refreshRate === 0;
      };

      //----------------------------------------------------

      var onMouseEnterHandler = function(event) {
        update(event);
      };

      var onMouseLeaveHandler = function() {
        inner.style = "";
      };

      var onMouseMoveHandler = function(event) {
        if (isTimeToUpdate()) {
          update(event);
        }
      };

      //----------------------------------------------------

      var update = function(event) {
        mouse.updatePosition(event);
        updateTransformStyle(
          (mouse.y / inner.offsetHeight / 2).toFixed(2),
          (mouse.x / inner.offsetWidth / 2).toFixed(2)
        );
      };

      var updateTransformStyle = function(x, y) {
        // var style = "rotateX(" + x*40 + "deg) rotateY(" + y*40 + "deg)";
        var style = "translateX(" + x*50 + "px) translateY(" + y*50 + "px)";
        inner.style.transform = style;
        inner.style.webkitTransform = style;
        inner.style.mozTranform = style;
        inner.style.msTransform = style;
        inner.style.oTransform = style;
      };

      //--------------------------------------------------------

      container.onmousemove = onMouseMoveHandler;
      container.onmouseleave = onMouseLeaveHandler;
      container.onmouseenter = onMouseEnterHandler;
    })();
  }

  // Figures animation mouseover/mouseout
  (function() {
    const cards = document.querySelectorAll('.card');

    if (cards.length) {

      for (let i = 0; i < cards.length; i++) {

        const figure = cards[i].querySelector('.figure_1, .figure_2, .figure_3, .figure_4, .figure_5');

        if (figure) {
          cards[i].addEventListener('mouseover', (e) => {
            e.stopPropagation();
            if (e.target == figure) {
              figure.style.pointerEvents = 'none';
              figure.classList.add('over');
              setTimeout(() => {
                figure.classList.remove('over');
                figure.style.pointerEvents = 'auto';
              }, 2000);
            }
          }, true);
        }

      }

    }
  })();

});