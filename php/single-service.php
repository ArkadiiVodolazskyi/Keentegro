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
					<?php the_title(); ?>
				</span>
			</h3>

			<div class="thumbnail">
				<img src="<?= get_field('banner'); ?>" alt="thumbnail">
			</div>

			<div class="content">

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
		</div>
	</section>

	<section id="service_form" class="consult bg text-w" style="background-image: url(<?= B_IMG_DIR; ?>/home_reviews_bg.png);">
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
				<?php echo do_shortcode( '[wpforms id="27" title="false"]' ); ?>
			</div>

		</div>
	</section>

	<?php get_footer(); ?>
	<?php wp_footer(); ?>

</body>
</html>