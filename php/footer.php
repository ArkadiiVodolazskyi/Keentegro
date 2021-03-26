<?php
	global $template;
	$template = basename($template);

	// Don't show brands slider on special templates.
	$templatenames = [ 'page-home.php', 'archive-service.php', 'taxonomy-service_type.php', 'page-about' ];

	$show_brands = false;
	foreach ( $templatenames as $templatename ) {
		if ( $template == $templatename ) {
			$show_brands = true;
			break;
		}
	}
?>

<!-- footer start -->
<footer class="bg text-w <?= $show_brands ? 'show_brands' : ''; ?>">
	<img src="<?= B_IMG_DIR; ?>/footer_bg.png" alt="footer_bg" class="nolazy">
	<div class="wrapper">

		<?php
			$clients = get_field('clients', 'options');
			if ( !empty($clients) ) {
		?>
			<div class="clients">
				<h2 class="wow fadeLeft">Клиенты и партнеры</h2>
				<div class="slick_lg">

					<?php foreach ($clients as $key=>$client) { ?>
						<a href="<?= $client['link']['url']; ?>" class="wow fadeIn" data-wow-delay="<?= $key*0.1 ?>s">
							<img src="<?= $client['img']; ?>" alt="client" />
						</a>
					<?php } ?>

				</div>
			</div>
		<?php } ?>

		<nav>

			<?php while(have_rows('footer_nav', 'options')): the_row(); ?>

				<div class="card">
					<div class="figure_1 wow fadeIn"></div>
					<h3 class="wow fadeInUp">
						<?= get_sub_field('title'); ?>
						<button class="expand">
							<i class="fas fa-chevron-down"></i>
						</button>
					</h3>
					<ul>
						<?php while(have_rows('links', 'options')): the_row(); ?>
							<li class="wow fadeInUp" data-wow-delay="<?= get_row_index()*0.1 ?>s">
								<a href="<?= get_sub_field('link')['url']; ?>">
									<?= get_sub_field('link')['title']; ?>
								</a>
							</li>
						<?php endwhile; ?>
					</ul>
				</div>

			<?php endwhile; ?>

			<div class="card">
				<div class="figure_1 wow fadeIn"></div>
				<ul>

					<?php
						$address = get_field('address', 'options');
						$phones = get_field('phones', 'options');
						$email = get_field('email', 'options');
						$working_time = get_field('working_time', 'options');
						$socials = get_field('socials', 'options');
					?>

						<?php if ($address) { ?>
							<li class="wow fadeInUp">
								<?= $address; ?>
							</li>
						<?php } ?>

						<?php foreach ($phones as $phone) { ?>
							<li class="wow fadeInUp" data-wow-delay="0.1s">
								<a href="tel:<?= $phone['phone']; ?>">
									<?= $phone['phone']; ?>
								</a>
							</li>
						<?php } ?>

						<?php if ($email) { ?>
							<li class="wow fadeInUp" data-wow-delay="0.2s">
								<a href="mailto:<?= $email; ?>">
									<?= $email; ?>
								</a>
							</li>
						<?php } ?>

						<?php if ($working_time) { ?>
							<li class="wow fadeInUp" data-wow-delay="0.3s">
								<?= $working_time; ?>
							</li>
						<?php } ?>

						<?php if (count($socials)) { ?>
							<li class="wow fadeInUp">
								<?php foreach ($socials as $key=>$social) { ?>
									<a href="<?= $social['url']; ?>" class="wow fadeInUp" data-wow-delay="<?= $key*0.1 ?>s">
										<img src="<?= B_IMG_DIR; ?>/icon_<?= $social['social_type']; ?>.svg" alt="icon_facebook" class="img-svg">
									</a>
								<?php } ?>
							</li>
						<?php } ?>

				</ul>
			</div>
		</nav>

		<div class="copyright text-w">
			<span class="wow fadeInUp">© Keentegro 2009-<?= date("Y"); ?></span>
			<span class="wow fadeInUp" data-wow-delay="0.4s">
				<?= get_field('footer_slogan', 'options'); ?>
			</span>
			<a href="https://devpro.agency/" class="development wow fadeInUp" data-wow-delay="0.4s">
				<span class="textAppear">Создание сайта — </span>
				<img src="<?= B_IMG_DIR ?>/devpro.svg" class="img-svg native">
			</a>
		</div>
	</div>
</footer>
<!-- footer end -->

<!-- Slick: footer clients -->
<script>
	document.addEventListener("DOMContentLoaded", () => {
		// Footer clients slick_lg
		$("footer.show_brands .clients .slick_lg").not('.slick-initialized').slick({
			arrows: true,
			draggable: true,
			touchThreshold: 300,
			focusOnSelect: false,
			infinite: false,
			autoplay: false,
			dots: false,
			variableWidth: true,
			vertical: false,
			verticalSwiping: false,
			slidesToShow: 6,
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
					breakpoint: 1560,
					settings: {
						slidesToShow: 5,
						slidesToScroll: 1,
						arrows: true,
						draggable: true,
						touchThreshold: 300,
					}
				},
				{
					breakpoint: 1280,
					settings: {
						slidesToShow: 4,
						slidesToScroll: 1,
						arrows: true,
						draggable: true,
						touchThreshold: 300,
					}
				},
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 1,
						arrows: true,
						draggable: true,
						touchThreshold: 300,
					}
				},
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 1,
						arrows: false,
						draggable: true,
						touchThreshold: 300,
					}
				},
				{
					breakpoint: 500,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
						arrows: false,
						draggable: true,
						touchThreshold: 300,
					}
				},
				{
					breakpoint: 350,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						arrows: false,
						draggable: true,
						touchThreshold: 300,
					}
				},
			]
		});
	});
</script>