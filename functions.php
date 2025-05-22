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

/**
 * Dynamically includes the correct header or footer based on the current language.
 *
 * @param string $type The type of include ('header' or 'footer').
 */
function include_language_specific_part($type) {
    $lang = get_locale(); // Get the current language
    $file = $type . '-box';
    if ($lang === 'el') {
        $file .= '_el';
    } elseif ($lang === 'ru') {
        $file .= '_ru';
    }
    include_once($file . '.php');
}

		
	
?>