	<?php
		/*
		* Template Name: Keentegro | archive-folio
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
		<title>Проекты</title>
  </head>
  <body>

	<?php get_header(); ?>

	<section class="folio archive_folio text-b">
		<div class="wrapper">
			<h3>
				<span>
					Проекты
				</span>
			</h3>
			<div class="cards">

				<?php
					wp_reset_query();
					$my_posts = new WP_Query;
					$myposts = $my_posts->query([
						'hide_empty' => false,
						'post_type' => 'folio',
						'posts_per_page' => get_field('per_page', 'options')['folio'],
						'paged' => get_query_var('paged') ? get_query_var('paged') : 1, // получить посты с текущей страницы, установить текущую страницу в 1, если не определена
					]);

					foreach( $myposts as $key=>$post ) {
						setup_postdata($post);

						$url = get_permalink();
						$img = get_field('gallery')[0];
						$date = get_the_date('j F Y', $post->id);
						$post_title = $post->post_title;
				?>

					<a href="<?= $url; ?>" class="card">
						<div class="bg" style="background-image: url(<?= $img ?>);">
							<div class="figure_3"></div>
						</div>
						<h4 class="title">
							<?= $post_title; ?>
						</h4>
						<span class="date">
							<?= $date; ?>
						</span>
					</a>

				<?php };  wp_reset_postdata(); ?>

			</div>

			<?php
				function custom_page_navi( $totalpages, $page, $end_size, $mid_size ) {
					$bignum = 999999999;

					if ( $totalpages <= 1 || $page > $totalpages ) return;

					return paginate_links( array(
							'base'          => str_replace( $bignum, '%#%', esc_url( get_pagenum_link( $bignum ) ) ),
							'format'        => '',
							'current'       => max( 1, $page ),
							'total'         => $totalpages,
							'prev_text'    => __('<i class="fas fa-chevron-left"></i>'),
							'next_text'    => __('<i class="fas fa-chevron-right"></i>'),
							'type'          => 'list',
							'show_all'      => false,
							'end_size'      => $end_size,
							'mid_size'      => $mid_size
						)
					);
				}

				// Edit:
				$taxonomy = 'service_type';
				$number   = get_field('per_page', 'options')['folio']; // number of terms to display per page

				// Setup:
				$page         = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				$totalterms   = wp_count_posts( 'folio' )->publish;
				$totalpages   = ceil( $totalterms / $number );

				// Show custom page navigation
				printf( '<nav class="pagination text-b">%s</nav>',
					custom_page_navi( $totalpages, $page, 1, 5 )
				);

				?>

		</div>
	</section>

	<?php get_footer(); ?>
	<?php wp_footer(); ?>
</body>
</html>