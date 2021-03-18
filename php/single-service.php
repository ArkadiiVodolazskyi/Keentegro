	<?php
		/*
		* Template Name: Keentegro | single-service
		* Template Post Type: post, service
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

	<section class="post text-b">
		<div class="wrapper">
			<h3>
				<span>
					Монтаж технологического оборудования
				</span>
			</h3>

			<div class="thumbnail">
				<img src="<?= B_IMG_DIR; ?>/blog_bg.png" alt="thumbnail">
			</div>

			<div class="content">
				<p class="accent">
					Японская автомобилестроительная компания Toyota начала строительство прототипа «умного города» у подножья горы Фудзи в центральной Японии.
				</p>

				<p>
					Компания планирует разработать систему, которая объединит автомобили, инфраструктуру и жилища с помощью новейших систем связи. Футуристический город, получивший название Woven City, будет возведен на участке площадью 700 тыс. кв м, где когда-то располагалось предприятие компании. В городе будет три типа улиц: для полностью автономных автомобилей, для пешеходов и для людей, пользующихся индивидуальными средствами передвижения.
				</p>

				<div class="list_block">
					<h6>
						Первоначально в новом городе будет жить около 360 человек, в том числе разработчики и пожилые люди. Ожидается, что этот город будет способствовать появлению полезных для общества инноваций.
					</h6>
					<ul>
						<li>
							Данные о состоянии здоровья жителей, записанные с помощью датчиков
						</li>
						<li>
							Будут изучаться с помощью технологий искусственного интеллекта
						</li>
						<li>
							Роботы будут помогать жителям в повседневной жизни
						</li>
					</ul>
				</div>

				<p>
					Компания планирует разработать систему, которая объединит автомобили, инфраструктуру и жилища с помощью новейших систем связи. Футуристический город, получивший название Woven City, будет возведен на участке площадью 700 тыс. кв м, где когда-то располагалось предприятие компании. В городе будет три типа улиц: для полностью автономных автомобилей, для пешеходов и для людей, пользующихся индивидуальными средствами передвижения.
				</p>
			</div>
		</div>
	</section>

	<section class="consult bg text-w" style="background-image: url(<?= B_IMG_DIR; ?>/home_reviews_bg.png);">
		<div class="wrapper">

			<div class="left">
				<h4>
					Получите консультацию
				</h4>
				<p>
					Заполните короткую форму, и наш специалист свяжется с вами в ближайшее время, чтобы ответить на все вопросы, и помочь принять решение
				</p>
			</div>

			<div class="right">
				<form action="">
					Waiting for WP Forms
				</form>
			</div>

		</div>
	</section>

	<?php wp_footer(); ?>
	<?php get_footer(); ?>

</body>
</html>