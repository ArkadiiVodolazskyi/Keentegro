
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
		<?php wp_head(); ?>
		<title><?php the_title(); ?></title>
  </head>
  <body>
		<?php get_header(); ?>

    <section class="blog archive_blog text-b">
      <div class="wrapper">
        <h3>
          <span class="wow fadeLeft">
            Страница не найдена
          </span>
        </h3>
      </div>
    </section>

    <?php get_footer(); ?>
    <?php wp_footer(); ?>
  </body>
</html>
