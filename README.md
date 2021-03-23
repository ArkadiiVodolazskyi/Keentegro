
sass --watch sass/main.sass:css/main.css --sourcemap=none --no-cache

https://fontawesome.com/icons?d=gallery&p=2&q=arrow&m=free


1. Ховер состояния для элементов - самому придумать
2. header fixed - да
3. reviews - вроде первый

Todo:

ACF.
Header menu: output + adaptive styles.
Footer menu.
CPTs output.
Pagination.
Form header popup consult + styles.


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



1. + + + page-main

2. + + + archive-review

3. - single-reviews

4. + + + archive-blog

5. + + + single-blog

6. + + + archive-folio

7. + + + single-folio

8. + + +  archive-service

9. + + archive-service_category

10. + + + single-service

11. + + + page-about

12. + + + page-contacts


<?php
	/*
	* Template Name: Keentegro | page-home
	* Template Post Type: page
	*/
?>

<?php get_header(); ?>


<?= B_IMG_DIR; ?>


<?php wp_footer(); ?>
<?php get_footer(); ?>