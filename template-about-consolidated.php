<?php
/**
 * Template Name: About (Consolidated)
 * 
 * A consolidated template for about pages that handles all languages
 */

// Include the appropriate header based on language
include_language_specific_part('header');

// Get the current language
$current_url = $_SERVER['REQUEST_URI'];
$lang = '';
if (strpos($current_url, '/el/') !== false) {
    $lang = 'el';
} elseif (strpos($current_url, '/ru/') !== false) {
    $lang = 'ru';
} elseif (strpos($current_url, '/en/') !== false) {
    $lang = 'en';
}

// Language-specific content
$content = [
    'default' => [
        'title' => 'About Us',
        'home' => 'Home',
        'submit' => 'Submit an application'
    ],
    'el' => [
        'title' => 'Σχετικά με εμάς',
        'home' => 'Αρχική',
        'submit' => 'Υποβάλλω αίτηση'
    ],
    'ru' => [
        'title' => 'О нас',
        'home' => 'Главная',
        'submit' => 'Отправить заявку'
    ]
];

// Get content for current language or default
$current_content = isset($content[$lang]) ? $content[$lang] : $content['default'];

// Get the appropriate contact form ID based on language
$contact_form_ids = [
    'default' => '2652', // English form
    'el' => '2653',      // Greek form
    'ru' => '2654'       // Russian form
];
$contact_form_id = isset($contact_form_ids[$lang]) ? $contact_form_ids[$lang] : $contact_form_ids['default'];
?>

<section class="events-one" style="background: url(<?php echo get_field('about-izobrazhenie')['url'] ?>) center no-repeat; background-size:cover;">
    <div class="container">
        <h1><?php echo esc_html($current_content['title']); ?></h1>
    </div>
</section> 

<div class="events-bgr">
    <section class="bread">
        <div class="container">
            <a href="<?php echo get_language_url(); ?>"><?php echo esc_html($current_content['home']); ?></a> - <span><?php echo esc_html($current_content['title']); ?></span>
        </div>
    </section> 

    <section class="home-five about-three">
        <div class="container">
            <div class="content">
                <h2><?php echo get_field('about-three-zagolovok'); ?></h2>
                <span class="home-two-text"><?php echo get_field('about-three-tekst'); ?></span>
                <div class="icons-block">
                    <?php foreach (get_field('about-three-blok') as $key => $value): ?>
                        <div class="icons-item">
                            <div class="big-icon">
                                <img src="<?php echo $value['about-three-ikonka']['url']; ?>">
                            </div>
                            <span><?php echo $value['about-three-tekst']; ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section> 

    <section class="home-nine about-four">
        <div class="container">
            <div class="map">
                <?php echo get_field('about-map-karta'); ?>
            </div>
            <h2><?php echo get_field('about-map-podzagolovok'); ?></h2>
            <p><a href="#fancyboxID-1" class="button fancybox-inline"><?php echo esc_html($current_content['submit']); ?></a></p>
            <div id="fancyboxID-1" class="fancybox-hidden hentry" style="width:460px;max-width:100%;">
                <p><?php echo do_shortcode('[contact-form-7 id="' . $contact_form_id . '" title="Tour Operators"]'); ?></p>
            </div>
        </div>
    </section> 
</div>

<?php
// Include the appropriate footer based on language
include_language_specific_part('footer');
?> 