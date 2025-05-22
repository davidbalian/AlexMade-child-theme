<?php
    /*
    Template Name: Партнерам el
    */
?>

<?php include_language_specific_part('header'); ?>

<section class="events-one" style="background: url(<?php echo get_field('partners-izobrazhenie') ['url']?>) center no-repeat; background-size:cover;">
    <div class="container">
        <h1><?= the_title() ?></h1>
    </div>
</section> 

<div class="events-bgr">
    <section class="bread">
        <div class="container">
            <a href="/el/">Αρχική</a> - <span><?= the_title() ?></span>
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
                <h2><?php echo get_field('partners-three-zagolovok') ?></h2>
                <span class="home-two-text"><?php echo get_field('partners-three-tekst') ?></span>
                <div class="icons-block">
                    <?php foreach (get_field('partner-three-blok') as $key => $value): ?>
                        <div class="icons-item">
                            <div class="big-icon">
                                <img src="<?=$value['partner-three-ikonka']['url']?>">
                            </div>
                            <span><?=$value['partner-three-tekst']?></span>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </section> 

    <?php foreach (get_field('partners-four-povtoritel') as $key => $value): ?>
    <section class="home-five partners-three">
        <div class="container">
            <div class="content">
                <h2><?=$value['partners-four-zagolovok']?></h2>
                <span class="home-two-text"><?=$value['partners-four-tekst']?></span>
            </div>
        </div>
    </section> 
    <?php endforeach ?>

    <section class="home-five home-seven about-six">
        <div class="container">
            <div class="content">
                <h2><?php echo get_field('about-seven-zagolovok') ?></h2>
                <div class="home-five-block">
                    <?php foreach (get_field('home-seven-blok') as $key => $value): ?> 
                        <div class="home-five-item" style="background: url(<?=$value['home-seven-logo']['url']?>) center no-repeat; background-size:contain;">
                        </div>
                    <?php endforeach ?>
                </div>
            <p><a href="#fancyboxID-2" class="button fancybox-inline">Γίνε συνέταιρος</a></p>
            <div id="fancyboxID-2" class="fancybox-hidden hentry" style="width:460px;max-width:100%;">
                <p><?php echo do_shortcode( '[contact-form-7 id="2657" title="Partnership GR"]'); ?></p>
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