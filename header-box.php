<?php get_header(); ?>

<body class="body">
    <header class="header">
        <div class="header-top">
            <div class="container">
                <a class="logo" href="/">
                    <img src="<?php echo get_field('header-logo', 'OPTIONS') ['url']?>">
                </a>
<!--                <div class="work <?php echo date('l'); ?> <?php echo the_time('H-i'); ?>">
-->
                    <div class="work <?php echo date('l'); ?> <?php echo current_time('H:i'); ?>">
     


          <?php $t = current_time('H');
                if (($t >= "10") && ($t < "22")): ?>        
                    <div class="open">OPEN</div>
                <?php else: ?>    
                    <div class="closed">SLEEP</div>
                <?php endif ?>
                
                </div>
                <span class="header-time"><?php echo get_field('header-rezhim_raboty', 'OPTIONS') ?></span>
                <div class="headerlang-box">
                    <div class="header-lang">
                        <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/flag-en.png" class="lang-img">
                        <select onchange="window.location.href=this.options[this.selectedIndex].value">
                            <option>EN</options>
                            <option VALUE="<?php echo get_home_url(); ?>/el/">EL</option>
                            <option VALUE="<?php echo get_home_url(); ?>/ru/">RU</option>
                        </select>
                    </div>
                    <div class="header-location">
                        <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/010.svg">
                        <span><?php echo get_field('location_en', 'OPTIONS')?></span> 
                    </div>
                </div>
                <a href="<?php echo get_field('ssylka_ikonki') ?>" class="big-icon">
                    <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/001.svg">
                </a>
                <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/burger.svg" class="burger open_popup" rel="popup1">
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <?php 
                wp_nav_menu( array(
                    'menu_class'=>'menu',
                    'theme_location'=>'top'
                ) );
                ?>
            </div>
        </div>
    </header>

    <div class="overlay"></div>
    <div class="popup" id="popup1">
        <img class="close" src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/cross.png">
        <div class="popup-box">
            <?php 
                wp_nav_menu( array(
                    'menu_class'=>'menu',
                    'theme_location'=>'top'
                ) );
                ?>
        </div>
    </div>