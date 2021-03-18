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
					<li>Киев, пер. Куреневский 17Б</li>
					<li>
						<a href="tel:+38 044 537 0155">
							+38 044 537 0155
						</a>
					</li>
					<li>
						<a href="mailto:sm@keentegro.com">
							sm@keentegro.com
						</a>
					</li>
					<li>
						Пн-пт, с 9:00 до 18:00
					</li>
					<li>
						<button>
							Свяжитесь с нами
						</button>
						<div class="socials">
							<a href="#">
								<img src="<?= B_IMG_DIR; ?>/icon_facebook.svg" alt="icon_facebook" class="img-svg">
							</a>
							<a href="#">
								<img src="<?= B_IMG_DIR; ?>/icon_linkedin.svg" alt="icon_linkedin" class="img-svg">
							</a>
						</div>
					</li>
				</ul>
				<div id="map" class="right">

				</div>
			</div>
		</div>
	</section>

	<?php wp_footer(); ?>
	<?php get_footer(); ?>

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