    <?php
      /*
      * Template Name: Keentegro | page-home
      * Template Post Type: page
      */
    ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
		<?php wp_head(); ?>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
		<title><?php the_title(); ?></title>
  </head>
  <body class="home">

		<?php get_header(); ?>

    <section class="banner text-w bg">
      <img src="<?= B_IMG_DIR; ?>/home_banner.png" alt="home_banner" />
      <div class="wrapper">
        <h3>Precision engineering and construction</h3>
        <div>
          <span>
            <span class="active">Идея</span>
            <span>Решение</span>
            <span>Результат</span>
          </span>
        </div>
      </div>
      <a href="#services" class="next">
        Посмотреть наши услуги
        <i class="fas fa-chevron-down"></i>
        <i class="fas fa-chevron-down"></i>
      </a>
    </section>

    <section id="services" class="services text-b bg-w">
      <div class="wrapper">
        <h3>
          <span> Наши услуги </span>
          <a href="#"> Смотреть все услуги </a>
        </h3>
        <div class="cards">
          <div class="card bg text-w">
            <a href="#">
              <img src="<?= B_IMG_DIR; ?>/home_services_1.png" alt="" />
            </a>
            <h4 class="title">Строительно-монтажные работы</h4>
            <div class="links">
              <a href="#">Консультация</a>
              <a href="#">Все услуги</a>
            </div>
          </div>

          <div class="card bg text-w">
            <a href="#">
              <img src="<?= B_IMG_DIR; ?>/home_services_2.png" alt="" />
            </a>
            <h4 class="title">Монтаж инженерных систем</h4>
            <div class="links">
              <a href="#">Консультация</a>
              <a href="#">Все услуги</a>
            </div>
          </div>

          <div class="card bg text-w">
            <a href="#">
              <img src="<?= B_IMG_DIR; ?>/home_services_3.png" alt="" />
            </a>
            <h4 class="title">Интегрированные системы безопасности</h4>
            <div class="links">
              <a href="#">Консультация</a>
              <a href="#">Все услуги</a>
            </div>
          </div>
        </div>

        <a href="#" class="watch_all_mobile"> Смотреть все услуги </a>
      </div>
    </section>

    <section
      class="facts bg text-w"
      style="background-image: url(<?= B_IMG_DIR; ?>/home_facts_bg.png)"
    >
      <div class="wrapper">
        <h3>
          <span> Факты о нас </span>
        </h3>
        <div class="cards slick_mb">
          <div class="slide">
            <div class="card">
              <div class="figure_2"></div>
              <img src="<?= B_IMG_DIR; ?>/home_facts_1.png" alt="" />
              <p>
                Занимаем лидирующую позицию среди 100 крупнейших предприятий
                Украины
              </p>
            </div>
            <div class="card">
              <div class="figure_2"></div>
              <img src="<?= B_IMG_DIR; ?>/home_facts_2.png" alt="" />
              <p>
                Создали команду уникальных специалистов и достигли признания
                международных партнеров, в том числе и правительственных
                учреждений
              </p>
            </div>
          </div>

          <div class="slide">
            <div class="card">
              <div class="figure_2"></div>
              <img src="<?= B_IMG_DIR; ?>/home_facts_3.png" alt="" />
              <p>
                Нашими надежными партнерами являются лидирующие мировые
                компании-поставщики
              </p>
            </div>
            <div class="card">
              <div class="figure_2"></div>
              <img src="<?= B_IMG_DIR; ?>/home_facts_4.png" alt="" />
              <p>Более 11 лет на рынке</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="folio text-b bg-w">
      <div class="wrapper">
        <h3>
          <span> Наши работы </span>
          <a href="#"> Смотреть все работы </a>
        </h3>
        <div class="cards slick_lg">
          <a href="#" class="card">
            <div
              class="bg"
              style="background-image: url(<?= B_IMG_DIR; ?>/home_folio_1.png)"
            >
              <div class="figure_3"></div>
            </div>
            <h4 class="title">Пост охраны ОБСЕ</h4>
            <span class="date"> 28 октября 2020 </span>
          </a>
          <a href="#" class="card">
            <div
              class="bg"
              style="background-image: url(<?= B_IMG_DIR; ?>/home_folio_2.png)"
            >
              <div class="figure_3"></div>
            </div>
            <h4 class="title">Пост охраны ОБСЕ</h4>
            <span class="date"> 28 октября 2020 </span>
          </a>
          <a href="#" class="card">
            <div
              class="bg"
              style="background-image: url(<?= B_IMG_DIR; ?>/home_folio_3.png)"
            >
              <div class="figure_3"></div>
            </div>
            <h4 class="title">Пост охраны ОБСЕ</h4>
            <span class="date"> 28 октября 2020 </span>
          </a>
        </div>

        <a href="#" class="watch_all_mobile"> Смотреть все работы </a>
      </div>
    </section>

    <section
      class="reviews bg text-w"
      style="background-image: url(<?= B_IMG_DIR; ?>/home_reviews_bg.png)"
    >
      <div class="wrapper">
        <h3>
          <span> Нас рекомендуют </span>
          <a href="#"> Смотреть все отзывы </a>
        </h3>
        <div class="cards slick_lg">
          <div class="card">
            <div class="figure_4"></div>
            <span class="date">20 декабря 2020</span>
            <span class="name">Андрей Осадчий, компания URS</span>
            <p>
              Мы сотрудничаем с Keentegro уже 3 года, и всегда довольны
              результатом. Задачи всегда выполняются в срок, а качество на
              высшем уровне. Занимались реставрацией таможенной площади в
              Одессе. Рекомендуем всем!
            </p>
          </div>
          <div class="card">
            <div class="figure_4"></div>
            <span class="date">20 декабря 2020</span>
            <span class="name">Андрей Осадчий, компания URS</span>
            <p>
              Мы сотрудничаем с Keentegro уже 3 года, и всегда довольны
              результатом. Задачи всегда выполняются в срок, а качество на
              высшем уровне. Занимались реставрацией таможенной площади в
              Одессе. Рекомендуем всем!
            </p>
          </div>
        </div>

        <a href="#" class="watch_all_mobile"> Смотреть все отзывы </a>
      </div>
    </section>

    <section class="blog bg-w">
      <div class="wrapper">
        <h3>
          <span> Полезная информация </span>
          <a href="#"> Читать все статьи </a>
        </h3>
        <div class="cards slick_mb">
          <a href="#" class="card">
            <div
              class="bg"
              style="background-image: url(<?= B_IMG_DIR; ?>/home_blog_1.png)"
            >
              <div class="figure_3"></div>
            </div>
            <h4 class="title">
              3 важных шага перед постройкой дома
              <i class="fas fa-chevron-right"></i>
            </h4>
            <span class="date"> 28 октября 2020 </span>
          </a>
          <a href="#" class="card">
            <div
              class="bg"
              style="background-image: url(<?= B_IMG_DIR; ?>/home_blog_2.png)"
            >
              <div class="figure_3"></div>
            </div>
            <h4 class="title">
              Оптоволоконные технологии, 10 важных фактов
              <i class="fas fa-chevron-right"></i>
            </h4>
            <span class="date"> 28 октября 2020 </span>
          </a>
          <a href="#" class="card">
            <div
              class="bg"
              style="background-image: url(<?= B_IMG_DIR; ?>/home_blog_3.png)"
            >
              <div class="figure_3"></div>
            </div>
            <h4 class="title">
              Интегрированные системы безопасности
              <i class="fas fa-chevron-right"></i>
            </h4>
            <span class="date"> 28 октября 2020 </span>
          </a>
        </div>

        <a href="#" class="watch_all_mobile"> Читать все статьи </a>
      </div>
    </section>

    <?php wp_footer(); ?>
    <?php get_footer(); ?>

    <script>
      document.addEventListener("DOMContentLoaded", () => {
        $("section.folio .slick_lg")
          .not(".slick-initialized")
          .slick({
            arrows: true,
            draggable: true,
            focusOnSelect: false,
            infinite: false,
            autoplay: false,
            dots: false,
            variableWidth: true,
            vertical: false,
            verticalSwiping: false,
            slidesToShow: 2,
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
                breakpoint: 1024,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  arrows: true,
                  draggable: true,
                  touchThreshold: 300,
                },
              },
              {
                breakpoint: 768,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  arrows: false,
                  draggable: true,
                  touchThreshold: 300,
                },
              },
            ],
          });

        $("section.reviews .slick_lg")
          .not(".slick-initialized")
          .slick({
            arrows: true,
            draggable: true,
            focusOnSelect: false,
            infinite: false,
            autoplay: false,
            dots: false,
            variableWidth: true,
            vertical: false,
            verticalSwiping: false,
            slidesToShow: 1,
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
                breakpoint: 768,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  arrows: false,
                  draggable: true,
                  touchThreshold: 300,
                },
              },
            ],
          });

        // Adaptive slick
        if (window.innerWidth <= 768) {

          $("section.facts .slick_mb")
            .not(".slick-initialized")
            .slick({
              arrows: false,
              draggable: true,
              touchThreshold: 300,
              focusOnSelect: false,
              infinite: false,
              autoplay: false,
              dots: false,
              variableWidth: true,
              vertical: false,
              verticalSwiping: false,
              slidesToShow: 1,
              slidesToScroll: 1,
          });

          $("section.blog .slick_mb")
            .not(".slick-initialized")
            .slick({
              arrows: false,
              draggable: true,
              touchThreshold: 300,
              focusOnSelect: false,
              infinite: false,
              autoplay: false,
              dots: false,
              variableWidth: true,
              vertical: false,
              verticalSwiping: false,
              slidesToShow: 1,
              slidesToScroll: 1,
          });
        }
      });
    </script>
  </body>
</html>
