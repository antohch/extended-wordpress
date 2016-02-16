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
function my_list_tags($echo = true){
	$tags = get_the_tags();
	$tag_str = null;
	if($tags){
		$tag_str = "<p>";
		foreach($tags as $tag){
			$tag_str .= $tag->name . ', ';
		}
		$tag_str = rtrim($tag_str, ', ');
		$tag_str .= "</p>";
		
		if ($echo){
			echo $tag_str;
		}else{
			return $tag_str;
		}
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

/* сайдбар продфолио*/
register_sidebar(array(
	'name' => 'Сайдбар записи портфолио',
	'id' => 'single_portfolio',
	'description' => 'используйте виджет текст, для добавления html кода блока клиенты',
	'before_title' => '<h3><span>',
	'after_title' => '</span></h3>',
	'before_widget' => '',
	'after_widget' => '',
	
));

/* метки категории */
function get_tags_in_cat($cat_id){
	$posts = get_posts(array('category' => $cat_id, 'namberposts' => -1));
	$tags = array();
	foreach($posts as $post){
		$post_tags = get_the_tags($post->ID);
		if(!empty($post_tags)){
			foreach($post_tags as $tag){
				$tags[$tag->term_id] = $tag->name;
			}
		}
	}
	asort($tags);
	return $tags;
}

/**
* пагинация
**/
function wp_corenavi(){
	global $wp_query, $wp_rewrite;
	$pages = '';
	$max = $wp_query->max_num_pages;
	if (!$current = get_query_var('paged')) $current = 1;
	$a['base'] = str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999)));
	$a['total'] = $max;
	$a['current'] = $current;

	$total = 0; //1 - выводить текст "Страница N из N", 0 - не выводить
	$a['mid_size'] = 2; //сколько ссылок показывать слева и справа от текущей
	$a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
	$a['prev_text'] = '&laquo;'; //текст ссылки "Предыдущая страница"
	$a['next_text'] = '&raquo;'; //текст ссылки "Следующая страница"

	if ($max > 1) echo '<div class="pager">';
	if ($total == 1 && $max > 1) $pages = '<span class="pages">Страница ' . $current . ' из ' . $max . '</span>'."\r\n";
	echo $pages . paginate_links($a);
	if ($max > 1) echo '</div>';
}

//функция хлебные крошки
function link_b($mypost = ''){
	global $post;
	if ($mypost == ''){
		$mypost = $post;
	}
	if($mypost->post_type == "post"){
		$single['link'] = get_permalink($mypost->ID);
		$single['title'] = $mypost->post_title;
		$array_cat = wp_get_post_categories($mypost->ID);
		if(is_array($array_cat)){
			$i = 0;
			$col_arr = $i;
			$catAll = array();
			foreach($array_cat as $arrayCatOne){
				$single['category'][] = $arrayCatOne; 
				$idParentCat = get_category($arrayCatOne)->parent;
				//$single['parent'][] = $idParentCat;
				$single['parent'][] = $idParentCat;
				if(!empty($idParentCat)){
					function get_parent($parent_in){
						
						if(empty(get_category($parent_in)->parent)){
							return true;
						}
						static $singleIn;
						$singleIn['parent'][] = get_category($parent_in)->parent;
						get_parent(end($singleIn['parent']));
						return $singleIn;

					}
					$single['parent'][] = get_parent($idParentCat);
					//global $singleIn;
					//var_dump($singleIn);
				}
				/*while($i == $col_arr){
					$parent_isset = get_category($single['parent'][$col_arr])->parent;
					if(!empty($parent_isset)){
						$single['parent'][] = get_category($single['parent'][$col_arr])->parent;
						$parent_isset = null;
						$col_arr++;
					}
					$i++;
				}*/
			}
		}
		array_pop($single['parent']);

		$link_b = "<p class = 'link_b'><a href='". home_url() ."'>Home</a>  /  ";
		if(is_array($single['parent'])){
			foreach(array_reverse($single['parent']) as $parent){
				$link_b .= "<a href='".get_category_link($parent)."'>".get_cat_name($parent)."</a> / ";
			}
		}
		if (is_array($single['category'])){
			foreach($single['category'] as $cat){
				$link_b .= "<a href='".get_category_link($cat)."'>".get_cat_name($cat)."</a>, ";
			}
			$link_b = substr($link_b, 0, -2);
		}

		$link_b .= " / ". $single['title'];
		$link_b .= "</p>";

		print_r($link_b);
	}
}

