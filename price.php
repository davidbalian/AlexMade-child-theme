<?php
    /*
    Template Name: Цены
    */
?>

<?php include_language_specific_part('header'); ?>

<section class="events-one" style="background: url(<?php echo get_field('price-izobrazhenie') ['url']?>) center no-repeat; background-size:cover;">
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

    <section class="home-five price-two">
        <div class="container">
            <div class="content">
                <div class="big-icon">
                    <img src="<?php echo get_field('price-three-ikonka') ['url']?>">
                </div>
                <h2><?php echo get_field('price-three-zagolovok') ?></h2>
                <span class="home-two-text"><?php echo get_field('price-three-tekst') ?></span>
                <h3><?php echo get_field('price-three-podagolovok') ?></h3>
                    <div class="price-two-block">
                        <?php foreach (get_field('price-three-blok') as $key => $value): ?> 
                            <div class="price-two-item">
                                <img src="<?=$value['price-three-ikonka']['url']?>" class="price-two-icon">
                                <h4><?=$value['price-three-tajtl']?></h4>
                                <div class="price-two-item-block">
                                    <?php foreach ($value['price-three-spisok'] as $key2 => $value2): ?>
                                        <div class="price-two-item-block-item">
                                            <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/023.svg">
                                            <span><?=$value2['price-three-tekst']?></span>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                                <span class="price"><?=$value['price-three-czena']?></span>
                                <div class="button">Book</div>
                            </div>
                        <?php endforeach ?>
                    </div>
                    <a class="button" href="https://cosmoport.eu/activities/birthdays/">more</a>
            </div>
        </div>
    </section> 

    <section class="home-five price-two price-three">
        <div class="container">
            <div class="content">
                <div class="big-icon">
                    <img src="<?php echo get_field('price-four-ikonka') ['url']?>">
                </div>
                <h2><?php echo get_field('price-four-zagolovok') ?></h2>
                <span class="home-two-text"><?php echo get_field('price-four-tekst') ?></span>
                <h3><?php echo get_field('price-four-podagolovok') ?></h3>
                    <div class="price-two-block">
                        <?php foreach (get_field('price-four-blok') as $key => $value): ?> 
                            <div class="price-two-item">
                                <img src="<?=$value['price-three-ikonka']['url']?>" class="price-two-icon">
                                <h4><?=$value['price-three-tajtl']?></h4>
                                <div class="price-two-item-block">
                                    <?php foreach ($value['price-three-spisok'] as $key2 => $value2): ?>
                                        <div class="price-two-item-block-item"><?=$value2['price-three-tekst']?></div>
                                    <?php endforeach ?>
                                </div>
                                <div class="button">Book</div>
                            </div>
                        <?php endforeach ?>
                    </div>
                    <a class="button" href="https://cosmoport.eu/activities/master-class/">more</a>
            </div>
        </div>
    </section> 

    <section class="home-five price-two">
        <div class="container">
            <div class="content">
                <div class="big-icon">
                    <img src="<?php echo get_field('price-five-ikonka') ['url']?>">
                </div>
                <h2><?php echo get_field('price-five-zagolovok') ?></h2>
                <span class="home-two-text"><?php echo get_field('price-five-tekst') ?></span>
                <h3><?php echo get_field('price-five-podagolovok') ?></h3>
                    <div class="price-two-block">
                        <?php foreach (get_field('price-five-blok') as $key => $value): ?> 
                            <div class="price-two-item">
                                <img src="<?=$value['price-threeee-ikonka']['url']?>" class="price-two-icon">
                                <h4><?=$value['price-three-tajtl']?></h4>
                                <div class="price-two-item-block">
                                    <?php foreach ($value['price-three-spisok'] as $key2 => $value2): ?>
                                        <div class="price-two-item-block-item">
                                            <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/023.svg">
                                            <span><?=$value2['price-three-tekst']?></span>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                                <span class="price"><?=$value['price-three-czena']?></span>
                                <div class="button">Book</div>
                            </div>
                        <?php endforeach ?>
                    </div>
                    <a class="button" href="https://cosmoport.eu/activities/corporates/">more</a>
            </div>
        </div>
    </section> 

    <section class="home-five price-two price-five">
        <div class="container">
            <div class="content">
                <div class="big-icon">
                    <img src="<?php echo get_field('price-six-ikonka') ['url']?>">
                </div>
                <h2><?php echo get_field('price-six-zagolovok') ?></h2>
                <span class="home-two-text"><?php echo get_field('price-six-tekst') ?></span>
                <h3><?php echo get_field('price-six-podagolovok') ?></h3>
                    <div class="price-five-block">
                        <h4><?php echo get_field('price-six-tajtl') ?></h4>
                        <div class="price-five-block-row">
                            <div><?php echo get_field('price-six-tekst_1') ?></div>
                            <div><?php echo get_field('price-six-tekst_2') ?></div>
                            <div><?php echo get_field('price-six-czena') ?></div>
                        </div>
                    </div>
                    <a class="button" href="https://cosmoport.eu/activities/interactive-installations/">more</a>
            </div>
        </div>
    </section> 

    <section class="home-five price-two price-five">
        <div class="container">
            <div class="content">
                <div class="big-icon">
                    <img src="<?php echo get_field('price-seven-ikonka') ['url']?>">
                </div>
                <h2><?php echo get_field('price-seven-zagolovok') ?></h2>
                <span class="home-two-text"><?php echo get_field('price-seven-tekst') ?></span>
                <h3><?php echo get_field('price-seven-podagolovok') ?></h3>
                    <div class="price-five-block">
                        <h4><?php echo get_field('price-seven-tajtl') ?></h4>
                        <div class="price-five-block-row">
                            <div><?php echo get_field('price-seven-tekst_1') ?></div>
                            <div><?php echo get_field('price-seven-tekst_2') ?></div>
                            <div><?php echo get_field('price-seven-czena') ?></div>
                        </div>
                    </div>
                    <a class="button" href="https://cosmoport.eu/activities/vr-attractions/">more</a>
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
                <a href="https://cosmoport.eu/en/loyalty-program/" class="button">LOYALTY PROGRAM</a>
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
            <p><a href="#fancyboxID-8" class="button fancybox-inline">ASK A QUESTION</a></p>
            <div id="fancyboxID-8" class="fancybox-hidden hentry" style="width:460px;max-width:100%;">
                <p><?php echo do_shortcode( '[contact-form-7 id="2661" title="Question EN"]'); ?></p>
            </div>
             </div>
        </div>
    </section> 


</div>


<?php include_language_specific_part('footer'); ?>