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

		<?php
			// get the current taxonomy term
			$term = get_queried_object();
			$img = get_field('cat_image', $term);
			$descr = get_field('cat_description', $term);
		?>

		<title><?= $term->name; ?></title>
  </head>
  <body>

	<?php get_header(); ?>

	<section class="service_banner bg text-w" style="background-image: url(<?= $img; ?>);">
		<div class="wrapper">
			<h2 class="wow fadeLeft">
				<?= $term->name; ?>
			</h2>
		</div>
	</section>

	<section class="services archive_services text-b">
		<div class="wrapper">

			<p class="wow fadeInUp">
				<?= $descr; ?>
			</p>

			<div class="cards">

				<?php
					wp_reset_query();

					$myposts  = get_posts( [
						'posts_per_page' => -1,
						'post_type' => 'service',
						'tax_query' => [
							[
								'taxonomy' => 'service_type',
								'field' => 'slug',
								'terms' => $term->slug,
							]
						],
					] );

					foreach( $myposts as $post ) {
						setup_postdata($post);

						$url = get_permalink();
						$img = get_field('banner');
						$date = get_the_date('j F Y', $post->id);
						$post_title = $post->post_title;
				?>

					<div class="card bg text-w wow fadeIn" data-wow-delay="<?= $key*0.2 ?>s">
						<a href="<?= $url; ?>">
							<img src="<?= $img ?>" alt="thumbnail">
						</a>
						<h4 class="title">
							<a href="<?= $url; ?>">
								<?= $post_title; ?>
							</a>
							<i class="fas fa-chevron-right"></i>
						</h4>
						<div class="links">
							<a href="<?= $url; ?>">Подробнее</a>
						</div>
					</div>

				<?php } ?>

			</div>
		</div>
	</section>

	<?php get_footer(); ?>
	<?php wp_footer(); ?>

</body>
</html>
