 <?php
    /*
    Template Name: Главная el
    */
?>

<?php include_once("header-box_el.php"); ?>

<section class="home-one">
    <div class="swiper mySwiper" style="background: #000 url(<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/banner-fon.jpg) left top no-repeat; background-size: contain;">
        <div class="swiper-wrapper">
            <?php foreach (get_field('home-one-slajder') as $key => $value): ?>
                <div class="swiper-slide" >
                    <div class="brg-one"></div>
                    <div class="container" style="background: url(<?=$value['home-one-izobrazhenie']['url']?>) center; background-size: cover;">
                        <div class="slider-bgr">
                            <div class="big-icon">
                                <img src="<?=$value['home-one-ikonka']['url']?>">
                            </div>
                            <div class="slider-cont">
                                <h1 class="slider-title"><?=$value['home-one-tajtl']?></h1>
                                <span><?=$value['home-one-tekst']?></span>
                                <div class="slider-icon-block">
                                    <?php foreach ($value['home-one-blok_ikonok'] as $key2 => $value2): ?>
                                        <div class="slider-icon">
                                            <img src="<?=$value2['home-one-blok_ikonka']['url']?>">
                                            <div><?=$value2['home-one-blok_tekst']?></div>
                                        </div>
                                    <?php endforeach ?>
                                    <?php if ($value['tekstovaya_ikonka']): ?>
                                        <div class="twxt-icon"><?=$value['tekstovaya_ikonka']?></div>
                                    <?php endif; ?>
                                </div>
                                <a href="<?=$value['home-one-ssylka']?>" class="button"><?=$value['home-one-knopka']?></a>
                            </div>
                        </div>
                    </div>
                    <div class="brg-two"></div>
                </div>
            <?php endforeach ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<section class="home-two section-top">
    <div class="container">
        <h2><?php echo get_field('home-two-zagolovok') ?></h2>
        <div class="home-two-block">
            <?php foreach (get_field('home-two-blok') as $key => $value): ?>
                <div class="home-two-item">
                    <div><?=$value['home-two-tekst_1']?></div>
                    <div><?=$value['home-two-tekst_2']?></div>
                </div>
            <?php endforeach ?>
        </div>
        <div class="home-two-swiper" style="display:none;">
            <div thumbsSlider="" class="swiper mySwiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiper-button">1ος όροφος</div>
                        <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/act.png">
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-button">2ος όροφος</div>
                        <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/act.png">
                    </div>
                   
                </div>
            </div>
            <div class="swiper mySwiper3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background: url(<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/01_fl.svg) center no-repeat; background-size:414px;">
                        <div class="first_fl fl">
                            <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/01_plan.svg" class="icon_fl">
                            <div class="first_label">
                                <div class="first_label-arr"></div>
                                <div class="first_label-box">
                                    <div class="first_label-img" style="background: url(<?php echo get_field('label-izobrazhenie_1') ['url']?>); background-size:cover;"></div>
                                    <span><?php echo get_field('label-tekst_1') ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="second_fl fl">
                            <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/02_plan.svg" class="icon_fl">
                            <div class="first_label">
                                <div class="first_label-arr"></div>
                                <div class="first_label-box">
                                    <div class="first_label-img" style="background: url(<?php echo get_field('label-izobrazhenie_2') ['url']?>); background-size:cover;"></div>
                                    <span><?php echo get_field('label-tekst_2') ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="third_fl fl">
                            <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/03_plan.svg" class="icon_fl">
                            <div class="first_label">
                                <div class="first_label-arr"></div>
                                <div class="first_label-box">
                                    <div class="first_label-img" style="background: url(<?php echo get_field('label-izobrazhenie_3') ['url']?>); background-size:cover;"></div>
                                    <span><?php echo get_field('label-tekst_3') ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="fourth_fl fl">
                            <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/04_plan.svg" class="icon_fl">
                            <div class="first_label">
                                <div class="first_label-arr"></div>
                                <div class="first_label-box">
                                    <div class="first_label-img" style="background: url(<?php echo get_field('label-izobrazhenie_4') ['url']?>); background-size:cover;"></div>
                                    <span><?php echo get_field('label-tekst_4') ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background: url(<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/02_fl.svg) center no-repeat; background-size:600px;">
                        <div class="fifth_fl fl">
                            <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/05_plan.svg" class="icon_fl">
                            <div class="first_label">
                                <div class="first_label-arr"></div>
                                <div class="first_label-box">
                                    <div class="first_label-img" style="background: url(<?php echo get_field('label-izobrazhenie_5') ['url']?>); background-size:cover;"></div>
                                    <span><?php echo get_field('label-tekst_5') ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="sixth_fl fl">
                            <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/06_plan.svg" class="icon_fl">
                            <div class="first_label">
                                <div class="first_label-arr"></div>
                                <div class="first_label-box">
                                    <div class="first_label-img" style="background: url(<?php echo get_field('label-izobrazhenie_6') ['url']?>); background-size:cover;"></div>
                                    <span><?php echo get_field('label-tekst_6') ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="seventh_fl fl">
                            <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/07_plan.svg" class="icon_fl">
                            <div class="first_label">
                                <div class="first_label-arr"></div>
                                <div class="first_label-box">
                                    <div class="first_label-img" style="background: url(<?php echo get_field('label-izobrazhenie_7') ['url']?>); background-size:cover;"></div>
                                    <span><?php echo get_field('label-tekst_7') ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="eighth_fl fl">
                            <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/08_plan.svg" class="icon_fl">
                            <div class="first_label">
                                <div class="first_label-arr"></div>
                                <div class="first_label-box">
                                    <div class="first_label-img" style="background: url(<?php echo get_field('label-izobrazhenie_8') ['url']?>); background-size:cover;"></div>
                                    <span><?php echo get_field('label-tekst_8') ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <span class="home-two-text"><?php echo get_field('home-two-tekst') ?></span>
    </div>
