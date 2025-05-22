<?php
    /*
    Template Name: Video Page
    */
?>

<?php include_language_specific_part('header'); ?>

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
        </div>
    </div>
</section> 
        

    
        <section class="home-five events-three">
        <div class="container">
            <div class="content">
                <div class="big-icon">
                    <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/025.svg">
                </div>
                <div class="form-text"><?php echo get_field('podpiska-tekst', 'OPTIONS') ?></div>
                <div class="form-block">
                    <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/mail.svg">
                    <?php echo do_shortcode( '[contact-form-7 id="5" title="Form one"]' ); ?>
                </div>
            </div>
        </div>
    </section>  
</div>

<?php include_language_specific_part('footer'); ?> 