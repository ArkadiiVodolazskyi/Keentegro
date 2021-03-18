
	<!-- header start -->
	<header class="<?= is_front_page() ? 'home' : ''; ?> text-w">
		<div class="wrapper">
			<div class="left">
				<a href="#" class="logo">
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
					<li>
						<a href="#">Услуги</a>
					</li>
					<li>
						<a href="#">Компания</a>
						<i class="fas fa-chevron-down"></i>
					</li>
					<li>
						<a href="#">Проекты</a>
					</li>
					<li>
						<a href="#">Блог</a>
					</li>
				</ul>

			</div>

			<div class="right">
				<div class="contact_phone">
					<span>+38 048 794 5654</span>
					<i class="fas fa-chevron-down"></i>
				</div>
				<button class="consult">Консультация</button>

				<!-- While on WP there will be wp_languages instead -->
				<ul class="languages">
					<li>Рус</li>
					<i class="fas fa-chevron-down"></i>
				</ul>
			</div>
		</div>
	</header>
	<!-- header end -->