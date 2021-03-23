<?php
		/*
		* Template Name: Keentegro | single-folio
		* Template Post Type: post, folio
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

	<section class="post folio_post text-b">
		<div class="wrapper">
			<h3>
				<span>
					<?php the_title(); ?>
				</span>
			</h3>

			<div class="gallery">
				<div class="big slick_lg"></div>
				<div class="tape slick_lg">
					<?php
						$images = get_field('gallery');
						foreach( $images as $image ) {
					?>
						<img src="<?= $image; ?>" alt="project_image" class="nolazy">
					<?php } ?>
				</div>
			</div>

			<div class="content">
				<div class="left">
					<h4>
						Что и где
					</h4>
					<ul>

						<?php
							$works_type = get_field('about_project')['works_type'];
							$place = get_field('about_project')['place'];
							$duration = get_field('about_project')['duration'];
						?>

						<?php if ($works_type): ?>
							<li>
								<img src="<?= B_IMG_DIR; ?>/icon_reconstruction.svg" alt="icon_reconstruction" class="img-svg">
								<span>
									<?= $works_type; ?>
								</span>
							</li>
						<?php endif; ?>

						<?php if ($place): ?>
							<li>
								<img src="<?= B_IMG_DIR; ?>/icon_map.svg" alt="icon_map" class="img-svg">
								<span>
									<?= $place; ?>
								</span>
							</li>
						<?php endif; ?>

						<?php if ($duration): ?>
							<li>
								<img src="<?= B_IMG_DIR; ?>/icon_clock.svg" alt="icon_clock" class="img-svg">
								<span>
									<?= $duration; ?>
								</span>
							</li>
						<?php endif; ?>

					</ul>

				</div>
				<div class="right">
					<h4>
						Описание проекта
					</h4>

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

	<section class="folio other text-b bg-w">
		<div class="wrapper">
			<h3>
				<span>
					Смотрите другие проекты
				</span>
			</h3>
			<div class="cards slick_mb">

				<?php
					// Show 2 other posts from folio, except current
					$posts = get_posts( [
						'post_type' => 'folio',
						'numberposts' => 2,
						'exclude' => url_to_postid(get_permalink())
					] );

					foreach( $posts as $key=>$post ) {
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

				<?php }; wp_reset_postdata(); ?>

			</div>
		</div>
	</section>

	<?php get_footer(); ?>
	<?php wp_footer(); ?>

	<script>
		document.addEventListener("DOMContentLoaded", () => {

			// Copy images from tape to .big wrapper
			(function() {
				const tapeImgs = [...document.querySelectorAll('.gallery .tape img')];
				const big = document.querySelector('.gallery .big');

				if (big.classList.contains('slick-initialized')) {
					console.error(`${big} initialized as slick slider before appending images.`);
				}

				if (tapeImgs.length && big) {
					for (let i = 0; i < tapeImgs.length; i++) {
						let clonedImg = document.createElement('img');
						clonedImg.src = tapeImgs[i].src;
						clonedImg.alt = tapeImgs[i].alt;
						big.appendChild(clonedImg);
					}
				}
			})();

			$(".gallery .big.slick_lg").not('.slick-initialized').slick({
				arrows: false,
				draggable: false,
				focusOnSelect: false,
				infinite: false,
				autoplay: false,
				dots: false,
				variableWidth: true,
				centerMode: false,
				vertical: false,
				verticalSwiping: false,
				slidesToShow: 1,
				slidesToScroll: 1,
				responsive: [
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
							arrows: true,
							draggable: true,
							touchThreshold: 300,
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
						},
					},
				],
			});

			$(".gallery .tape.slick_lg").not('.slick-initialized').slick({
				arrows: true,
				draggable: true,
				focusOnSelect: false,
				infinite: false,
				autoplay: false,
				dots: false,
				variableWidth: true,
				vertical: false,
				verticalSwiping: false,
				slidesToShow: 5,
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
				responsive: [
					{
						breakpoint: 1440,
						settings: {
							slidesToShow: 4,
							slidesToScroll: 1,
							arrows: true,
							draggable: true,
							touchThreshold: 300,
						},
					},
				],
			});

			// Click on slide
			$(".gallery .tape.slick_lg .slick-slide").click(function(e) {
				$('.gallery .tape.slick_lg').slick('slickGoTo', parseInt(e.target.getAttribute('data-slick-index')));

				$(".gallery .tape.slick_lg .slick-slide").removeClass('slick-current');
				e.target.classList.add('slick-current');

				// Link big slider
				$(".gallery .big.slick_lg").slick('slickGoTo', parseInt(e.target.getAttribute('data-slick-index')));
			});

			// Adaptive slick
			if (window.innerWidth <= 768) {
				$("section.folio.other .slick_mb")
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
		});
	</script>
</body>
</html>