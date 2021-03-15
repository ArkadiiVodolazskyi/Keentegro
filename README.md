
sass --watch sass/main.sass:css/main.css --sourcemap=none --no-cache

https://fontawesome.com/icons?d=gallery&p=2&q=arrow&m=free

Вопросы:
1. Иконки: fontawesome (нужны названия) / рандомные скачанные (нужны исходники).
2. Ховер состояния для элементов.
3. home folio - когда слайдер сдвигается влево, должны ли карточки быть видны слева так же, как и справа?
4. header fixed?

Не забыть доделки:
1. page-reviews
2. пагинация на страницах архивов
3. single-folio - gallery - slick
4. single-service - form

Названия секций:

slick_lg - начиная с больших экранов
slick_mb - только на мобильных

header
	logo
	hamburger
		mobile - expand
		interesting submenu shift (like slider)
	nav
	contact_phone
	consult (popup) - Форма Консультация Popup - Gravity Forms
	languages - Языки

footer
	clients (slick-lg)
	nav
		mobile - expand
	copyright



1. + page-main
	banner
		mobile - slider
	services - категория "Сервисы"
	facts
		mobile - slider
	portfolio - категория "Наши работы"/"Портфолио"
		lg - slider
	reviews
		mobile - slider
	blog - категория Блог
		mobile - slider

2-3. ? page-reviews
	? Какая сущность будет у review?
	review text
	review img - fullscreen
	pagination

4. + archive-blog
	pagination

5. + single-blog
	prev/next post
	share buttons
	also read - blog
		mobile - slider

6. + archive-folio
	pagination

7. + single-folio
	gallery
		mobile - slider
	prev/next post
	share buttons
	also read - folio
		mobile - slider

8. + archive-service
	pagination

9. + archive-service_category

10. + single-service
	consult - Форма Консультация Static - Gravity Forms

11. + page-about
	banner
	history
		mobile - slider
	mission
	history

12. ? page-contacts
	map
	connect with us - Форма Консультация Popup или другая? - Gravity Forms

