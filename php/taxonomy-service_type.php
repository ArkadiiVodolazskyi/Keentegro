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
			<h2>
				<?= $term->name; ?>
			</h2>
		</div>
	</section>

	<section class="services archive_services text-b">
		<div class="wrapper">

			<p>
				<?= $descr; ?>
			</p>

			<div class="cards">

				<?php
					wp_reset_query();
					$my_posts = new WP_Query;
					$myposts = $my_posts->query([
						'hide_empty' => false,
						'post_type' => 'service',
						'service' => $term->slug
					]);

					foreach( $posts as $post ) {
						setup_postdata($post);

						$url = get_permalink();
						$img = get_field('banner');
						$date = get_the_date('j F Y', $post->id);
						$post_title = $post->post_title;
				?>

					<div class="card bg text-w">
						<a href="<?= $url; ?>">
							<img src="<?= $img ?>" alt="thumbnail">
						</a>
						<h4 class="title">
							<?= $post_title; ?>
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
