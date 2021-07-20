
# Todo

## Polylang settings
+ The language is set from the directory name in pretty permalinks

## functions.php

// Add options for header/footer ACF
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Общие',
		'menu_title'	=> 'Общие',
		'menu_slug' 	=> 'acf-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Настройки страницы Спектаклей',
		'menu_title'	=> 'Спектакли',
		'parent_slug'	=> 'acf-options',
		'menu_slug' 	=> 'acf-options-spectacl',
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Общие UK',
		'menu_title'	=> 'Общие UK',
		'menu_slug' 	=> 'acf-options_uk',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Настройки страницы Спектаклей UK',
		'menu_title'	=> 'Спектакли UK',
		'parent_slug'	=> 'acf-options_uk',
		'menu_slug' 	=> 'acf-options-spectacl_uk',
	));

}

## Duplicate ACF Fields for UK

## header.php

<?php
	global $options;
	$options = pll_current_language() == 'ru' ? 'options' : 'options_uk';
?>

## integrate-gravity-forms-polylang.0.2 for translating forms fields