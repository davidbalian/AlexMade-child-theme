<?php
    /*
    Template Name: Контакты ru
    */
?>

<?php include_language_specific_part('header'); ?>

<section class="events-one" style="background: url(<?php echo get_field('contacts-izobrazhenie') ['url']?>) center no-repeat; background-size:cover;">
    <div class="container">
        <h1><?= the_title() ?></h1>
    </div>
</section> 

<div class="events-bgr">
    <section class="bread">
        <div class="container">
            <a href="/ru/">Главная</a> - <span><?= the_title() ?></span>
        </div>
    </section> 

    <section class="home-five home-eight contacts-two">
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

    <section class="contacts-three">
        <div class="container">
            <div class="content">
                <div class="big-icon">
                    <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/026.svg">
                </div>
                <h2><?php echo get_field('contacts-three-zagolovok') ?></h2>
				<?php echo do_shortcode( '[contact-form-7 id="2469" title="Message_ru"]' ); ?>
            </div>
        </div>
    </section> 


</div>

<?php include_language_specific_part('footer'); ?>