<?php
		/*
		* Template Name: Keentegro | page-clients
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

	<section class="clients text-b">
		<div class="wrapper">
			<h3 class="wow fadeLeft">
				<span>
					<?php the_title(); ?>
				</span>
			</h3>
			<div class="cards">

				<?php
					$clients = get_field('clients', 'options');
					foreach ($clients as $key=>$client) {
				?>

					<a href="<?= $client['link']['url']; ?>" class="card wow fadeIn" data-wow-delay="<?= $key*0.2 ?>s">
						<img src="<?= $client['img']; ?>" alt="client" />
						<h4>
							<?= $client['link']['title']; ?>
						</h4>
					</a>

				<?php }	?>

			</div>
	</section>

	<?php get_footer(); ?>
	<?php wp_footer(); ?>
</body>
</html>