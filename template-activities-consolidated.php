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
        'more_info' => 'More Information'
    ],
    'el' => [
        'title' => 'Δραστηριότητες',
        'description' => 'Ανακαλύψτε τις συναρπαστικές μας δραστηριότητες',
        'book_now' => 'Κράτηση Τώρα',
        'more_info' => 'Περισσότερες Πληροφορίες'
    ],
    'ru' => [
        'title' => 'Активности',
        'description' => 'Откройте для себя наши увлекательные мероприятия',
        'book_now' => 'Забронировать',
        'more_info' => 'Подробнее'
    ]
];

// Get content for current language or default
$current_content = isset($content[$lang]) ? $content[$lang] : $content['default'];
?>

<div class="activities-container">
    <h1><?php echo esc_html($current_content['title']); ?></h1>
    <p><?php echo esc_html($current_content['description']); ?></p>
    
    <!-- Activity Cards -->
    <div class="activity-cards">
        <?php
        // Example activity data - you would typically get this from WordPress
        $activities = [
            [
                'title' => [
                    'default' => 'Hiking',
                    'el' => 'Πεζοπορία',
                    'ru' => 'Пеший туризм'
                ],
                'description' => [
                    'default' => 'Explore beautiful trails',
                    'el' => 'Εξερευνήστε όμορφα μονοπάτια',
                    'ru' => 'Исследуйте красивые тропы'
                ]
            ],
            // Add more activities as needed
        ];
        
        foreach ($activities as $activity) {
            $activity_title = isset($activity['title'][$lang]) ? $activity['title'][$lang] : $activity['title']['default'];
            $activity_desc = isset($activity['description'][$lang]) ? $activity['description'][$lang] : $activity['description']['default'];
            ?>
            <div class="activity-card">
                <h2><?php echo esc_html($activity_title); ?></h2>
                <p><?php echo esc_html($activity_desc); ?></p>
                <a href="<?php echo esc_url(get_language_url('book')); ?>" class="book-button">
                    <?php echo esc_html($current_content['book_now']); ?>
                </a>
            </div>
            <?php
        }
        ?>
    </div>
</div>

<?php
// Include the appropriate footer based on language
include_language_specific_part('footer');
?> 