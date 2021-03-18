	<?php
		/*
		* Template Name: Keentegro | archive-testimonial
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

		<link rel="stylesheet" href="<?= B_THEME_ROOT; ?>/js/libs/lightbox/css/lightbox.css">
		<title>Отзывы</title>

  </head>
  <body>

	<?php get_header(); ?>

	<section class="archive_reviews text-b">
		<div class="wrapper">
			<h3>
				<span>
					Отзывы
				</span>
			</h3>
			<div class="cards">

				<div class="card">
					<div class="figure_6"></div>
					<div class="text">
						<span class="date">
							20 декабря 2020
						</span>
						<span class="name">
							Андрей Осадчий, компания URS
						</span>
						<p>
							Мы сотрудничаем с Keentegro уже 3 года, и всегда довольны результатом. Задачи всегда выполняются в срок, а качество на высшем уровне. Занимались реставрацией таможенной площади в Одессе. Рекомендуем всем!
						</p>
						<a href="<?= B_IMG_DIR; ?>/review_doc_1.png" data-lightbox="review_doc_5">
							Показать оригинал
						</a>
					</div>
					<div class="image">
						<a href="<?= B_IMG_DIR; ?>/review_doc_1.png" data-lightbox="review_doc_1" class="bg">
							<img src="<?= B_IMG_DIR; ?>/review_doc_1.png" alt="review_doc">
						</a>
					</div>
				</div>

				<div class="card">
					<div class="figure_6"></div>
					<div class="text">
						<span class="date">
							15 декабря 2020
						</span>
						<span class="name">
							Андрей Осадчий, компания URS
						</span>
						<p>
							Представляю компанию FLIR в лице управляющего директора, выполняли работы по монтажу металлических конструкций. Работу выполнили на высшем уровне и, самое главное, в срок. Продолжаем сотрудничать.
						</p>
						<a href="<?= B_IMG_DIR; ?>/review_doc_2.png" data-lightbox="review_doc_4">
							Показать оригинал
						</a>
					</div>
					<div class="image">
						<a href="<?= B_IMG_DIR; ?>/review_doc_2.png" data-lightbox="review_doc_2" class="bg">
							<img src="<?= B_IMG_DIR; ?>/review_doc_2.png" alt="review_doc">
						</a>
					</div>
				</div>

				<div class="card">
					<div class="figure_6"></div>
					<div class="text">
						<span class="date">
							20 декабря 2020
						</span>
						<span class="name">
							Андрей Осадчий, компания URS
						</span>
						<p>
							Мы сотрудничаем с Keentegro уже 3 года, и всегда довольны результатом. Задачи всегда выполняются в срок, а качество на высшем уровне. Занимались реставрацией таможенной площади в Одессе. Рекомендуем всем!
						</p>
						<a href="<?= B_IMG_DIR; ?>/review_doc_1.png" data-lightbox="review_doc_5">
							Показать оригинал
						</a>
					</div>
					<div class="image">
						<a href="<?= B_IMG_DIR; ?>/review_doc_1.png" data-lightbox="review_doc_3" class="bg">
							<img src="<?= B_IMG_DIR; ?>/review_doc_1.png" alt="review_doc">
						</a>
					</div>
				</div>

				<div class="card">
					<div class="figure_6"></div>
					<div class="text">
						<span class="date">
							15 декабря 2020
						</span>
						<span class="name">
							Андрей Осадчий, компания URS
						</span>
						<p>
							Представляю компанию FLIR в лице управляющего директора, выполняли работы по монтажу металлических конструкций. Работу выполнили на высшем уровне и, самое главное, в срок. Продолжаем сотрудничать.
						</p>
						<a href="<?= B_IMG_DIR; ?>/review_doc_2.png" data-lightbox="review_doc_4">
							Показать оригинал
						</a>
					</div>
					<div class="image">
						<a href="<?= B_IMG_DIR; ?>/review_doc_2.png" data-lightbox="review_doc_4" class="bg">
							<img src="<?= B_IMG_DIR; ?>/review_doc_2.png" alt="review_doc">
						</a>
					</div>
				</div>

				<div class="card">
					<div class="figure_6"></div>
					<div class="text">
						<span class="date">
							20 декабря 2020
						</span>
						<span class="name">
							Андрей Осадчий, компания URS
						</span>
						<p>
							Мы сотрудничаем с Keentegro уже 3 года, и всегда довольны результатом. Задачи всегда выполняются в срок, а качество на высшем уровне. Занимались реставрацией таможенной площади в Одессе. Рекомендуем всем!
						</p>
						<a href="<?= B_IMG_DIR; ?>/review_doc_1.png" data-lightbox="review_doc_5">
							Показать оригинал
						</a>
					</div>
					<div class="image">
						<a href="<?= B_IMG_DIR; ?>/review_doc_1.png" data-lightbox="review_doc_5" class="bg">
							<img src="<?= B_IMG_DIR; ?>/review_doc_1.png" alt="review_doc">
						</a>
					</div>
				</div>

			</div>
		</div>
	</section>

	<?php wp_footer(); ?>
	<?php get_footer(); ?>

	<script src="./js/libs/lightbox/js/lightbox.js"></script>

	<script>
		lightbox.option({
      'albumLabel': false,
			'disableScrolling': true, // doesn't work
			'fadeDuration': 300,
			'imageFadeDuration': 300,
			'showImageNumberLabel': false,
			'fitImagesInViewport': true,
    });
	</script>
</body>
</html>