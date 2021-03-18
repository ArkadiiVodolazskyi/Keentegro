
sass --watch sass/main.sass:css/main.css --sourcemap=none --no-cache

https://fontawesome.com/icons?d=gallery&p=2&q=arrow&m=free

Вопросы:
1. Ховер состояния для элементов.
2. header fixed?
3. reviews - какой из двух вариантов шаблона верстать?
4. Почему на странице 010 и 012 в footer нет слайдера с компаниями? Так и задумано?

Не забыть доделки:
0. slick_mb banner spans
1. пагинация на страницах архивов
2. single-service - form
3. header navmenu
4. footer navmenu
5. header mobile menu
6. cpt, taxonomies
7. forms: static, popup, validation


Ориентировочные брейкпоинты:
1920
1600
1440
1280
1024
768
320

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



1. + + page-main
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

2-3. + + archive-reviews
	review text
	review img - fullscreen
	pagination

4. + + archive-blog
	pagination

5. + + single-blog
	prev/next post
	share buttons
	also read - blog
		mobile - slider

6. + + archive-folio
	pagination

7. + + single-folio
	gallery
		mobile - slider
	prev/next post
	share buttons
	also read - folio
		mobile - slider

8. + +  archive-service
	pagination

9. + + archive-service_category

10. + + single-service
	consult - Форма Консультация Static - Gravity Forms

11. + + page-about
	banner
	history
		mobile - slider
	mission
	history

12. + + page-contacts
	map
	connect with us - Форма Консультация Popup

