
<footer class="footer">
   <div class="footer-top">
      <div class="container">
        <div class="footer-col">
           <div class="footer-logo">
              <img src="<?php echo get_field('footer-logo', 'OPTIONS') ['url']?>">
           </div>
           <span class="footer-text"><?php echo get_field('footer-tekst', 'OPTIONS') ?></span> 
        </div>
        <div class="footer-col">
          <div class="footer-menu">
            <?php foreach (get_field('footer-menyu_1', 'OPTIONS') as $key => $value): ?>
              <a href="<?=$value['footer-ssylka']?>"><?=$value['footer-tekst']?></a>
            <?php endforeach ?>
          </div>
          <!--
          <div class="footer-cab">
            <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/001.svg">
            <span>Personal Area</span>
          </div>
          -->
        </div>
        <div class="footer-col">
          <div class="footer-menu">
            <?php foreach (get_field('footer-menyu_2', 'OPTIONS') as $key => $value): ?>
              <a href="<?=$value['footer-ssylka']?>"><?=$value['footer-tekst']?></a>
            <?php endforeach ?>
          </div>
        </div>
        <div class="footer-col">
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
          <div class="social">
            <?php foreach (get_field('footer-soczialnye_seti', 'OPTIONS') as $key => $value): ?>
              <a href="<?=$value['footer-ssylka']?>">
                <img src="<?=$value['footer-ikonka']['url']?>">
              </a>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="contant">
            <?php foreach (get_field('footer-menyu_3', 'OPTIONS') as $key => $value): ?>
              <a href="<?=$value['footer-ssylka']?>"><?=$value['footer-tekst']?></a>
            <?php endforeach ?>
        </div>
      </div>
    </div>
</footer>

<?php get_footer(); ?>