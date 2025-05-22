<?php
    /*
    Template Name: Loyalty ru
    */
?>

<?php include_language_specific_part('header'); ?>

<section class="events-one" style="background: url(<?php echo get_field('loyalty-izobrazhenie') ['url']?>) center no-repeat; background-size:cover;">
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

 <section class="home-five about-five">
        <div class="container">
            <div class="content">
                <h2><?php echo get_field('loyalty-three-zagolovok') ?></h2>
                <span class="home-two-text"><?php echo get_field('loyalty-three-tekst') ?></span>
                <div class="about-five-banner" style="background: url(<?php echo get_field('loyalty-three-banner') ['url']?>) center no-repeat; background-size:cover;">
                    <div class="slider-bgr">
                        <span><?php echo get_field('loyalty-three-banner_ttitle') ?></span>
                        <span><?php echo get_field('loyalty-three-banner_text') ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section> 

    <section class="home-five home-seven about-six">
        <div class="container">
            <div class="content">
                <h2><?php echo get_field('loyalty-five-title') ?></h2>
                
                <div class="home-five-block">
                    <span class="home-two-text"><?php echo get_field('loyalty-five-text') ?></span>
                </div>
                <p><a href="#fancyboxID-10" class="button fancybox-inline">Свяжитесь с нами</a></p>
            <div id="fancyboxID-10" class="fancybox-hidden hentry" style="width:460px;max-width:100%;">
                <p><?php echo do_shortcode( '[[contact-form-7 id="2678" title="Loyalty_Inquiry_RU"]"]'); ?></p>
            </div>
            </div>
        </div>
    </section> 

    <section class="home-five home-eight contacts-two partners-six">
        <div class="container">
            <div class="content">
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
            </div>
        </div>
    </section>

    </div>

    
<?php include_language_specific_part('footer'); ?>