<?php get_header(); ?>

<body class="body">
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-left">
                <span class="header-time"><?php echo get_field('header-rezhim_raboty_ru', 'OPTIONS') ?></span>
            </div>
            <div class="top-bar-right">
                <div class="headerlang-box">
                    <div class="header-lang">
                        <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/flag-ru.png" class="lang-img">
                        <select onchange="window.location.href=this.options[this.selectedIndex].value">
                            <option>RU</options>
                            <option VALUE="<?php echo get_language_switch_url('en'); ?>">EN</option>
                            <option VALUE="<?php echo get_language_switch_url('el'); ?>">EL</option>
                        </select>
                    </div>
                    <div class="header-location">
                        <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/010.svg">
                        <span><?php echo get_field('location_ru', 'OPTIONS')?></span> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="header">
        <div class="header-top">
            <div class="container">
                <a class="logo" href="https://cosmoport.eu/ru/">
                    <img src="<?php echo get_field('header-logo', 'OPTIONS') ['url']?>">
                </a>
                <div class="work <?php echo date('l'); ?> <?php echo current_time('H:i'); ?>">
                    <?php $t = current_time('H');
                    if (($t >= "10") && ($t < "22")): ?>        
                        <div class="open">OPEN</div>
                    <?php else: ?>    
                        <div class="closed">SLEEP</div>
                    <?php endif ?>
                </div>
                <a href="<?php echo get_field('ssylka_ikonki') ?>" class="big-icon">
                    <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/001.svg">
                </a>
                <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/burger.svg" class="burger open_popup" rel="popup2">
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <?php 
                wp_nav_menu( array(
                    'menu_class'=>'menu',
                    'theme_location'=>'top_ru'
                ) );
                ?>
            </div>
        </div>
    </header>

    <div class="overlay"></div>
    <div class="popup" id="popup2">
        <img class="close" src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/cross.png">
        <div class="popup-box">
            <?php 
                wp_nav_menu( array(
                    'menu_class'=>'menu',
                    'theme_location'=>'top_ru'
                ) );
                ?>
        </div>
    </div>