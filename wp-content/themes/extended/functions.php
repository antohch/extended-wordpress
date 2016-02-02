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