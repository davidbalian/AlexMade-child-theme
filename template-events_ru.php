<?php
    /*
    Template Name: События ru
    */
?>

<?php include_once("header-box_ru.php"); ?>

<section class="events-one" style="background: url(<?php echo get_field('events-izobrazhenie') ['url']?>) center no-repeat; background-size:cover;">
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

    <section class="home-five events-two">
        <div class="container">
            <div class="content">
                <div class="events-two-block">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type'=>'events_ru', // Your post type name
                        'posts_per_page' => 8,
                        'paged' => $paged,
                    );
                    $loop = new WP_Query( $args );
                    if ( $loop->have_posts() ) {
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <a class="events-two-item" href="<?= get_permalink($object); ?>">
                                <div class="events-two-item-img" style="background: url(<?php echo get_field('event-izobrazhenie') ['url']?>) center no-repeat; background-size:cover;"></div>
                                <span class="events-date"><?php echo get_field('event-data') ?></span>
                                <h3><?= the_title() ?></h3>
                                <span class="events-anonce"><?php echo get_field('event-anons') ?></span>
                            </a>
                    <?php endwhile; ?>
                </div>
                <div class="pagination">
                    <?php $total_pages = $loop->max_num_pages;
                    if ($total_pages > 1){
                        $current_page = max(1, get_query_var('paged'));
                        echo paginate_links(array(
                            'base' => get_pagenum_link(1) . '%_%',
                            'format' => '/page/%#%',
                            'current' => $current_page,
                            'total' => $total_pages,
                            'prev_text'    => __('←'),
                            'next_text'    => __('→'),
                        ));
                    }    
                    }
                    wp_reset_postdata();
                    ?>
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
                <div class="form-text"><?php echo get_field('podpiska-tekst_ru', 'OPTIONS') ?></div>
                <div class="form-block">
                    <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/mail.svg">
                    <?php echo do_shortcode( '[contact-form-7 id="1601" title="Form one_ru"]' ); ?>
                </div>
            </div>
        </div>
    </section>  

</div>

<?php include_once("footer-box_ru.php"); ?> 