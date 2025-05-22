<?php
/**
 * Шаблон типовой страницы (page.php)
 */
?>
 
<?php get_header(); ?>

<section>
    <div class="container">
        <?php while( have_posts() ) : the_post(); ?>
            <?php $more = 1; // отображаем полностью всё содержимое поста ?>
                <h1 class="page-title"><?php the_title(); ?></h1>
                <?php the_content(); ?>
            <?php endwhile; ?>
    </div>
</section>

<?php get_footer(); ?>