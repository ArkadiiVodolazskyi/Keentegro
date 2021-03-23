<?php
	global $template;
	$template = basename($template);

	// Don't show brands slider on special templates.
	$templatenames = [ 'page-home.php', 'archive-service.php', 'taxonomy-service.php', 'page-about' ];

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
	<img src="<?= B_IMG_DIR; ?>/footer_bg.png" alt="footer_bg">
	<div class="wrapper">

		<?php
			$clients = get_field('clients', 'options');
			if ( !empty($clients) ) {
		?>
			<div class="clients">
				<h2>Клиенты и партнеры</h2>
				<div class="slick_lg">

					<?php foreach ($clients as $client) { ?>
						<img src="<?= $client; ?>" alt="client" />
					<?php } ?>

				</div>
			</div>
		<?php } ?>

		<nav>

			<?php while(have_rows('footer_nav', 'options')): the_row(); ?>

				<div>
					<div class="figure_1"></div>
					<h3>
						<?= get_sub_field('title'); ?>
						<button class="expand">
							<i class="fas fa-chevron-down"></i>
						</button>
					</h3>
					<ul>
						<?php while(have_rows('links', 'options')): the_row(); ?>
							<li><a href="<?= get_sub_field('link')['url']; ?>">
								<?= get_sub_field('link')['title']; ?>
							</a></li>
						<?php endwhile; ?>
					</ul>
				</div>

			<?php endwhile; ?>

			<div>
				<div class="figure_1"></div>
				<ul>

					<?php
						$address = get_field('address', 'options');
						$phones = get_field('phones', 'options');
						$email = get_field('email', 'options');
						$working_time = get_field('working_time', 'options');
						$socials = get_field('socials', 'options');
					?>

						<?php if ($address) { ?>
							<li>
								<?= $address; ?>
							</li>
						<?php } ?>

						<?php foreach ($phones as $phone) { ?>
							<li>
								<a href="tel:<?= $phone['phone']; ?>">
									<?= $phone['phone']; ?>
								</a>
							</li>
						<?php } ?>

						<?php if ($email) { ?>
							<li>
								<a href="mailto:<?= $email; ?>">
									<?= $email; ?>
								</a>
							</li>
						<?php } ?>

						<?php if ($working_time) { ?>
							<li>
								<?= $working_time; ?>
							</li>
						<?php } ?>

						<?php if (count($socials)) { ?>
							<li>
								<?php foreach ($socials as $social) { ?>
									<a href="<?= $social['url']; ?>">
										<img src="<?= B_IMG_DIR; ?>/icon_<?= $social['social_type']; ?>.svg" alt="icon_facebook" class="img-svg">
									</a>
								<?php } ?>
							</li>
						<?php } ?>

				</ul>
			</div>
		</nav>

		<div class="copyright text-w">
			<span>© Keentegro 2009-<?= date("Y"); ?></span>
			<span>
				<?= get_field('footer_slogan', 'options'); ?>
			</span>
			<a href="https://devpro.agency/" class="development">
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