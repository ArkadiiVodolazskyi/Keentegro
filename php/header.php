	<?php
		global $template;
		$template = basename($template);
	?>

	<!-- I'm using template <?= $template ?> -->

	<div class="logo_bg"></div>

	<!-- Modal form - consult -->
	<?php echo do_shortcode( '[wpforms id="238" title="false"]' ); ?>

	<script>
		$('#wpforms-238-field_2').click(function() {
			$(this).setCursorPosition(5);
		}).mask(
			"+38 (999) 999-9999",
			{autoclear: false}
		);
	</script>

	<!-- Overlay -->
	<div id="overlay"></div>

	<!-- Header hamb desktop start -->
	<header class="desktop">

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
						<li>
							<a href="<?= get_sub_field('link')['url']; ?>">
								<?= get_sub_field('link')['title']; ?>
							</a>
						</li>
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
							<?php foreach ($socials as $key=>$social) { ?>
								<a href="<?= $social['url']; ?>">
									<img src="<?= B_IMG_DIR; ?>/icon_<?= $social['social_type']; ?>.svg" alt="icon_facebook" class="img-svg">
								</a>
							<?php } ?>
						</li>
					<?php } ?>

			</ul>
		</div>

		<button class="closeHamb">
			<img src="<?= B_IMG_DIR; ?>/cross.svg" alt="closeHamb" class="img-svg">
		</button>

	</header>
	<!-- Header hamb desktop end -->

	<!-- Header hamb mobile start -->
	<header class="mobile bg-b text-w">

		<div class="up">
			<div class="wrapper">
				<a href="<?= get_home_url(); ?>" class="logo">
					<img src="<?= B_IMG_DIR; ?>/header_logo.png" alt="logo" />
				</a>
				<button class="closeHamb">
					<img src="<?= B_IMG_DIR; ?>/cross.svg" alt="closeHamb" class="img-svg">
				</button>
			</div>
		</div>

		<div class="down">

			<div class="wrapper">

			<div class="mainMenu">

				<ul class="mainLinks">

					<?php
						$currentUrl = $_SERVER['REQUEST_URI'];
						$header_nav = get_field('header_nav', 'options');

						foreach($header_nav as $key=>$nav_item) {
								$link = $nav_item['link'];
								$submenus = $nav_item['submenu'];
							?>

							<li
								<?= wp_basename($link['url']) == wp_basename($currentUrl) ? "class='current'" : ""; ?>
								<?php if ($submenus && count($submenus)) { ?>
									data-parentIndex = "<?= $key; ?>"
								<?php } ?>
							>
								<a href="<?= $link['url']; ?>">
									<?= $link['title']; ?>
								</a>
								<?php if ($submenus && count($submenus)) { ?>
									<i class="fas fa-chevron-right"></i>
								<?php } ?>
							</li>

					<?php }; ?>

				</ul>

				<div class="contact">

					<?php
						$phones = get_field('phones', 'options');
						if ($phones && count($phones)) {
					?>
						<ul class="contact_phone">
							<?php foreach($phones as $phone) { ?>
								<li>
									<a href="tel:<?= $phone['phone']; ?>">
										<?= $phone['phone']; ?>
									</a>
								</li>
							<?php } ?>
						</ul>
					<?php } ?>

					<button class="consult openConsult">Консультация</button>

					<ul class="languages">

						<?php
							$languages = pll_the_languages([
								'raw' => true,
								'hide_if_empty'=>0,
							]);

							foreach ($languages as $language) {
								$url = $language['url'];
								$name = mb_substr($language['name'], 0, 3);
						?>
							<li class="<?= $language['current_lang'] ? 'currentLang' : '' ?>">
								<a
									<?php if (!$language['current_lang']) { ?>
										href="<?= $url; ?>"
									<?php } ?>
								>
									<?= $name; ?>
								</a>
							</li>
						<?php } ?>

					</ul>

				</div>

				</div>

				<div class="subMenus">

				<?php
					$currentUrl = $_SERVER['REQUEST_URI'];
					$header_nav = get_field('header_nav', 'options');

					foreach($header_nav as $key=>$nav_item) {
						$link = $nav_item['link'];
						$submenus = $nav_item['submenu'];

						if ($submenus && count($submenus)) {

						echo '<ul data-childIndex="' . $key . '">';
						echo '<li class="title"><i class="fas fa-chevron-left back"></i>' . $link['title'] . '</li>';

						foreach($submenus as $submenu) {
							$submenu = $submenu['submenu_link'];
					?>

							<li <?= wp_basename($submenu['url']) == wp_basename($currentUrl) ? "class='current'" : ""; ?>>
								<a href="<?= $submenu['url']; ?>">
									<?= $submenu['title']; ?>
								</a>
							</li>

				<?php
							}
						echo '</ul>';
						}
					};
				?>

				</div>

			</div>

		</div>

	</header>
	<!-- Header hamb mobile end -->

	<!-- header start -->
	<header class="<?= is_front_page() || wp_basename(get_page_uri()) == 'o-nas' ? 'home text-w' : 'text-b'; ?>">
		<div class="wrapper">
			<div class="left">
				<a href="<?= get_home_url(); ?>" class="logo">
					<img src="<?= B_IMG_DIR; ?>/header_logo.svg" alt="logo" />
				</a>
				<button class="hamburger">
					<img
						src="<?= B_IMG_DIR; ?>/header_hamburger.svg"
						class="img-svg"
						alt="hamburger"
					/>
				</button>

				<ul class="navigation">

					<?php
						$currentUrl = $_SERVER['REQUEST_URI'];
						$header_nav = get_field('header_nav', 'options');

						foreach($header_nav as $nav_item) {
							$link = $nav_item['link'];
							$submenus = $nav_item['submenu'];
					?>
						<li <?= wp_basename($link['url']) == wp_basename($currentUrl) ? "class='current'" : ""; ?>>
							<a href="<?= $link['url']; ?>">
								<?= $link['title']; ?>
							</a>

							<?php if ($submenus && count($submenus)) { ?>
								<i class="fas fa-chevron-down"></i>
								<ul class="submenu">
									<?php foreach($submenus as $submenu) {
											$submenu = $submenu['submenu_link'];
										?>
										<li>
											<a href="<?= $submenu['url']; ?>">
												<?= $submenu['title']; ?>
											</a>
										</li>
									<?php }; ?>
								</ul>
							<?php }; ?>

						</li>
					<?php }; ?>

				</ul>

			</div>

			<div class="right">

				<?php
					$phones = get_field('phones', 'options');
					if ($phones && count($phones)) {
				?>
					<div class="contact_phone">

						<a href="tel:<?= $phone[0]['phone']; ?>">
							<?= $phones[0]['phone']; ?>
						</a>

						<?php if (count($phones) > 1) { ?>
							<i class="fas fa-chevron-down"></i>
							<ul class="submenu">
								<?php foreach($phones as $key=>$phone) {
									if ($key != 0) {
								?>
									<li>
										<a href="tel:<?= $phone['phone']; ?>">
											<?= $phone['phone']; ?>
										</a>
									</li>
								<?php } } ?>
							</ul>
						<?php } ?>

					</div>
				<?php } ?>

				<button class="consult openConsult">Консультация</button>

				<div class="languages">

					<?php
						$languages = pll_the_languages([
							'raw' => true,
							'hide_if_empty'=>0,
						]);

						// Output current language
						foreach ($languages as $language) {
							$url = $language['url'];
							$name = mb_substr($language['name'], 0, 3);
							if ($language['current_lang']) {
					?>
						<a href="<?= $url; ?>">
							<?= $name; ?>
						</a>
						<i class="fas fa-chevron-down"></i>
					<?php } } ?>

					 <!-- Output other languages -->
					<ul class="submenu">
						<?php
							foreach ($languages as $language) {
								$url = $language['url'];
								$name = mb_substr($language['name'], 0, 3);
								if (!$language['current_lang']) {
						?>
							<li>
								<a href="<?= $url; ?>">
									<?= $name; ?>
								</a>
							</li>
						<?php } } ?>
					</ul>

				</div>
			</div>
		</div>
	</header>
	<!-- header end -->