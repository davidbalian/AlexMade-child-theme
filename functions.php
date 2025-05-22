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
    $current_url = $_SERVER['REQUEST_URI'];
    $file = $type . '-box';
    
    // Check if the URL contains language indicators
    if (strpos($current_url, '/el/') !== false) {
        $file .= '_el';
    } elseif (strpos($current_url, '/ru/') !== false) {
        $file .= '_ru';
    }
    
    include_once($file . '.php');
}

/**
 * Get language-specific content and URLs
 * 
 * @param string $key The content key to retrieve
 * @return string The language-specific content
 */
function get_language_content($key) {
    $current_url = $_SERVER['REQUEST_URI'];
    $lang = '';
    
    // Determine current language from URL
    if (strpos($current_url, '/el/') !== false) {
        $lang = 'el';
    } elseif (strpos($current_url, '/ru/') !== false) {
        $lang = 'ru';
    }
    
    // Language-specific content mapping
    $content_map = [
        'home' => [
            'default' => 'Home',
            'el' => 'Αρχική',
            'ru' => 'Главная'
        ],
        'more' => [
            'default' => 'More',
            'el' => 'Περισσότερο',
            'ru' => 'Подробнее'
        ],
        'book' => [
            'default' => 'Book',
            'el' => 'Βιβλίο',
            'ru' => 'Забронировать'
        ]
    ];
    
    // Return language-specific content or default if not found
    return isset($content_map[$key][$lang]) ? $content_map[$key][$lang] : $content_map[$key]['default'];
}

/**
 * Get language-specific URL
 * 
 * @param string $path The path to append to the language-specific URL
 * @return string The complete language-specific URL
 */
function get_language_url($path = '') {
    $current_url = $_SERVER['REQUEST_URI'];
    $lang = '';
    
    // Determine current language from URL
    if (strpos($current_url, '/el/') !== false) {
        $lang = 'el';
    } elseif (strpos($current_url, '/ru/') !== false) {
        $lang = 'ru';
    }
    
    // Build language-specific URL
    $base_url = get_home_url();
    if ($lang) {
        $base_url .= '/' . $lang;
    }
    
    return $base_url . '/' . ltrim($path, '/');
}

/**
 * Filter the template hierarchy to use our consolidated template
 */
function use_consolidated_template($templates) {
    $current_url = $_SERVER['REQUEST_URI'];
    
    // Check if we're on an activities page
    if (strpos($current_url, 'activities') !== false) {
        // Add our consolidated template to the beginning of the template hierarchy
        array_unshift($templates, 'template-activities-consolidated.php');
    }
    
    return $templates;
}
add_filter('page_template_hierarchy', 'use_consolidated_template');

		
	
?>