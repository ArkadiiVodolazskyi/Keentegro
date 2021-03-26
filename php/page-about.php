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
			<h3 class="wow fadeInUp">
				<?= get_field('banner')['slogan']; ?>
			</h3>
			<div>
				<span class="principles">
					<span class="principle"><?= get_field('banner')['principles']['word_1']; ?></span>
					<span class="principle"><?= get_field('banner')['principles']['word_2']; ?></span>
					<span class="principle"><?= get_field('banner')['principles']['word_3']; ?></span>
				</span>
			</div>
		</div>
	</section>

	<?php if (have_rows('block_1')): the_row(); ?>
		<section class="history text-w">
			<div class="wrapper">

				<?php if(get_field('block_1')['title']): ?>
					<h2 class="wow fadeInUp">
						<?= get_field('block_1')['title']; ?>
					</h2>
				<?php endif; ?>

				<?php while (have_rows('content')): the_row(); ?>

					<?php while (have_rows('par_accent')): the_row(); ?>
						<p class="accent wow fadeInUp">
							<?= get_sub_field('text'); ?>
						</p>
					<?php endwhile; ?>

					<?php while (have_rows('par')): the_row(); ?>
						<p class="wow fadeInUp">
							<?= get_sub_field('text'); ?>
						</p>
					<?php endwhile; ?>

					<?php while (have_rows('list')): the_row(); ?>
						<div class="list_block">

							<?php if(get_sub_field('title')): ?>
								<h6 class="wow fadeInUp">
									<?= get_sub_field('title'); ?>
								</h6>
							<?php endif; ?>

							<ul>
								<?php while (have_rows('points')): the_row(); ?>
									<li class="wow fadeInUp" data-wow-delay="<?= get_row_index()*0.2 ?>s">
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
				<h3 class="wow fadeInUp">
					<?= $achievs['title']; ?>
				</h3>
				<div class="cards slick_mb">

					<?php foreach($cards as $key=>$card) { ?>
						<div  class="card wow fadeIn" data-wow-delay="<?= $key*0.2 ?>s">
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
				<h3 class="wow fadeRight">
					<?= get_field('block_2')['mission']['title']; ?>
				</h3>
				<p class="wow fadeRight">
					<?= get_field('block_2')['mission']['text']; ?>
				</p>
			</div>

		</div>
	</section>

	<?php if (have_rows('block_3')): the_row(); ?>
		<section class="history text-w">
			<div class="wrapper">

				<?php if(get_field('block_3')['title']): ?>
					<h2 class="wow fadeInUp">
						<?= get_field('block_3')['title']; ?>
					</h2>
				<?php endif; ?>

				<?php while (have_rows('content')): the_row(); ?>

					<?php while (have_rows('par_accent')): the_row(); ?>
						<p class="accent wow fadeInUp">
							<?= get_sub_field('text'); ?>
						</p>
					<?php endwhile; ?>

					<?php while (have_rows('par')): the_row(); ?>
						<p class="wow fadeInUp">
							<?= get_sub_field('text'); ?>
						</p>
					<?php endwhile; ?>

					<?php while (have_rows('list')): the_row(); ?>
						<div class="list_block">

							<?php if(get_sub_field('title')): ?>
								<h6 class="wow fadeInUp">
									<?= get_sub_field('title'); ?>
								</h6>
							<?php endif; ?>

							<ul>
								<?php while (have_rows('points')): the_row(); ?>
									<li class="wow fadeInUp" data-wow-delay="<?= get_row_index()*0.2 ?>s">
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

			// Principles animation
			(function() {
				const principles = [...document.querySelectorAll('section.banner span.principle')];

				if (principles.length) {
					let counter = -1;
					setInterval(() => {
						counter++;
						if (counter > 2) {
							counter = 0;
						}
						for (let i = 0; i < principles.length; i++) {
							principles[i].classList.remove('active');
						}
						principles[counter].classList.add('active');
					}, 2000);
				}
			})();

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