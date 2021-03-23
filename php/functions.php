<?php

	// SVG support
	function codeless_file_types_to_uploads($file_types){
		$new_filetypes = array();
		$new_filetypes['svg'] = 'image/svg+xml';
		$file_types = array_merge($file_types, $new_filetypes );
		return $file_types;
	}
	add_filter('upload_mimes', 'codeless_file_types_to_uploads');

	// Add options for header/footer ACF
	if( function_exists('acf_add_options_page') ) {
		acf_add_options_page(array(
			'page_title' 	=> 'Общие',
			'menu_title'	=> 'Общие',
			'menu_slug' 	=> 'acf-options',
			'capability'	=> 'edit_posts',
			'redirect'		=> false,
		));
	}
	add_filter("show_admin_bar", "__return_false");

	// Define shorter paths
	define("B_THEME_ROOT", get_template_directory_uri());
	define("B_CSS_DIR", B_THEME_ROOT . "/css");
	define("B_JS_DIR", B_THEME_ROOT . "/js");
	define("B_IMG_DIR", B_THEME_ROOT . "/img");

	function register_styles() {
		wp_register_style( 'animatecss', B_CSS_DIR . "/animate.min.css", null );
		wp_register_style( 'theme_styles', B_CSS_DIR . "/main.css?", rand(1,9999) );
		wp_register_style( 'fonts', B_THEME_ROOT . "/fonts/stylesheet.css", null );

		wp_enqueue_style( 'animatecss' );
		wp_enqueue_style( 'theme_styles' );
		wp_enqueue_style( 'fonts' );
	}

	function register_scripts() {
		wp_deregister_script('jquery');
		wp_register_script( 'jquery', B_JS_DIR . "/libs/jquery-3.5.1.min.js", array(), date("h:i:s"), false);
		wp_register_script( 'slick', B_JS_DIR . "/libs/slick.min.js", array(), date("h:i:s"), false );
		wp_register_script( 'wowjs', B_JS_DIR . "/libs/wow.min.js", array(), null, true );
		wp_register_script( 'mainjs', B_JS_DIR . "/main.js", array(), date("h:i:s"), true );

		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'slick' );
		wp_enqueue_script( 'wowjs' );
		wp_enqueue_script( 'mainjs' );
	}

	function theme_setup() {
		add_action( 'wp_enqueue_scripts', 'register_styles' );
		add_action( 'wp_enqueue_scripts', 'register_scripts' );
	}
	add_action( 'after_setup_theme', 'theme_setup' );

	// Create custom post types
	function my_custom_init() {

		// Create custom post type - review
		register_post_type('review', array(
			'labels'             => array(
				'name'               => 'Отзывы',
				'singular_name'      => 'Отзыв',
				'add_new'            => 'Добавить отзыв',
				'add_new_item'       => 'Добавить отзыв',
				'edit_item'          => 'Редактировать отзыв',
				'new_item'           => 'Добавить отзыв',
				'view_item'          => 'Посмотреть отзыв',
				'search_items'       => 'Найти отзыв',
				'not_found'          => 'Отзывов не найдено',
				'not_found_in_trash' => 'В корзине отзывов не найдено',
				'parent_item_colon'  => '',
				'menu_name'          => 'Отзывы',
			),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array('title','editor','author','thumbnail','excerpt','comments'),
			'rewrite' 						=> array( 'slug' => 'blog', 'with_front' => false ),
			'has_archive' 				=> 'review',
			'menu_icon'           => 'dashicons-format-quote',
		));

		// Create custom post type - blog
		register_post_type('blog', array(
			'labels'             => array(
				'name'               => 'Блог',
				'singular_name'      => 'Блог',
				'add_new'            => 'Добавить новость',
				'add_new_item'       => 'Добавить новость',
				'edit_item'          => 'Редактировать новость',
				'new_item'           => 'Добавить новость',
				'view_item'          => 'Посмотреть новость',
				'search_items'       => 'Найти новость',
				'not_found'          => 'Новостей не найдено',
				'not_found_in_trash' => 'В корзине новостей не найдено',
				'parent_item_colon'  => '',
				'menu_name'          => 'Блог'
			),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array('title','editor','author','thumbnail','excerpt','comments'),
			'rewrite' 						=> array( 'slug' => 'blog', 'with_front' => false ),
			'has_archive' 				=> 'blog',
			'menu_icon'           => 'dashicons-text-page',
		));

		// Create custom post type - folio
		register_post_type('folio', array(
			'labels'             => array(
				'name'               => 'Проекты',
				'singular_name'      => 'Проект',
				'add_new'            => 'Добавить проект',
				'add_new_item'       => 'Добавить проект',
				'edit_item'          => 'Редактировать проект',
				'new_item'           => 'Добавить проект',
				'view_item'          => 'Посмотреть проект',
				'search_items'       => 'Найти проект',
				'not_found'          => 'Проектов не найдено',
				'not_found_in_trash' => 'В корзине проектов не найдено',
				'parent_item_colon'  => '',
				'menu_name'          => 'Проекты'
			),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array('title','editor','author','thumbnail','excerpt','comments'),
			'rewrite' 						=> array( 'slug' => 'folio', 'with_front' => false ),
			'has_archive' 				=> 'folio',
			'menu_icon'           => 'dashicons-admin-multisite',
		));

		// Create custom post type - service_type
		register_post_type('service', array(
				'labels'             	=> array(
					'name'               => 'Услуга',
					'singular_name'      => 'Услуги',
					'add_new'            => 'Добавить новую',
					'add_new_item'       => 'Добавить новую',
					'edit_item'          => 'Редактировать запись',
					'new_item'           => 'Новая запись',
					'view_item'          => 'Посмотреть запись',
					'search_items'       => 'Найти запись',
					'not_found'          => 'Записей не найдено',
					'not_found_in_trash' => 'В корзине записей не найдено',
					'parent_item_colon'  => '',
					'menu_name'          => 'Услуги'
				),
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'rewrite'            => true,
				'capability_type'    => 'post',
				'has_archive'        => false,
				'hierarchical'       => false,
				'menu_position'      => null,
				'supports'           => array('title','editor','author','thumbnail','excerpt','comments'),
				'rewrite'						 => array( 'slug' => 'service/%service_type%', 'with_front' => false ),
				'has_archive' 				=> 'service',
				'menu_icon'           => 'dashicons-admin-tools',
			)
		);

		// Create custom taxonomy - service
		register_taxonomy('service_type', array('service'), array(
			'labels' => array(
				'name'				=>'Категории услуг',
			),
			'hierarchical' => true,
			'rewrite'			=> array( 'slug' => 'service', 'with_front' => false ),
			'has_archive'	=> 'service',
		));

	}
	add_action('init', 'my_custom_init');

	// service
	## Отфильтруем ЧПУ произвольного типа
	add_filter('post_type_link', 'services_permalink', 1, 2);

	function services_permalink( $permalink, $post ){
		if( strpos($permalink, '%service_type%') === FALSE )
			return $permalink;

		$terms = get_the_terms($post, 'service_type');

		if( ! is_wp_error($terms) && !empty($terms) && is_object($terms[0]) ) {
			$taxonomy_slug = $terms[0]->slug;
			return str_replace('%service_type%', $taxonomy_slug, $permalink );
		}
		else {
			$slug = str_replace('%service_type%', $taxonomy_slug, $permalink );
			$basename = basename($slug);
			$slug = str_replace('/' . $basename, $basename, $slug );
			return $slug;
		}
	}

?>