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
  <body>
		<?php get_header(); ?>

		<div style="padding-top: 85px; background-color: #181f29"></div>

		<div style = "padding: 230px 0; background-color: #f1f2f3;">

			<h2 style = "text-align: center; font-size: 48px; font-weight: bold; color: #181f29">
				Здесь будет страница для single-review.php.
			</h2>

		</div>

		<?php get_footer(); ?>
		<?php wp_footer(); ?>
	</body>
</html>