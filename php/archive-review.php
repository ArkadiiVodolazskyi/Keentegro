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

			<?php
				wp_reset_query();
				$my_posts = new WP_Query;
				$myposts = $my_posts->query([
					'hide_empty' => false,
					'post_type' => 'review',
					'posts_per_page' => get_field('per_page', 'options')['review'],
					'paged' => get_query_var('paged') ? get_query_var('paged') : 1, // получить посты с текущей страницы, установить текущую страницу в 1, если не определена
				]);

				foreach( $myposts as $key=>$post ) {
					setup_postdata($post);

					$date = get_the_date('j F Y', $post->id);
					$name = get_field('name');
					$company = get_field('company');
					$text = get_field('text');
					$doc = get_field('doc');
				?>

				<div class="card">
					<div class="figure_6"></div>
					<div class="text">
						<span class="date">
							<?= $date; ?>
						</span>
						<span class="name">
							<?= $name; ?>, компания <?= $company; ?>
						</span>
						<p>
							<?= $text; ?>
						</p>
						<a href="<?= $doc; ?>" data-lightbox="review_doc_<?= $key; ?>">
							Показать оригинал
						</a>
					</div>
					<div class="image">
						<a href="<?= $doc; ?>" data-lightbox="review_doc_<?= $key; ?>" class="bg">
							<img src="<?= $doc; ?>" alt="review_doc">
						</a>
					</div>
				</div>

				<?php }; ?>

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
				$number   = get_field('per_page', 'options')['review']; // number of terms to display per page

				// Setup:
				$page         = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				$totalterms   = wp_count_posts( 'blog' )->publish;
				$totalpages   = ceil( $totalterms / $number );

				// Show custom page navigation
				printf( '<nav class="pagination">%s</nav>',
					custom_page_navi( $totalpages, $page, 1, 5 )
				);

				?>

		</div>
	</section>

	<?php get_footer(); ?>
	<?php wp_footer(); ?>

	<script src="<?= B_THEME_ROOT; ?>/js/libs/lightbox/js/lightbox.js"></script>

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