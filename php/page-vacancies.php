<?php
		/*
		* Template Name: Keentegro | page-vacancies
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
		<title><?php the_title(); ?></title>

  </head>
  <body>

	<?php get_header(); ?>

	<section class="vacancies text-b">
		<div class="wrapper">
			<h3 class="wow fadeLeft">
				<span>
					<?php the_title(); ?>
				</span>
			</h3>
			<div class="cards">

				<?php while(have_rows('vacancies')): the_row(); ?>

				<div class="card wow fadeInLeft">
					<h4 class="title">
						<?= get_sub_field('title'); ?>
						<i class="fas fa-chevron-down"></i>
					</h4>

					<div class="content">

						<?php while (have_rows('content')): the_row(); ?>

							<?php while (have_rows('par_accent')): the_row(); ?>
								<p>
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

						<div class="email">
							<p>
								<i class="far fa-envelope"></i>
								ПРИСЫЛАЙТЕ ВАШЕ РЕЗЮМЕ НА ПОЧТУ
							</p>
							<a href="mailto:<?= get_field('email', 'options'); ?>">
								<?= get_field('email', 'options'); ?>
							</a>
						</div>

					</div>
				</div>

				<?php endwhile;	?>

			</div>
	</section>

	<?php get_footer(); ?>
	<?php wp_footer(); ?>

	<script>
		  // expand vacancies
		(function() {
			const vacancies = document.querySelectorAll('section.vacancies .card');
  		const vacancyTitles = document.querySelectorAll('section.vacancies .card .title');

			if (vacancies.length && vacancyTitles.length) {

				for (let i = 0; i < vacancyTitles.length; i++) {
					vacancyTitles[i].addEventListener('click', () => {
						if (vacancies[i].classList.contains('expanded')) {
							vacancies[i].classList.remove('expanded');
						} else {
							for (let j = 0; j < vacancies.length; j++) {
								vacancies[j].classList.remove('expanded');
							}
							vacancies[i].classList.add('expanded');
						}
					});
				}

			}
		})();
	</script>
</body>
</html>