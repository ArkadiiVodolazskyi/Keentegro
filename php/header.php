	<?php
		global $template;
		$template = basename($template);
	?>

	<!-- I'm using template <?= $template ?> -->

	<!-- Modal form - consult -->
	<?php echo do_shortcode( '[wpforms id="238" title="false"]' ); ?>

	<!-- header start -->
	<header class="<?= is_front_page() || wp_basename(get_page_uri()) == 'o-nas' ? 'home text-w' : 'text-b'; ?>">
		<div class="wrapper">
			<div class="left">
				<a href="<?= get_home_url(); ?>" class="logo">
					<img src="<?= B_IMG_DIR; ?>/header_logo.png" alt="logo" />
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
						$header_nav = get_field('header_nav', 'options');
						foreach($header_nav as $nav_item) {
							$link = $nav_item['link'];
							$submenus = $nav_item['submenu'];
					?>
						<li>
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