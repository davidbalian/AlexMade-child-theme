<?php
/**
 * Template Name: Contacts (Consolidated)
 * 
 * A consolidated template for contacts that handles all languages
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
        'title' => 'Contacts',
        'home' => 'Home',
        'message' => 'Message'
    ],
    'el' => [
        'title' => 'Επικοινωνία',
        'home' => 'Αρχική',
        'message' => 'Μήνυμα'
    ],
    'ru' => [
        'title' => 'Контакты',
        'home' => 'Главная',
        'message' => 'Сообщение'
    ]
];

// Get content for current language or default
$current_content = isset($content[$lang]) ? $content[$lang] : $content['default'];

// Get the appropriate contact form ID based on language
$contact_form_ids = [
    'default' => '2467', // English form
    'el' => '2468',      // Greek form
    'ru' => '2469'       // Russian form
];
$contact_form_id = isset($contact_form_ids[$lang]) ? $contact_form_ids[$lang] : $contact_form_ids['default'];
?>

<section class="events-one" style="background: url(<?php echo get_field('contacts-izobrazhenie')['url'] ?>) center no-repeat; background-size:cover;">
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

    <section class="home-five home-eight contacts-two">
        <div class="container">
            <div class="content">
                <h2><?php echo get_field('home-eight-zagolovok'); ?></h2>
                <div class="big-icon">
                    <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/009.svg">
                </div>
                <div class="home-eight-block">
                    <?php foreach (get_field('home-eight-blok') as $key => $value): ?>
                        <div class="home-eight-item">
                            <span><?php echo $value['home-eight-tajtl']; ?></span>
                            <a href="tel:<?php echo $value['home-eight-telefon']; ?>"><?php echo $value['home-eight-telefon']; ?></a>
                            <a href="mailto:<?php echo $value['home-eight-imejl']; ?>"><?php echo $value['home-eight-imejl']; ?></a>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="big-icon">
                    <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/010.svg">
                </div>
            </div>
        </div>
    </section> 
    
    <section class="home-nine">
        <div class="container">
            <div class="map">
                <?php echo get_field('home-nine-karta'); ?>
            </div>
        </div>
    </section> 

    <section class="contacts-three">
        <div class="container">
            <div class="content">
                <div class="big-icon">
                    <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/026.svg">
                </div>
                <h2><?php echo get_field('contacts-three-zagolovok'); ?></h2>
                <?php echo do_shortcode('[contact-form-7 id="' . $contact_form_id . '" title="' . $current_content['message'] . '"]'); ?>
            </div>
        </div>
    </section> 
</div>

<?php
// Include the appropriate footer based on language
include_language_specific_part('footer');
?> 