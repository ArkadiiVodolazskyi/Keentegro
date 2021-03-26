	<?php
		/*
		* Template Name: Keentegro | archive-service
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
		<title>Услуги</title>
  </head>
  <body>

	<?php get_header(); ?>

	<section class="services archive_services text-b">
		<div class="wrapper">
			<h3 class="wow fadeLeft">
				<span>
					Услуги
				</span>
			</h3>
			<div class="cards">

				<?php
					$terms = get_terms( [
						'taxonomy' => 'service_type',
						'hide_empty' => false,
					] );

					foreach( $terms as $term ) {
						setup_postdata($post);

						$url = get_home_url() . '/service/' . $term->slug;
						$img = get_field('cat_image', $term);
						$post_title = $term->name;
				?>

					<div class="card bg text-w wow fadeIn" data-wow-delay="<?= $key*0.2 ?>s">
						<a href="<?= $url; ?>">
							<img src="<?= $img; ?>" alt="taxonomy_thumbnail">
						</a>
						<h4 class="title">
							<a href="<?= $url; ?>">
								<?= $post_title; ?>
							</a>
							<i class="fas fa-chevron-right"></i>
						</h4>
						<div class="links">
							<button class="openConsult">Консультация</button>
							<a href="<?= $url; ?>">Все услуги</a>
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