	<?php
		/*
		* Template Name: Keentegro | page-about
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

	<section class="banner about_banner text-w bg">
		<img src="<?= B_IMG_DIR; ?>/home_banner.png" alt="home_banner">
		<div class="wrapper">
			<h3>Precision engineering and construction</h3>
			<div>
				<span class="slick_mb">
					<span class="active">Идея</span>
					<span>Решение</span>
					<span>Результат</span>
				</span>
			</div>
		</div>
	</section>

	<section class="history text-w">
		<div class="wrapper">
			<h2>
				История компании
			</h2>

			<p class="accent">
				Японская автомобилестроительная компания Toyota начала строительство прототипа «умного города» у подножья горы Фудзи в центральной Японии.
			</p>

			<p>
				Компания планирует разработать систему, которая объединит автомобили, инфраструктуру и жилища с помощью новейших систем связи. Футуристический город, получивший название Woven City, будет возведен на участке площадью 700 тыс. кв м, где когда-то располагалось предприятие компании. В городе будет три типа улиц: для полностью автономных автомобилей, для пешеходов и для людей, пользующихся индивидуальными средствами передвижения.
			</p>
		</div>
	</section>

	<section class="facts mission bg text-w" style="background-image: url(<?= B_IMG_DIR; ?>/home_reviews_bg.png);">
		<div class="wrapper">

			<div class="left">
				<h3>
					Достижения
				</h3>
				<div class="cards slick_mb">

					<div class="card">
						<div class="figure_2"></div>
						<img src="<?= B_IMG_DIR; ?>/home_facts_1.png" alt="">
						<p>
							Занимаем лидирующую позицию среди 100 крупнейших предприятий Украины в течение 11 лет
						</p>
					</div>
					<div class="card">
						<div class="figure_2"></div>
						<img src="<?= B_IMG_DIR; ?>/home_facts_2.png" alt="">
						<p>
							Создали команду уникальных специалистов и достигли признания международных партнеров, в том числе и правительственных учреждений
						</p>
					</div>
					<div class="card">
						<div class="figure_2"></div>
						<img src="<?= B_IMG_DIR; ?>/home_facts_3.png" alt="">
						<p>
							Нашими надежными партнерами являются лидирующие мировые компании-поставщики
						</p>
					</div>

				</div>
			</div>

			<div class="right">
				<h3>
					Миссия
				</h3>
				<p>
					Компания планирует разработать систему, которая объединит автомобили, инфраструктуру и жилища с помощью новейших систем связи. Футуристический город, получивший название Woven City, будет возведен на участке площадью 700 тыс. кв м, где когда-то располагалось предприятие компании. В городе будет три типа улиц: для полностью автономных автомобилей, для пешеходов и для людей, пользующихся индивидуальными средствами передвижения.
				</p>
			</div>

		</div>
	</section>

	<section class="history text-w">
		<div class="wrapper">

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
	</section>

	<?php wp_footer(); ?>
	<?php get_footer(); ?>

	<script>
		document.addEventListener("DOMContentLoaded", () => {

			$("section.folio .slick_lg").not('.slick-initialized').slick({
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
			});

			$("section.reviews .slick_lg").not('.slick-initialized').slick({
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
			});

			if (window.innerWidth <= 480) {

				// $("section.about_banner .slick_mb").not('.slick-initialized').slick({
				// 	arrows: false,
				// 	draggable: true,
				// 	touchThreshold: 300,
				// 	focusOnSelect: false,
				// 	infinite: false,
				// 	autoplay: false,
				// 	dots: false,
				// 	variableWidth: true,
				// 	vertical: false,
				// 	verticalSwiping: false,
				// 	slidesToShow: 1,
				// 	slidesToScroll: 1,
				// });

				$("section.mission .slick_mb").not('.slick-initialized').slick({
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