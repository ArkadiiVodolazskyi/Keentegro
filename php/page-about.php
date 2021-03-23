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
  <body class="home">

	<?php get_header(); ?>

	<section class="banner about_banner text-w bg">
		<img src="<?= get_field('banner')['img']; ?>" alt="home_banner">
		<div class="wrapper">
			<h3>
				<?= get_field('banner')['slogan']; ?>
			</h3>
			<div>
				<span class="slick_mb">
					<span class="active"><?= get_field('banner')['principles']['word_1']; ?></span>
					<span><?= get_field('banner')['principles']['word_2']; ?></span>
					<span><?= get_field('banner')['principles']['word_3']; ?></span>
				</span>
			</div>
		</div>
	</section>

	<?php if (have_rows('block_1')): the_row(); ?>
		<section class="history text-w">
			<div class="wrapper">

				<?php if(get_field('block_1')['title']): ?>
					<h2>
						<?= get_field('block_1')['title']; ?>
					</h2>
				<?php endif; ?>

				<?php while (have_rows('content')): the_row(); ?>

					<?php while (have_rows('par_accent')): the_row(); ?>
						<p class="accent">
							<?= get_sub_field('text'); ?>
						</p>
					<?php endwhile; ?>

					<?php while (have_rows('par')): the_row(); ?>
						<p>
							<?= get_sub_field('text'); ?>
						</p>
					<?php endwhile; ?>

					<?php while (have_rows('list')): the_row(); ?>
						<div class="list_block">

							<?php if(get_sub_field('title')): ?>
								<h6>
									<?= get_sub_field('title'); ?>
								</h6>
							<?php endif; ?>

							<ul>
								<?php while (have_rows('points')): the_row(); ?>
									<li>
										<?= get_sub_field('point'); ?>
									</li>
								<?php endwhile; ?>
							</ul>
						</div>
					<?php endwhile; ?>

				<?php endwhile; ?>

			</div>
		</section>
	<?php endif; ?>

	<?php
		$achievs = get_field('block_2')['achievs'];
		$cards = $achievs['cards']; ?>
	<section class="facts mission bg text-w" style="background-image: url(<?= B_IMG_DIR; ?>/home_reviews_bg.png);">
		<div class="wrapper">

			<div class="left">
				<h3>
					<?= $achievs['title']; ?>
				</h3>
				<div class="cards slick_mb">

					<?php foreach($cards as $card) { ?>
						<div class="card">
							<div class="figure_2"></div>
							<img src="<?= $card['icon']; ?>" alt="card_icon">
							<p>
								<?= $card['text']; ?>
							</p>
						</div>
					<?php } ?>

				</div>
			</div>

			<div class="right">
				<h3>
					<?= get_field('block_2')['mission']['title']; ?>
				</h3>
				<p>
					<?= get_field('block_2')['mission']['text']; ?>
				</p>
			</div>

		</div>
	</section>

	<?php if (have_rows('block_3')): the_row(); ?>
		<section class="history text-w">
			<div class="wrapper">

				<?php if(get_field('block_3')['title']): ?>
					<h2>
						<?= get_field('block_3')['title']; ?>
					</h2>
				<?php endif; ?>

				<?php while (have_rows('content')): the_row(); ?>

					<?php while (have_rows('par_accent')): the_row(); ?>
						<p class="accent">
							<?= get_sub_field('text'); ?>
						</p>
					<?php endwhile; ?>

					<?php while (have_rows('par')): the_row(); ?>
						<p>
							<?= get_sub_field('text'); ?>
						</p>
					<?php endwhile; ?>

					<?php while (have_rows('list')): the_row(); ?>
						<div class="list_block">

							<?php if(get_sub_field('title')): ?>
								<h6>
									<?= get_sub_field('title'); ?>
								</h6>
							<?php endif; ?>

							<ul>
								<?php while (have_rows('points')): the_row(); ?>
									<li>
										<?= get_sub_field('point'); ?>
									</li>
								<?php endwhile; ?>
							</ul>
						</div>
					<?php endwhile; ?>

				<?php endwhile; ?>

			</div>
		</section>
	<?php endif; ?>

	<?php get_footer(); ?>
	<?php wp_footer(); ?>

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