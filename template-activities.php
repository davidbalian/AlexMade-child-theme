<?php
    /*
    Template Name: Активности
    */
?>

<?php include_once("header-box.php"); ?>

<section class="events-one" style="background: url(<?php echo get_field('act-izobrazhenie') ['url']?>) center no-repeat; background-size:cover;">
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
                
                <span class="home-two-text white"><?php echo get_field('price-three-tekst_2') ?></span>
                <div class="swiper-container">
                    <div class="swiper-button-prev swiper-button-prev4"></div>
                    <div class="swiper mySwiper4">
                        <div class="swiper-wrapper">
                            <?php foreach (get_field('price-three-galereya') as $key => $value): ?>
                                <div class="swiper-slide" style="background: url(<?=$value['price-three-galereya-izobrazhenie']['url']?>) left top no-repeat; background-size: cover;">
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                    <div class="swiper-button-next swiper-button-next4"></div>
                </div>


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
                                <a class="button" href="/activities/birthdays-booking/">Book</a>
                            </div>
                        <?php endforeach ?>
                    </div>
                    <a class="button" href="<?php echo get_field('price-three-ssylka') ?>">more</a>
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

                <span class="home-two-text white"><?php echo get_field('price-four-tekst_2') ?></span>
                <div class="swiper-container">
                    <div class="swiper-button-prev swiper-button-prev4"></div>
                    <div class="swiper mySwiper4">
                        <div class="swiper-wrapper">
                            <?php foreach (get_field('price-four-galereya') as $key => $value): ?>
                                <div class="swiper-slide" style="background: url(<?=$value['price-three-galereya-izobrazhenie']['url']?>) left top no-repeat; background-size: cover;">
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                    <div class="swiper-button-next swiper-button-next4"></div>
                </div>

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
                    <a class="button" href="<?php echo get_field('price-four-ssylka') ?>">more</a>
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

                <span class="home-two-text white"><?php echo get_field('price-five-tekst_2') ?></span>
                <div class="swiper-container">
                    <div class="swiper-button-prev swiper-button-prev4"></div>
                    <div class="swiper mySwiper4">
                        <div class="swiper-wrapper">
                            <?php foreach (get_field('price-five-galereya') as $key => $value): ?>
                                <div class="swiper-slide" style="background: url(<?=$value['price-three-galereya-izobrazhenie']['url']?>) left top no-repeat; background-size: cover;">
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                    <div class="swiper-button-next swiper-button-next4"></div>
                </div>

                <h3><?php echo get_field('price-five-podagolovok') ?></h3>
                    <div class="price-two-block">
                        <?php foreach (get_field('price-five-blok') as $key => $value): ?> 
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
                    <a class="button" href="<?php echo get_field('price-five-ssylka') ?>">more</a>
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

                <span class="home-two-text white"><?php echo get_field('price-six-tekst_1') ?></span>
                <div class="swiper-container">
                    <div class="swiper-button-prev swiper-button-prev4"></div>
                    <div class="swiper mySwiper4">
                        <div class="swiper-wrapper">
                            <?php foreach (get_field('price-six-galereya') as $key => $value): ?>
                                <div class="swiper-slide" style="background: url(<?=$value['price-three-galereya-izobrazhenie']['url']?>) left top no-repeat; background-size: cover;">
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                    <div class="swiper-button-next swiper-button-next4"></div>
                </div>

                <h3><?php echo get_field('price-six-podagolovok') ?></h3>
                    <div class="price-five-block">
                        <h4><?php echo get_field('price-six-tajtl') ?></h4>
                        <div class="price-five-block-row">
                            <div><?php echo get_field('price-six-tekst_2') ?></div>
                            <div><?php echo get_field('price-six-tekst_3') ?></div>
                            <div><?php echo get_field('price-six-czena') ?></div>
                        </div>
                    </div>
                    <a class="button" href="<?php echo get_field('price-six-ssylka') ?>">more</a>
            </div>
        </div>
    </section> 

    <section class="home-five price-two price-five act-seven">
        <div class="container">
            <div class="content">
                <div class="big-icon">
                    <img src="<?php echo get_field('price-seven-ikonka') ['url']?>">
                </div>
                <h2><?php echo get_field('price-seven-zagolovok') ?></h2>
                <span class="home-two-text"><?php echo get_field('price-seven-tekst') ?></span>

                <span class="home-two-text white"><?php echo get_field('price-seven-tekst_1') ?></span>
                <div class="swiper-container">
                    <div class="swiper-button-prev swiper-button-prev4"></div>
                    <div class="swiper mySwiper4">
                        <div class="swiper-wrapper">
                            <?php foreach (get_field('price-seven-galereya') as $key => $value): ?>
                                <div class="swiper-slide" style="background: url(<?=$value['price-three-galereya-izobrazhenie']['url']?>) left top no-repeat; background-size: cover;">
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                    <div class="swiper-button-next swiper-button-next4"></div>
                </div>

                <h3><?php echo get_field('price-seven-podagolovok') ?></h3>
                    <div class="price-five-block">
                        <h4><?php echo get_field('price-seven-tajtl') ?></h4>
                        <div class="price-five-block-row">
                            <div><?php echo get_field('price-seven-tekst_2') ?></div>
                            <div><?php echo get_field('price-seven-tekst_3') ?></div>
                            <div><?php echo get_field('price-seven-czena') ?></div>
                        </div>
                    </div>
                    <a class="button" href="<?php echo get_field('price-seven-ssylka') ?>">more</a>
            </div>
        </div>
    </section> 

</div>

<?php include_once("footer-box.php"); ?> 