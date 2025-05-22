<?php get_header(); ?>

<body class="body">
    <header class="header">
        <div class="header-top">
            <div class="container">
                <a class="logo" href="https://cosmoport.eu/el/">
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
                <span class="header-time"><?php echo get_field('header-rezhim_raboty_el', 'OPTIONS') ?></span>
                <div class="headerlang-box">
                    <div class="header-lang">
                        <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/flag-el.png" class="lang-img">
                        <select onchange="window.location.href=this.options[this.selectedIndex].value">
                            <option>EL</options>
                            <option VALUE="<?php echo get_home_url(); ?>/en/">EN</option>
                            <option VALUE="<?php echo get_home_url(); ?>/ru/">RU</option> 
                        </select>
                    </div>
                    <div class="header-location">
                        <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/010.svg">
                        <span><?php echo get_field('location_ru_el', 'OPTIONS')?></span> 
                    </div>
                </div>
                <div class="big-icon">
                    <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/001.svg">
                </div>
                <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/burger.svg" class="burger open_popup" rel="popup3">
            </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <?php 
                wp_nav_menu( array(
                    'menu_class'=>'menu',
                    'theme_location'=>'top_el'
                ) );
                ?>
            </div>
        </div>
    </header>

    <div class="overlay"></div>
    <div class="popup" id="popup3">
        <img class="close" src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/cross.png">
        <div class="popup-box">
        <?php 
                wp_nav_menu( array(
                    'menu_class'=>'menu',
                    'theme_location'=>'top_el'
                ) );
                ?>
        </div>
    </div>