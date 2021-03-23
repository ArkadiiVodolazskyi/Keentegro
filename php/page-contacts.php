	<?php
		/*
		* Template Name: Keentegro | page-contacts
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
		<title><?php the_title(); ?></title>
  </head>
  <body>

	<?php get_header(); ?>

	<section class="contacts text-b">
		<div class="wrapper">
			<h3>
				<span>
					Контакты
				</span>
			</h3>
			<div>
				<ul class="left">

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

					<li>
						<button>
							Свяжитесь с нами
						</button>
						<div class="socials">

							<?php foreach ($socials as $social) { ?>
								<a href="<?= $social['url']; ?>">
									<img src="<?= B_IMG_DIR; ?>/icon_<?= $social['social_type']; ?>.svg" alt="icon_facebook" class="img-svg">
								</a>
							<?php } ?>

						</div>
					</li>
				</ul>

				<div id="map" class="right"></div>
			</div>
		</div>
	</section>

	<?php get_footer(); ?>
	<?php wp_footer(); ?>

	<script>
		// Use GMaps
		function initMap() {
			const coordinates = {
				lat: 50.49117878739162,
				lng: 30.47556155622631
			};
			const map = new google.maps.Map(document.querySelector("#map"), {
				center: coordinates,
				zoom: 17,
				disableDefaultUI: false,
				scrollwheel: false,
			});
			const marker = new google.maps.Marker({
				position: coordinates,
				map: map,
				icon: '<?= B_IMG_DIR; ?>/marker.svg'
			});
		}
	</script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUP-_EwsSSdNItxU_gnpAfsC_rdGv_qsg&callback=initMap"></script>
</body>
</html>