			<!-- footer start -->
			<footer class="bg text-w">
				<img src="<?= B_IMG_DIR; ?>/footer_bg.png" alt="footer_bg">
				<div class="wrapper">
					<div class="clients">
						<h2>Клиенты и партнеры</h2>
						<div class="slick_lg">
							<img src="<?= B_IMG_DIR; ?>/footer_client_1.png" alt="client" />
							<img src="<?= B_IMG_DIR; ?>/footer_client_2.png" alt="client" />
							<img src="<?= B_IMG_DIR; ?>/footer_client_3.png" alt="client" />
							<img src="<?= B_IMG_DIR; ?>/footer_client_4.png" alt="client" />
							<img src="<?= B_IMG_DIR; ?>/footer_client_5.png" alt="client" />
							<img src="<?= B_IMG_DIR; ?>/footer_client_6.png" alt="client" />
							<img src="<?= B_IMG_DIR; ?>/footer_client_1.png" alt="client" />
							<img src="<?= B_IMG_DIR; ?>/footer_client_2.png" alt="client" />
							<img src="<?= B_IMG_DIR; ?>/footer_client_3.png" alt="client" />
							<img src="<?= B_IMG_DIR; ?>/footer_client_4.png" alt="client" />
							<img src="<?= B_IMG_DIR; ?>/footer_client_5.png" alt="client" />
							<img src="<?= B_IMG_DIR; ?>/footer_client_6.png" alt="client" />
						</div>
					</div>

					<nav>
						<div>
							<div class="figure_1"></div>
							<h3>
								Компания
								<button class="expand">
									<i class="fas fa-chevron-down"></i>
								</button>
							</h3>
							<ul>
								<li><a href="">О компании</a></li>
								<li><a href="">Лицензии и сертификаты</a></li>
								<li><a href="">Вакансии</a></li>
								<li><a href="">Клиенты</a></li>
								<li><a href="">Блог</a></li>
								<li><a href="">Отзывы</a></li>
								<li><a href="">Контакты</a></li>
							</ul>
						</div>

						<div>
							<div class="figure_1"></div>
							<h3>
								Услуги
								<button class="expand">
									<i class="fas fa-chevron-down"></i>
								</button>
							</h3>
							<ul>
								<li><a href="">Строительно-монтажные работы</a></li>
								<li><a href="">Монтаж инженерных систем</a></li>
								<li><a href="">Интегрированные системы безопасности</a></li>
								<li>
									<a href=""
										>Разработка и интеграция стационарных систем наблюдения</a
									>
								</li>
								<li><a href="">Пуско-наладочные работы</a></li>
							</ul>
						</div>

						<div>
							<div class="figure_1"></div>
							<ul>
								<li>Киев, пер. Куреневский 17Б</li>
								<li>
									<a href="tel:+38 044 537 0155">+38 044 537 0155</a>
								</li>
								<li>
									<a href="mailto:sm@keentegro.com">sm@keentegro.com</a>
								</li>
								<li>Пн-пт, с 9:00 до 18:00</li>
								<li>
									<a href="#">
										<img
											src="<?= B_IMG_DIR; ?>/icon_facebook.svg"
											alt="icon_facebook"
											class="img-svg"
										/>
									</a>
									<a href="#">
										<img
											src="<?= B_IMG_DIR; ?>/icon_linkedin.svg"
											alt="icon_linkedin"
											class="img-svg"
										/>
									</a>
								</li>
							</ul>
						</div>
					</nav>

					<div class="copyright text-w">
						<span>© Keentegro 2009-2021</span>
						<span>Точная инженерия и конструирование</span>
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
				$("footer .clients .slick_lg").not('.slick-initialized').slick({
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