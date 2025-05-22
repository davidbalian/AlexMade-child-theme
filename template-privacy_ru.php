<?php
    /*
    Template Name: Privacy Docs Ru
    */
?>

<?php include_once("header-box_ru.php"); ?>

<section class="events-one" style="background: url(<?php echo get_field('act-izobrazhenie') ['url']?>) center no-repeat; background-size:cover;">
    <div class="container">
        <h1><?= the_title() ?></h1>
    </div>
</section> 

<div class="events-bgr">
    <section class="bread">
        <div class="container">
            <a href="/">Главная</a> - <span><?= the_title() ?></span>
        </div>
    </section> 
    
    <section class="home-five about-two">
        <div class="container">
            <div class="content">
                <span class="home-two-text"><?php the_content(); ?></span>
                
            </div>
        </div>
    </section> 
        
    <section class="home-five price-two price-five act-seven">
        <div class="container">
            <div class="content"></div>
        </div>
    </section>
</div>

<?php include_once("footer-box_ru.php"); ?> 