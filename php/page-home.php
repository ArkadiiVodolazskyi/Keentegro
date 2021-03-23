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
      <img src="<?= get_field('banner')['img']; ?>" alt="home_banner" />
      <div class="wrapper">
        <h3>
          <?= get_field('banner')['slogan']; ?>
        </h3>
        <div>
          <span>
            <span class="active"><?= get_field('banner')['principles']['word_1']; ?></span>
            <span><?= get_field('banner')['principles']['word_2']; ?></span>
            <span><?= get_field('banner')['principles']['word_3']; ?></span>
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
          <a href="<?= home_url(); ?>/service">Смотреть все услуги </a>
        </h3>
        <div class="cards">

          <?php
            $terms = get_terms( [
              'taxonomy' => 'service_type',
              'hide_empty' => false,
            ] );

            foreach( $terms as $term ) {
              setup_postdata($post);

              $url = get_home_url() . '/service/' . $term->slug;
              $img = get_field('cat_image', $term);
              $post_title = $term->name;
          ?>

            <div class="card bg text-w">
              <a href="<?= $url; ?>">
                <img src="<?= $img; ?>" alt="taxonomy_thumbnail">
              </a>
              <h4 class="title">
                <?= $post_title; ?>
              </h4>
              <div class="links">
                <button class="openConsult">Консультация</button>
                <a href="<?= $url; ?>">Все услуги</a>
              </div>
            </div>

          <?php } ?>

        </div>

        <a href="<?= home_url(); ?>/service" class="watch_all_mobile"> Смотреть все услуги </a>
      </div>
    </section>

    <?php
			$facts = get_field('facts', 'options');
			if ( !empty($facts) ) {
		?>
      <section
        class="facts bg text-w"
        style="background-image: url(<?= B_IMG_DIR; ?>/home_facts_bg.png)">
        <div class="wrapper">
          <h3>
            <span>Факты о нас</span>
          </h3>
          <div class="cards slick_mb">

            <?php
              $slidesCount = ceil(count($facts) / 2);
              for ($i = 0; $i < $slidesCount ; $i++) {
            ?>
              <div class="slide">

                <?php
                  for ($j = $i * 2; $j < $i * 2 + 2 ; $j++) {
                    $icon = $facts[$j]['icon'];
                    $text = $facts[$j]['text'];
                ?>

                  <div class="card">
                    <div class="figure_2"></div>
                    <img src="<?= $icon; ?>" alt="facts_icon" />
                    <p>
                      <?= $text; ?>
                    </p>
                  </div>

                <?php } ?>

              </div>
            <?php } ?>

          </div>
        </div>
      </section>
    <?php } ?>

    <section class="folio text-b bg-w">
      <div class="wrapper">
        <h3>
          <span> Наши работы </span>
          <a href="<?= home_url(); ?>/folio"> Смотреть все работы </a>
        </h3>
        <div class="cards slick_lg">

          <?php
            // Show 3 other posts from folio, except current
            $posts = get_posts( [
              'post_type' => 'folio',
              'numberposts' => 3,

            ] );

            foreach( $posts as $post ) {
              setup_postdata($post);

              $url = get_permalink();
              $img = get_field('gallery')[0];
              $date = get_the_date('j F Y', $post->id);
              $post_title = $post->post_title;
          ?>

            <a href="<?= $url; ?>" class="card">
              <div class="bg" style="background-image: url(<?= $img ?>);">
                <div class="figure_3"></div>
              </div>
              <h4 class="title">
                <?= $post_title; ?>
              </h4>
              <span class="date">
                <?= $date; ?>
              </span>
            </a>

          <?php }; wp_reset_postdata(); ?>

        </div>

        <a href="<?= home_url(); ?>/folio" class="watch_all_mobile"> Смотреть все работы </a>
      </div>
    </section>

    <section
      class="reviews bg text-w"
      style="background-image: url(<?= B_IMG_DIR; ?>/home_reviews_bg.png)">
      <div class="wrapper">
        <h3>
          <span> Нас рекомендуют </span>
          <a href="<?= home_url(); ?>/review"> Смотреть все отзывы </a>
        </h3>
        <div class="cards slick_lg">

          <?php
              // Show 4 other posts from folio, except current
              $posts = get_posts( [
                'post_type' => 'review',
                'numberposts' => 4,
              ] );

              foreach( $posts as $post ) {
                setup_postdata($post);

                $date = get_the_date('j F Y', $post->id);
                $name = get_field('name');
                $company = get_field('company');
                $text = get_field('text');
            ?>

            <div class="card">
              <div class="figure_4"></div>
              <span class="date">
                <?= $date; ?>
              </span>
              <span class="name">
                <?= $name; ?>, компания <?= $company; ?>
              </span>
              <p>
                <?= $text; ?>
              </p>
            </div>

          <?php }; wp_reset_postdata(); ?>

        </div>

        <a href="#" class="watch_all_mobile"> Смотреть все отзывы </a>
      </div>
    </section>

    <section class="blog bg-w">
      <div class="wrapper">
        <h3>
          <span> Полезная информация </span>
          <a href="<?= home_url(); ?>/blog"> Читать все статьи </a>
        </h3>
        <div class="cards slick_mb">

          <?php
            // Show 3 other posts from blog
            $posts = get_posts( [
              'post_type' => 'blog',
              'numberposts' => 3,
            ] );

            foreach( $posts as $key=>$post ) {
              setup_postdata($post);

              $url = get_permalink();
              $img = get_field('banner');
              $date = get_the_date('j F Y', $post->id);
              $post_title = $post->post_title;
          ?>

            <a href="<?= $url; ?>" class="card">
              <div class="bg" style="background-image: url(<?= $img ?>);">
                <div class="figure_3"></div>
              </div>
              <h4 class="title">
                <?= $post_title; ?>
                <i class="fas fa-chevron-right"></i>
              </h4>
              <span class="date">
                <?= $date; ?>
              </span>
            </a>

          <?php }; wp_reset_postdata(); ?>

        </div>

        <a href="<?= home_url(); ?>/blog" class="watch_all_mobile"> Читать все статьи </a>
      </div>
    </section>

    <?php get_footer(); ?>
    <?php wp_footer(); ?>

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
