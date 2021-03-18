	<?php
		/*
		* Template Name: Keentegro | single-blog
		* Template Post Type: post, blog
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
					Интересные факты перед началом большого строительства
				</span>
			</h3>

			<div class="thumbnail">
				<img src="<?= B_IMG_DIR; ?>/blog_bg.png" alt="thumbnail">
				<div class="figure_5">
					<span class="date">
						28 октября 2020
					</span>
				</div>
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

			<div class="navsharing">
				<a href="#" class="prev">
					<i class="fas fa-chevron-left"></i>
					Предыдущая
				</a>

				<div class="share">
					<span>
						Понравилась статья? Поделитесь:
					</span>
					<div class="buttons">
						<button>
							<img src="<?= B_IMG_DIR; ?>/icon_facebook.svg" alt="icon_facebook" class="img-svg">
						</button>
						<button>
							<img src="<?= B_IMG_DIR; ?>/icon_linkedin.svg" alt="icon_linkedin" class="img-svg">
						</button>
					</div>
				</div>

				<a href="#" class="next">
					Следующая
					<i class="fas fa-chevron-right"></i>
				</a>
			</div>
		</div>
	</section>

	<section class="blog bg-w text-b">
		<div class="wrapper">
			<h3>
				<span>
					Читайте также
				</span>
			</h3>
			<div class="cards slick_mb">

				<a href="#" class="card">
					<div class="bg" style="background-image: url(<?= B_IMG_DIR; ?>/home_blog_1.png);">
						<div class="figure_3"></div>
					</div>
					<h4 class="title">
						3 важных шага перед постройкой дома
						<i class="fas fa-chevron-right"></i>
					</h4>
					<span class="date">
						28 октября 2020
					</span>
				</a>
				<a href="#" class="card">
					<div class="bg" style="background-image: url(<?= B_IMG_DIR; ?>/home_blog_2.png);">
						<div class="figure_3"></div>
					</div>
					<h4 class="title">
						Оптоволоконные технологии, 10 важных фактов
						<i class="fas fa-chevron-right"></i>
					</h4>
					<span class="date">
						28 октября 2020
					</span>
				</a>
				<a href="#" class="card">
					<div class="bg" style="background-image: url(<?= B_IMG_DIR; ?>/home_blog_3.png);">
						<div class="figure_3"></div>
					</div>
					<h4 class="title">
						Интегрированные системы безопасности
						<i class="fas fa-chevron-right"></i>
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

	<script>
		 document.addEventListener("DOMContentLoaded", () => {

			// Adaptive slick
			if (window.innerWidth <= 768) {

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