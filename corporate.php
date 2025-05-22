<?php
    /*
    Template Name: Школам
    */
?>

<?php include_language_specific_part('header'); ?>

<section class="events-one" style="background: url(<?php echo get_field('school-izobrazhenie') ['url']?>) center no-repeat; background-size:cover;">
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

    <section class="home-five school-two">
        <div class="container">
            <div class="content">
                <h2><?php echo get_field('school-two-zagolovok') ?></h2>
                <span class="home-two-text"><?php echo get_field('school-two-tekst') ?></span>
                <div class="swiper-container">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper mySwiper5">
                        <div class="swiper-wrapper">
                            <?php foreach (get_field('school-two-slajder') as $key => $value): ?>
                                <div class="swiper-slide" style="background: url(<?=$value['school-two-izobrazhenie']['url']?>) left top no-repeat; background-size: cover;">
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                </div>
                <a class="button" href="<?php echo get_field('school-two-fajl')['url'] ?>">
                    <span>DOWNLOAD</span>
                    <span><?php echo get_field('school-two-knopka') ?></span>
                </a>
            </div>
        </div>
    </section> 

    <section class="home-five about-five">
        <div class="container">
            <div class="content">
                <h2><?php echo get_field('school-three-zagolovok') ?></h2>
                <span class="home-two-text"><?php echo get_field('school-three-tekst') ?></span>
                <div class="about-five-banner" style="background: url(<?php echo get_field('school-three-banner') ['url']?>) center no-repeat; background-size:cover;">
                    <div class="slider-bgr">
                        <span><?php echo get_field('school-three-banner_ttitle') ?></span>
                        <span><?php echo get_field('school-three-banner_text') ?></span>
                    </div>
                </div>
                <div class="icons-block">
                    <?php foreach (get_field('school-three-blok') as $key => $value): ?>
                        <div class="icons-item">
                            <div class="big-icon">
                                <img src="<?=$value['about-three-ikonka']['url']?>">
                            </div>
                            <span><?=$value['about-three-tekst']?></span>
                        </div>
                    <?php endforeach ?>
                </div>
                <div class="button">SEND REQUEST</div>
            </div>
        </div>
    </section> 

    <section class="home-five school-four">
        <div class="container">
            <div class="content">
                <h2><?php echo get_field('school-four-zagolovok') ?></h2>
                <span class="home-two-text"><?php echo get_field('school-four-tekst') ?></span>
                <h3 class="podzagolovok"><?php echo get_field('school-four-podzagolovok') ?></h3>
                
                    
                        <?php foreach (get_field('school-four-vnimanie_blok') as $key => $value): ?>
                            <div class="school-four-item">
                                <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/check.svg">
                                <div class="school-four-item-text-box">
                                    <h3><?=$value['school-four-tajtl']?></h3>
                                    <span><?=$value['school-four-tekst']?></span>
                                </div>
                            </div>
                        <?php endforeach ?>
                     
                
                <div class="button">ASK A QUESTION</div>
            </div>
        </div>
    </section> 

    <section class="home-five school-five">
        <div class="container">
            <div class="content">
                <h2><?php echo get_field('school-five-zagolovok') ?></h2>
                <span class="home-two-text"><?php echo get_field('school-five-tekst') ?></span>
                <div class="home-two-block">
                    <?php foreach (get_field('school-five-blok') as $key => $value): ?>
                        <div class="home-two-item">
                            <div><?=$value['home-two-tekst_1']?></div>
                            <div><?=$value['home-two-tekst_2']?></div>
                        </div>
                    <?php endforeach ?>
                </div>
                <div class="button">LOYALTY PROGRAM</div>

                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <?php foreach (get_field('home-one-slajder') as $key => $value): ?>
                            <div class="swiper-slide" style="background: url(<?=$value['home-one-izobrazhenie']['url']?>) right top no-repeat; background-size: cover;">
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
                    <div class="swiper-pagination"></div>
                </div>
                
                <div class="button">ASK A QUESTION</div>
            </div>
        </div>
    </section> 

    </div>

<?php include_language_specific_part('footer'); ?>