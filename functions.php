<?php 

    if (function_exists('acf_add_options_page')) {

	    $parent = acf_add_options_page(array(
	        'page_title' => 'ACF Settings',
	        'menu_title' => 'Основное',
	        'icon_url' => 'dashicons-art',
	    ));

	}

	register_nav_menus(array(
		'top'    => 'Меню',    
		'top_el' => 'Меню el',
		'top_ru' => 'Меню ru',   
		));	

		
	
?>