<?php 
// Load parent theme functions
require_once get_template_directory() . '/functions.php';

// If the parent theme's function doesn't exist, define it here
if (!function_exists('include_language_specific_part')) {
    function include_language_specific_part($type) {
        $current_url = $_SERVER['REQUEST_URI'];
        $file = $type . '-box';
        
        // Check if the URL contains language indicators
        if (strpos($current_url, '/el/') !== false) {
            $file .= '_el';
        } elseif (strpos($current_url, '/ru/') !== false) {
            $file .= '_ru';
        }
        
        include_once(get_stylesheet_directory() . '/' . $file . '.php');
    }
}

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
    return get_home_url() . '/' . $target_lang . '/';
}

/**
 * Enqueue theme styles and scripts
 */
function alexmade_enqueue_styles() {
    // Enqueue main theme stylesheet
    wp_enqueue_style('alexmade-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Enqueue additional styles
    wp_enqueue_style('swiper-bundle', get_template_directory_uri() . '/css/swiper-bundle.min.css', array(), '1.0.0');
    wp_enqueue_style('fancybox', get_template_directory_uri() . '/css-2/jquery.fancybox.min.css', array(), '1.0.0');
    wp_enqueue_style('main-css', get_template_directory_uri() . '/css-2/main.css', array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'alexmade_enqueue_styles');

		
	
?>