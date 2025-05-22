<?php include_once("header-box_ru.php"); ?>

<section class="bread event-bread">
    <div class="container">
        <a href="/ru/">Главная</a> - <a href="/ru/sobytiya/">События</a> - <span><?= the_title() ?></span> 
    </div>
</section> 

<section class="home-five event-one">
    <div class="container">
        <div class="content">
            <div class="event-one-left" style="background: url(<?php echo get_field('event-izobrazhenie') ['url']?>) center no-repeat; background-size:cover;">
            </div>
            <div class="event-one-right">
                <span class="events-date"><?php echo get_field('event-data') ?></span>
                <h1><?= the_title() ?></h1>
                <div class="event-content"><?php echo get_field('event-soderzhanie_1') ?></div>
            </div>
        </div>
    </div>
</section>  

<section class="event-two">
    <div class="container">
        <div class="content">
            <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/check.svg">
            <div class="event-two-text-box">
                <h3><?php echo get_field('event-vnimanie') ?></h3>
                <span><?php echo get_field('event-vnimanie_text') ?></span>
            </div>
        </div>
    </div>
</section>  

<section class="event-three">
    <div class="container">
        <div class="content"><?php echo get_field('event-soderzhanie_2') ?></div>
        <div class="event-three-block">
            <div class="social">
                <?php foreach (get_field('footer-soczialnye_seti', 'OPTIONS') as $key => $value): ?>
                    <a href="<?=$value['footer-ssylka']?>">
                        <img src="<?=$value['footer-ikonka']['url']?>">
                    </a>
                <?php endforeach ?>
          </div>
          <a class="button" href="<?php echo get_home_url(); ?>/ru/sobytiya/">Назад</a>
        </div>
    </div>
</section> 

<section class="home-five events-two event-four">
    <div class="container">
        <div class="content" style="border-bottom: 2px #00c1f6 solid;">
            <h2><?php echo get_field('event-zagolovok') ?></h2>
            <div class="events-two-block">
                <?php 
                        $post_objects = get_field('pohozhie_sobytiya');
                        if( $post_objects ): 
                    ?>
                    
                            <?php foreach( $post_objects as $post): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
                            <?php setup_postdata($post); ?>
                        <a class="events-two-item" href="<?= get_permalink($object); ?>">
                            <div class="events-two-item-img" style="background: url(<?php echo get_field('event-izobrazhenie') ['url']?>) center no-repeat; background-size:cover;"></div>
                            <span class="events-date"><?php echo get_field('event-data') ?></span>
                            <h3><?= the_title() ?></h3>
                            <span class="events-anonce"><?php echo get_field('event-anons') ?></span>
                        </a>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
                    <?php endif; ?>
            </div>
            <a class="button" href="https://cosmoport.eu/ru/sobytiya/">еще</a>
        </div>
    </div>
</section> 

<?php include_once("footer-box_ru.php"); ?> 