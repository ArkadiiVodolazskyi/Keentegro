	<?php
		/*
		* Template Name: Keentegro | taxonomy-service
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
  <body>

	<?php get_header(); ?>

	<section class="service_banner bg text-w" style="background-image: url(<?= B_IMG_DIR; ?>/blog_bg.png);">
		<div class="wrapper">
			<h2>
				Строительно-монтажные работы
			</h2>
		</div>
	</section>

	<section class="services archive_services text-b">
		<div class="wrapper">

			<p>
				Компания планирует разработать систему, которая объединит автомобили, инфраструктуру и жилища с помощью новейших систем связи. Футуристический город, получивший название Woven City, будет возведен на участке площадью 700 тыс. кв м, где когда-то располагалось предприятие компании. В городе будет три типа улиц: для полностью автономных автомобилей, для пешеходов и для людей, пользующихся индивидуальными средствами передвижения.
			</p>

			<div class="cards">

				<div class="card bg text-w">
					<a href="#">
						<img src="<?= B_IMG_DIR; ?>/home_services_1.png" alt="">
					</a>
					<h4 class="title">
						Строительно-монтажные работы
					</h4>
					<div class="links">
						<a href="#">Подробнее</a>
					</div>
				</div>

				<div class="card bg text-w">
					<a href="#">
						<img src="<?= B_IMG_DIR; ?>/home_services_2.png" alt="">
					</a>
					<h4 class="title">
						Монтаж инженерных систем
					</h4>
					<div class="links">
						<a href="#">Подробнее</a>
					</div>
				</div>

				<div class="card bg text-w">
					<a href="#">
						<img src="<?= B_IMG_DIR; ?>/home_services_3.png" alt="">
					</a>
					<h4 class="title">
						Интегрированные системы безопасностиs
					</h4>
					<div class="links">
						<a href="#">Подробнее</a>
					</div>
				</div>

				<div class="card bg text-w">
					<a href="#">
						<img src="<?= B_IMG_DIR; ?>/home_services_1.png" alt="">
					</a>
					<h4 class="title">
						Строительно-монтажные работы
					</h4>
					<div class="links">
						<a href="#">Подробнее</a>
					</div>
				</div>

				<div class="card bg text-w">
					<a href="#">
						<img src="<?= B_IMG_DIR; ?>/home_services_2.png" alt="">
					</a>
					<h4 class="title">
						Монтаж инженерных систем
					</h4>
					<div class="links">
						<a href="#">Подробнее</a>
					</div>
				</div>

				<div class="card bg text-w">
					<a href="#">
						<img src="<?= B_IMG_DIR; ?>/home_services_3.png" alt="">
					</a>
					<h4 class="title">
						Интегрированные системы безопасностиs
					</h4>
					<div class="links">
						<a href="#">Подробнее</a>
					</div>
				</div>

			</div>
		</div>
	</section>

	<?php wp_footer(); ?>
	<?php get_footer(); ?>

</body>
</html>