</section>

<section class="home-three">
    <div class="container">
        <h2><?php echo get_field('home-three-zagolovok') ?></h2>
        <div class="home-three-block">
            <?php foreach (get_field('home-three-slajder') as $key => $value): ?>
                <div class="home-three-item" style="background: url(<?=$value['home-one-izobrazhenie']['url']?>) center no-repeat; background-size:cover;">
                        <div class="slider-bgr">
                            <div class="big-icon">
                                <img src="<?=$value['home-one-ikonka']['url']?>">
                            </div>
                            <div class="slider-cont">
                                <h1 class="slider-title"><?=$value['home-one-tajtl']?></h1>
                                <span><?=$value['home-one-tekst']?></span>
                                <div class="slider-icon-block">
                                    <?php foreach ($value['home-one-blok_ikonok'] as $key2 => $value2): ?>
                                        <div class="slider-icon">
                                            <img src="<?=$value2['home-one-blok_ikonka']['url']?>">
                                            <div><?=$value2['home-one-blok_tekst']?></div>
                                        </div>
                                    <?php endforeach ?>
                                    <?php if ($value['tekstovaya_ikonka']): ?>
                                        <div class="twxt-icon"><?=$value['tekstovaya_ikonka']?></div>
                                    <?php endif; ?>
                                </div>
                                <a href="<?=$value['home-one-ssylka']?>" class="button"><?=$value['home-one-knopka']?></a>
                            </div>
                        </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<section class="home-four">
    <div class="container">
        <h2><?php echo get_field('home-four-zagolovok') ?></h2>
        <span><?php echo get_field('home-four-text22') ?></span>
        <?php echo do_shortcode( '[contact-form-7 id="1737" title="Booking_el"]' ); ?>
    </div>
</section>  

<section class="home-five events-two event-four">
    <div class="container">
        <div class="content">
            <h2><?php echo get_field('home-five-zagolovok') ?></h2>
            <div class="events-two-block">
            <?php 
                // Получение объектов (все посты)
                $args = array(
                    'post_type' => 'events_el',
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
            <a class="button" href="<?php echo get_home_url(); ?>/el/sobytiya/">περισσότερο</a>
        </div>
    </div>
</section> 

<section class="home-five">
    <div class="container">
        <div class="content">
            <h2><?php echo get_field('home-six-zagolovok') ?></h2>
            <div class="home-six-block">
                <?php foreach (get_field('home-six-blok') as $key => $value): ?>
                    <div class="home-six-item">
                        <div class="video"><?=$value['home-six-video']?></div>
                        <h3><?=$value['home-six-tajtl']?></h3>
                    </div>
                <?php endforeach ?>
            </div>
            <a class="button" href="https://cosmoport.eu/%ce%b2%ce%b9%ce%bd%cf%84%ce%b5%ce%bf/">Γίνε συνέταιρος</a>
        </div>
    </div>
</section> 

<section class="home-five home-seven">
    <div class="container">
        <div class="content">
            <h2><?php echo get_field('home-seven-zagolovok') ?></h2>
            <div class="home-five-block">
                <?php foreach (get_field('home-seven-blok') as $key => $value): ?> 
                    <div class="home-five-item" style="background: url(<?=$value['home-seven-logo']['url']?>) center no-repeat; background-size:contain;">
                    </div>
                <?php endforeach ?>
            </div>
            <a class="button" href="https://cosmoport.eu/el/partnery/">Γίνε συνέταιρος</a>
        </div>
    </div>
</section> 

<section class="home-five home-eight">
    <div class="container">
        <div class="content">
            <h2><?php echo get_field('home-eight-zagolovok') ?></h2>
            <div class="big-icon">
                    <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/009.svg">
                </div>
            <div class="home-eight-block">
                <?php foreach (get_field('home-eight-blok') as $key => $value): ?>
                    <div class="home-eight-item">
                        <span><?=$value['home-eight-tajtl']?></span>
                        <a href="tel:<?=$value['home-eight-telefon']?>"><?=$value['home-eight-telefon']?></a>
                        <a href="mailto:<?=$value['home-eight-imejl']?>"><?=$value['home-eight-imejl']?></a>
                    </div>
                <?php endforeach ?>
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
            <?php echo get_field('home-nine-karta') ?>
        </div>
    </div>
</section> 

<?php include_once("footer-box_el.php"); ?> 