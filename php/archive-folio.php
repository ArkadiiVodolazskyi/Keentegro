	<?php
		/*
		* Template Name: Keentegro | archive-folio
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
		<title>Проекты</title>
  </head>
  <body>

	<?php get_header(); ?>

	<section class="folio archive_folio text-b">
		<div class="wrapper">
			<h3>
				<span>
					Проекты
				</span>
			</h3>
			<div class="cards">

				<a href="#" class="card">
					<div class="bg" style="background-image: url(<?= B_IMG_DIR; ?>/home_folio_1.png);">
						<div class="figure_3"></div>
					</div>
					<h4 class="title">
						Пост охраны ОБСЕ
					</h4>
					<span class="date">
						28 октября 2020
					</span>
				</a>
				<a href="#" class="card">
					<div class="bg" style="background-image: url(<?= B_IMG_DIR; ?>/home_folio_2.png);">
						<div class="figure_3"></div>
					</div>
					<h4 class="title">
						Пост охраны ОБСЕ
					</h4>
					<span class="date">
						28 октября 2020
					</span>
				</a>
				<a href="#" class="card">
					<div class="bg" style="background-image: url(<?= B_IMG_DIR; ?>/home_folio_3.png);">
						<div class="figure_3"></div>
					</div>
					<h4 class="title">
						Пост охраны ОБСЕ
					</h4>
					<span class="date">
						28 октября 2020
					</span>
				</a>
				<a href="#" class="card">
					<div class="bg" style="background-image: url(<?= B_IMG_DIR; ?>/home_folio_1.png);">
						<div class="figure_3"></div>
					</div>
					<h4 class="title">
						Пост охраны ОБСЕ
					</h4>
					<span class="date">
						28 октября 2020
					</span>
				</a>
				<a href="#" class="card">
					<div class="bg" style="background-image: url(<?= B_IMG_DIR; ?>/home_folio_2.png);">
						<div class="figure_3"></div>
					</div>
					<h4 class="title">
						Пост охраны ОБСЕ
					</h4>
					<span class="date">
						28 октября 2020
					</span>
				</a>
				<a href="#" class="card">
					<div class="bg" style="background-image: url(<?= B_IMG_DIR; ?>/home_folio_3.png);">
						<div class="figure_3"></div>
					</div>
					<h4 class="title">
						Пост охраны ОБСЕ
					</h4>
					<span class="date">
						28 октября 2020
					</span>
				</a>

			</div>
		</div>
	</section>

	<?php wp_footer(); ?>
	<?php get_footer(); ?>
</body>
</html>