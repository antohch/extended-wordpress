<?
/*
Загружаемые скрипты и стили
*/
function load_style_script(){
	wp_enqueue_script('jquery-google', "http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js");	
	wp_enqueue_script('jquery-flexslider', get_template_directory_uri() . "/js/jquery.flexslider.js");
	wp_enqueue_script('shCore', get_template_directory_uri() . "/js/shCore.js");
	wp_enqueue_script('jquery-shBrushXml', get_template_directory_uri() . "/js/shBrushXml.js");
	wp_enqueue_script('jquery-shBrushJScript', get_template_directory_uri() . "/js/shBrushJScript.js");
	wp_enqueue_script('jquery-easing', get_template_directory_uri() . "/js/jquery.easing.js");
	wp_enqueue_script('jquery-mousewheel', get_template_directory_uri() . "/js/jquery.mousewheel.js");
	wp_enqueue_script('jquery-demo', get_template_directory_uri() . "/js/demo.js");
	wp_enqueue_script('jquery-ui-1.9.2', get_template_directory_uri() . "/js/jquery-ui-1.9.2.custom.js");
	wp_enqueue_script('modernizr', get_template_directory_uri() . "/js/modernizr.js");

	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('style-flexslider', get_template_directory_uri() . '/flexslider.css');
	wp_enqueue_style('style-jquery-ui-1.9.2.custom', get_template_directory_uri() . '/css/custom-theme/jquery-ui-1.9.2.custom.css');
}


/**
* загружаем скрипты и стили
*/
add_action('wp_enqueue_scripts', 'load_style_script');


/*опции*/
function my_more_options(){
	add_settings_field(
		'phone',//id
		'Телефон',//название поле
		'display_phone',//callback
		'general');//'general'-где выводить. Cоздаем поле опции
	register_setting(
		'general',//название группу к какой будет принадлежать опция
		'my_phone');//'my_phone' - название опции, которая будет сохраняться в БД. Регистрирует новую опцию и callback функции (функцию обратного вызова) для обработки значения опции при её сохранении в БД
}
add_action('admin_init', 'my_more_options');//привязать к хуку
function display_phone(){
	echo "<input type='text' class='regular-text' name='my_phone' value='".esc_attr(get_option('my_phone'))."'>";
}

/*иконки*/
register_sidebar(array(
	'name' => 'Иконки в шапке',
	'id' => 'icons_header',
	'description' => 'используйте виджет текст, для добавления html кода иконок',
	'before_widget' => '',
	'after_widget' => '',
	
));

/*меню регистрируем*/
register_nav_menus(array(
	'header_menu' => 'меню в шапк',
	'footer_menu' => 'меню в подвале',
	
));

/*слайдер на главной*/
add_action('init', 'slider_index');
function slider_index(){
	register_post_type('slider', array(
		'public' => true,
		'supports' => array('title', 'editor', 'thumbnail'),
		'labels' => array(
			'name' => 'Слайдеры',
			'add_new' => 'Добавить слайдер',
			'all_items' => 'Все слайдеры',
			'add_new_item' => 'Добавить слайдер',
		),
		'menu_position' => 100,
		'menu_icon' => admin_url().'/images/media-button.png',
	));
}

/*Копирайт*/
add_action('init', 'copirite_index');
function copirite_index(){
	register_post_type('copirite', array(
		'public' => true,
		'supports' => array('title'),
		'labels' => array(
			'name' => 'Копирайт',
			'add_new' => 'Добавить новый копирайт',
			'all_items' => 'Все коприайты',
			'add_new_item' => 'Добавить копирайт',
		),
		'menu_position' => 100,
		'menu_icon' => admin_url().'/images/media-button.png',
	));
}

/*поддержка миниатюр*/
add_theme_support('post-thumbnails');

/*список меток*/
function my_list_tags(){
	$tags = get_the_tags();
	$tag_str = null;
	if($tags){
		$tag_str = "<p>";
		foreach($tags as $tag){
			$tag_str .= $tag->name . ', ';
		}
		$tag_str = rtrim($tag_str, ', ');
		$tag_str .= "</p>";
		echo $tag_str;
	}
}

/*клиенты*/
register_sidebar(array(
	'name' => 'Клиенты',
	'id' => 'clients',
	'description' => 'используйте виджет текст, для добавления html кода блока клиенты',
	'before_widget' => '',
	'after_widget' => '',
	
));