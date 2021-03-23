	<?php
		/*
		* Template Name: Keentegro | single-blog
		* Template Post Type: post, blog
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
				<img src="<?= B_IMG_DIR; ?>/blog_bg.png" alt="thumbnail">
				<div class="figure_5">
					<span class="date">
						<?= get_the_date(); ?>
					</span>
				</div>
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

			<?php
				$prevPost = get_previous_post()->guid;
				$nextPost = get_next_post()->guid;
			?>

			<div class="navsharing">

				<a
					href="<?= $prevPost; ?>"
					class="prev"
					<?php if ( !$prevPost ) {
						echo "style = 'opacity: 0; visibility: hidden;'";
					} ?>
				>
					<i class="fas fa-chevron-left"></i>
					Предыдущая
				</a>

				<?php
					$url = urlencode(get_permalink());
					$title = urlencode(get_the_title());

					$fbLink = 'https://www.facebook.com/sharer/sharer.php?u=' . $url;
					$liLink = 'https://www.linkedin.com/shareArticle?mini=true&url=' . $url . '&title=' . $title;
				?>

				<div class="share">
					<span>
						Понравилась статья? Поделитесь:
					</span>
					<div class="buttons">
						<button class="shareFacebook">
							<img src="<?= B_IMG_DIR; ?>/icon_facebook.svg" alt="icon_facebook" class="img-svg">
						</button>
						<button class="shareLinkedin">
							<img src="<?= B_IMG_DIR; ?>/icon_linkedin.svg" alt="icon_linkedin" class="img-svg">
						</button>
					</div>
				</div>

				<a
					href="<?= $nextPost; ?>"
					class="next"
					<?php if ( !$nextPost ) {
							echo "style = 'opacity: 0; visibility: hidden;'";
					} ?>
				>
					Следующая
					<i class="fas fa-chevron-right"></i>
				</a>
			</div>
		</div>
	</section>

	<section class="blog bg-w text-b">
		<div class="wrapper">
			<h3>
				<span>
					Читайте также
				</span>
			</h3>
			<div class="cards slick_mb">

				<?php
					// Show 3 other posts from blog, except current
					$posts = get_posts( [
						'post_type' => 'blog',
						'numberposts' => 3,
						'exclude' => url_to_postid(get_permalink())
					] );

					foreach( $posts as $key=>$post ) {
						setup_postdata($post);

						$url = get_permalink();
						$img = get_field('banner');
						$date = get_the_date('j F Y', $post->id);
						$post_title = $post->post_title;
				?>

					<a href="<?= $url; ?>" class="card">
						<div class="bg" style="background-image: url(<?= $img ?>);">
							<div class="figure_3"></div>
						</div>
						<h4 class="title">
							<?= $post_title; ?>
							<i class="fas fa-chevron-right"></i>
						</h4>
						<span class="date">
							<?= $date; ?>
						</span>
					</a>

				<?php }; wp_reset_postdata(); ?>

			</div>
		</div>
	</section>

	<?php get_footer(); ?>
	<?php wp_footer(); ?>

	<script>
		 document.addEventListener("DOMContentLoaded", () => {

			// Adaptive slick
			if (window.innerWidth <= 768) {

				$("section.blog .slick_mb")
					.not(".slick-initialized")
					.slick({
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

		$(document).ready(function() {

			document.querySelector(".shareFacebook").addEventListener("click", () => {
				window.open('<?= $fbLink; ?>','popUpWindow','height=400, width=600, left=10, top=10, , scrollbars=yes, menubar=no');
				return false;
			});

			document.querySelector(".shareLinkedin").addEventListener("click", () => {
				window.open('<?= $liLink; ?>','popUpWindow','height=400, width=600, left=10, top=10, , scrollbars=yes, menubar=no');
				return false;
			});

		})
	</script>

</body>
</html>