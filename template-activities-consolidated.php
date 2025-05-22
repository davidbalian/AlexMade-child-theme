<?php
/**
 * Template Name: Activities (Consolidated)
 * 
 * A consolidated template for activities that handles all languages
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
        'title' => 'Activities',
        'description' => 'Discover our exciting activities',
        'book_now' => 'Book Now',
        'more_info' => 'More Information',
        'home' => 'Home'
    ],
    'el' => [
        'title' => 'Δραστηριότητες',
        'description' => 'Ανακαλύψτε τις συναρπαστικές μας δραστηριότητες',
        'book_now' => 'Κράτηση Τώρα',
        'more_info' => 'Περισσότερες Πληροφορίες',
        'home' => 'Αρχική'
    ],
    'ru' => [
        'title' => 'Активности',
        'description' => 'Откройте для себя наши увлекательные мероприятия',
        'book_now' => 'Забронировать',
        'more_info' => 'Подробнее',
        'home' => 'Главная'
    ]
];

// Get content for current language or default
$current_content = isset($content[$lang]) ? $content[$lang] : $content['default'];
?>

<section class="events-one" style="background: url(<?php echo get_field('act-izobrazhenie')['url'] ?>) center no-repeat; background-size:cover;">
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

    <section class="home-five about-two">
        <div class="container">
            <div class="content">
                <span class="home-two-text"><?php echo get_field('about-two-tekst'); ?></span>
                <div class="home-two-block">
                    <?php foreach (get_field('home-two-blok') as $key => $value): ?>
                        <div class="home-two-item">
                            <div><?php echo $value['home-two-tekst_1']; ?></div>
                            <div><?php echo $value['home-two-tekst_2']; ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="home-five price-two">
        <div class="container">
            <div class="content">
                <h3><?php echo get_field('price-three-podagolovok'); ?></h3>
                <div class="price-two-block">
                    <?php foreach (get_field('price-three-blok') as $key => $value): ?> 
                        <div class="price-two-item">
                            <img src="<?php echo $value['price-three-ikonka']['url']; ?>" class="price-two-icon">
                            <h4><?php echo $value['price-three-tajtl']; ?></h4>
                            <div class="price-two-item-block">
                                <?php foreach ($value['price-three-spisok'] as $key2 => $value2): ?>
                                    <div class="price-two-item-block-item">
                                        <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/023.svg">
                                        <span><?php echo $value2['price-three-tekst']; ?></span>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <span class="price"><?php echo $value['price-three-czena']; ?></span>
                            <a class="button" href="<?php echo get_language_url('book'); ?>"><?php echo esc_html($current_content['book_now']); ?></a>
                        </div>
                    <?php endforeach; ?>
                </div>
                <a class="button" href="<?php echo get_field('price-three-ssylka'); ?>"><?php echo esc_html($current_content['more_info']); ?></a>
            </div>
        </div>
    </section>
</div>

<?php
// Include the appropriate footer based on language
include_language_specific_part('footer');
?> 