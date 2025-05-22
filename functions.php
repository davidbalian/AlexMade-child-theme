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
 * Filter the template hierarchy to use our consolidated templates
 */
function use_consolidated_template($templates) {
    $current_url = $_SERVER['REQUEST_URI'];
    
    // Check for activity pages in all languages
    if (strpos($current_url, '/en/activities') !== false ||
        strpos($current_url, '/el/aktivnosti') !== false ||
        strpos($current_url, '/ru/activity_ru') !== false) {
        array_unshift($templates, 'template-activities-consolidated.php');
    }
    
    // Check for contact pages in all languages
    if (strpos($current_url, '/en/contacts') !== false ||
        strpos($current_url, '/el/kontakty') !== false ||
        strpos($current_url, '/ru/contacts_ru') !== false) {
        array_unshift($templates, 'template-contacts-consolidated.php');
    }
    
    // Check for about pages in all languages
    if (strpos($current_url, '/en/about') !== false ||
        strpos($current_url, '/el/o-nas') !== false ||
        strpos($current_url, '/ru/about') !== false) {
        array_unshift($templates, 'template-about-consolidated.php');
    }
    
    // Check for events pages in all languages
    if (strpos($current_url, '/en/events') !== false ||
        strpos($current_url, '/el/sobytiya') !== false ||
        strpos($current_url, '/ru/events_ru') !== false) {
        array_unshift($templates, 'template-events-consolidated.php');
    }
    
    return $templates;
}
add_filter('page_template_hierarchy', 'use_consolidated_template');

/**
 * Get the URL for switching languages while maintaining the current page
 * 
 * @param string $target_lang The target language code (en, el, ru)
 * @return string The URL for the same page in the target language
 */
function get_language_switch_url($target_lang) {
    $current_url = $_SERVER['REQUEST_URI'];
    $current_path = parse_url($current_url, PHP_URL_PATH);
    
    // Get the current template file
    global $template;
    $template_file = basename($template);
    
    // Check if we're using a consolidated template
    $is_consolidated = strpos($template_file, '-consolidated.php') !== false;
    
    if ($is_consolidated) {
        // For consolidated templates, just switch the language prefix
        $path_without_lang = preg_replace('#^/(en|el|ru)/#', '/', $current_path);
        return get_home_url() . '/' . $target_lang . $path_without_lang;
    } else {
        // First check the URL mapping
        $page_mapping = [
            'activities' => [
                'en' => 'activities',
                'el' => 'aktivnosti',
                'ru' => 'activity_ru'
            ],
            'contacts' => [
                'en' => 'contacts',
                'el' => 'kontakty',
                'ru' => 'contacts_ru'
            ],
            'about' => [
                'en' => 'about',
                'el' => 'o-nas',
                'ru' => 'about'
            ],
            'events' => [
                'en' => 'events',
                'el' => 'sobytiya',
                'ru' => 'events_ru'
            ],
            'price' => [
                'en' => 'price',
                'el' => 'czeny',
                'ru' => 'prices_ru'
            ]
        ];
        
        // Remove current language prefix
        $path_without_lang = preg_replace('#^/(en|el|ru)/#', '/', $current_path);
        
        // Try to find a matching page in the mapping
        foreach ($page_mapping as $page => $slugs) {
            if (strpos($path_without_lang, '/' . $page) !== false) {
                return get_home_url() . '/' . $target_lang . '/' . $slugs[$target_lang];
            }
        }
        
        // If no mapping found, check for language-specific template
        $template_dir = dirname($template);
        $base_template = preg_replace('/_(en|el|ru)\.php$/', '.php', $template_file);
        $lang_template = preg_replace('/\.php$/', '_' . $target_lang . '.php', $base_template);
        
        if (file_exists($template_dir . '/' . $lang_template)) {
            // If language-specific template exists, use it
            $path_without_lang = preg_replace('#^/(en|el|ru)/#', '/', $current_path);
            $path_parts = explode('/', trim($path_without_lang, '/'));
            $last_part = end($path_parts);
            
            // Remove any existing language suffix
            $base_name = preg_replace('/_(en|el|ru)$/', '', $last_part);
            
            // Add the new language suffix
            $new_name = $base_name . '_' . $target_lang;
            
            // Replace the last part of the path
            $path_parts[count($path_parts) - 1] = $new_name;
            
            return get_home_url() . '/' . $target_lang . '/' . implode('/', $path_parts);
        }
        
        // If no mapping and no language-specific template, return the language homepage
        return get_home_url() . '/' . $target_lang . '/';
    }
}

		
	
?>