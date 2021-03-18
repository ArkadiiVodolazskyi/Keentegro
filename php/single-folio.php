<?php
		/*
		* Template Name: Keentegro | single-folio
		* Template Post Type: post, folio
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

	<section class="post folio_post text-b">
		<div class="wrapper">
			<h3>
				<span>
					Пост охраны ОБСЕ
				</span>
			</h3>

			<div class="gallery">
				<div class="big slick_lg"></div>
				<div class="tape slick_lg">
					<img src="<?= B_IMG_DIR; ?>/home_folio_1.png">
					<img src="<?= B_IMG_DIR; ?>/home_folio_2.png">
					<img src="<?= B_IMG_DIR; ?>/home_folio_3.png">
					<img src="<?= B_IMG_DIR; ?>/home_folio_1.png">
					<img src="<?= B_IMG_DIR; ?>/home_folio_2.png">
					<img src="<?= B_IMG_DIR; ?>/home_folio_3.png">
				</div>
			</div>

			<div class="content">
				<div class="left">
					<h4>
						Что и где
					</h4>
					<ul>
						<li>
							<img src="<?= B_IMG_DIR; ?>/icon_reconstruction.svg" alt="icon_reconstruction" class="img-svg">
							<span>
								Реконструкция
							</span>
						</li>
						<li>
							<img src="<?= B_IMG_DIR; ?>/icon_map.svg" alt="icon_map" class="img-svg">
							<span>
								Украина, Одесса
							</span>
						</li>
						<li>
							<img src="<?= B_IMG_DIR; ?>/icon_clock.svg" alt="icon_clock" class="img-svg">
							<span>
								Выполнено за 2 месяца
							</span>
						</li>
					</ul>
				</div>
				<div class="right">
					<h4>
						Описание проекта
					</h4>

					<p>
						Компания планирует разработать систему, которая объединит автомобили, инфраструктуру и жилища с помощью новейших систем связи. Футуристический город, получивший название Woven City, будет возведен на участке площадью 700 тыс. кв м, где когда-то располагалось предприятие компании. В городе будет три типа улиц: для полностью автономных автомобилей, для пешеходов и для людей, пользующихся индивидуальными средствами передвижения.
					</p>

					<p>
						Первоначально в новом городе будет жить около 360 человек, в том числе разработчики и пожилые люди. Ожидается, что этот город будет способствовать появлению полезных для общества инноваций.
					</p>

					<div class="list_block">
						<h6>
							Что именно сделали:
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
				</div>
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

	<section class="folio other text-b bg-w">
		<div class="wrapper">
			<h3>
				<span>
					Смотрите другие проекты
				</span>
			</h3>
			<div class="cards slick_mb">

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

			</div>
		</div>
	</section>

	<?php wp_footer(); ?>
	<?php get_footer(); ?>

	<script>
		document.addEventListener("DOMContentLoaded", () => {

			// Copy images from tape to .big wrapper
			(function() {
				const tapeImgs = [...document.querySelectorAll('.gallery .tape img')];
				const big = document.querySelector('.gallery .big');

				if (big.classList.contains('slick-initialized')) {
					console.error(`${big} initialized as slick slider before appending images.`);
				}

				if (tapeImgs.length && big) {
					for (let i = 0; i < tapeImgs.length; i++) {
						let clonedImg = document.createElement('img');
						clonedImg.src = tapeImgs[i].src;
						clonedImg.alt = tapeImgs[i].alt;
						big.appendChild(clonedImg);
					}
				}
			})();

			$(".gallery .big.slick_lg").not('.slick-initialized').slick({
				arrows: false,
				draggable: false,
				focusOnSelect: false,
				infinite: false,
				autoplay: false,
				dots: false,
				variableWidth: true,
				centerMode: false,
				vertical: false,
				verticalSwiping: false,
				slidesToShow: 1,
				slidesToScroll: 1,
				responsive: [
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
							arrows: true,
							draggable: true,
							touchThreshold: 300,
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
						},
					},
				],
			});

			$(".gallery .tape.slick_lg").not('.slick-initialized').slick({
				arrows: true,
				draggable: true,
				focusOnSelect: false,
				infinite: false,
				autoplay: false,
				dots: false,
				variableWidth: true,
				vertical: false,
				verticalSwiping: false,
				slidesToShow: 5,
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
						breakpoint: 1440,
						settings: {
							slidesToShow: 4,
							slidesToScroll: 1,
							arrows: true,
							draggable: true,
							touchThreshold: 300,
						},
					},
				],
			});

			// Click on slide
			$(".gallery .tape.slick_lg .slick-slide").click(function(e) {
				$('.gallery .tape.slick_lg').slick('slickGoTo', parseInt(e.target.getAttribute('data-slick-index')));

				$(".gallery .tape.slick_lg .slick-slide").removeClass('slick-current');
				e.target.classList.add('slick-current');

				// Link big slider
				$(".gallery .big.slick_lg").slick('slickGoTo', parseInt(e.target.getAttribute('data-slick-index')));
			});

			// Adaptive slick
			if (window.innerWidth <= 768) {
				$("section.folio.other .slick_mb")
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