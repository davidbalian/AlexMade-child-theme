<?php
    /*
    Template Name: О нас
    */
?>

<?php include_language_specific_part('header'); ?>

<section class="events-one" style="background: url(<?php echo get_field('about-izobrazhenie') ['url']?>) center no-repeat; background-size:cover;">
    <div class="container">
        <h1><?= the_title() ?></h1>
    </div>
</section> 

<div class="events-bgr">
    <section class="bread">
        <div class="container">
            <a href="/">Home</a> - <span><?= the_title() ?></span>
        </div>
    </section> 

    <section class="home-five about-two">
        <div class="container">
            <div class="content">
                <span class="home-two-text"><?php echo get_field('about-two-tekst') ?></span>
                <div class="home-two-block">
                    <?php foreach (get_field('home-two-blok') as $key => $value): ?>
                        <div class="home-two-item">
                            <div><?=$value['home-two-tekst_1']?></div>
                            <div><?=$value['home-two-tekst_2']?></div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </section> 

    <section class="home-five about-three">
        <div class="container">
            <div class="content">
                <h2><?php echo get_field('about-three-zagolovok') ?></h2>
                <span class="home-two-text"><?php echo get_field('about-three-tekst') ?></span>
                <div class="icons-block">
                    <?php foreach (get_field('about-three-blok') as $key => $value): ?>
                        <div class="icons-item">
                            <div class="big-icon">
                                <img src="<?=$value['about-three-ikonka']['url']?>">
                            </div>
                            <span><?=$value['about-three-tekst']?></span>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </section> 

    <section class="home-nine about-four">
        <div class="container">
            <div class="map">
                <?php echo get_field('about-map-karta') ?>
            </div>
            <h2><?php echo get_field('about-map-podzagolovok') ?></h2>
            <p><a href="#fancyboxID-1" class="button fancybox-inline">Submit an application</a></p>
            <div id="fancyboxID-1" class="fancybox-hidden hentry" style="width:460px;max-width:100%;">
                <p><?php echo do_shortcode( '[contact-form-7 id="2652" title="Tour Operators"]'); ?></p>
            </div>
        </div>
    </section> 

    <section class="home-five about-five">
        <div class="container">
            <div class="content">
                <h2><?php echo get_field('about-five-zagolovok') ?></h2>
                <span class="home-two-text"><?php echo get_field('about-five-tekst') ?></span>
                <div class="about-five-banner" style="background: url(<?php echo get_field('about-five-banner') ['url']?>) center no-repeat; background-size:cover;">
                    <div class="slider-bgr">
                        <span><?php echo get_field('about-five-banner_title') ?></span>
                        <span><?php echo get_field('about-five-banner_text') ?></span>
                    </div>
                </div>
                <div class="icons-block">
                    <?php foreach (get_field('about-five-blok') as $key => $value): ?>
                        <div class="icons-item">
                            <div class="big-icon">
                                <img src="<?=$value['about-three-ikonka']['url']?>">
                            </div>
                            <span><?=$value['about-three-tekst']?></span>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </section> 

    <section class="home-five about-five">
        <div class="container">
            <div class="content">
                <h2><?php echo get_field('about-six-zagolovok') ?></h2>
                <span class="home-two-text"><?php echo get_field('about-six-tekst') ?></span>
                <div class="about-five-banner" style="background: url(<?php echo get_field('about-six-banner') ['url']?>) center no-repeat; background-size:cover;">
                    <div class="slider-bgr">
                        <span><?php echo get_field('about-six-banner_title') ?></span>
                        <span><?php echo get_field('about-six-banner_text') ?></span>
                    </div>
                </div>
                <div class="icons-block">
                    <?php foreach (get_field('about-six-blok') as $key => $value): ?>
                        <div class="icons-item">
                            <div class="big-icon">
                                <img src="<?=$value['about-three-ikonka']['url']?>">
                            </div>
                            <span><?=$value['about-three-tekst']?></span>
                        </div>
                    <?php endforeach ?>
                </div>
             <a class="button" href="https://cosmoport.eu/en/shkolam/">More</a>
            </div>
         </div>
    </section> 

    <section class="home-five home-seven about-six">
        <div class="container">
            <div class="content">
                <h2><?php echo get_field('about-seven-zagolovok') ?></h2>
                <span class="home-two-text"><?php echo get_field('about-seven-tekst') ?></span>
                <h3><?php echo get_field('about-seven-podzagolovok') ?></h3>
                <div class="home-five-block">
                    <?php foreach (get_field('home-seven-blok') as $key => $value): ?> 
                        <div class="home-five-item" style="background: url(<?=$value['home-seven-logo']['url']?>) center no-repeat; background-size:contain;">
                        </div>
                    <?php endforeach ?>
                </div>
                <a class="button" href="https://cosmoport.eu/en/partners/">More</a>
            </div>
        </div>
    </section> 

    <section class="home-five events-two event-four about-seven">
        <div class="container">
            <div class="content">
                <h2><?php echo get_field('about-eight-zagolovok') ?></h2>
                <div class="events-two-block">
                <?php 
                    // Получение объектов (все посты)
                    $args = array(
                        'post_type' => 'events',
                        'posts_per_page' => 4,
                    );
                    $query = new WP_Query($args);
                ?>
                <?php  // цикл вывода ?>
                <?php if ($query->have_posts()) : ?>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <a class="events-two-item" href="<?= get_permalink($object); ?>">
                                <div class="events-two-item-img" style="background: url(<?php echo get_field('event-izobrazhenie') ['url']?>) center no-repeat; background-size:cover;"></div>
                                <span class="events-date"><?php echo get_field('event-data') ?></span>
                                <h3><?= the_title() ?></h3>
                                <span class="events-anonce"><?php echo get_field('event-anons') ?></span>
                            </a>
                            <?php endwhile ?>
                    <?php endif ?>
                    <?php  // сброс параметров ?>
                    <?php wp_reset_query(); ?>
                </div>
                <a class="button" href="<?php echo get_home_url(); ?>/events/">more</a>
            </div>
        </div>
    </section> 

</div>

<?php include_language_specific_part('footer'); ?>