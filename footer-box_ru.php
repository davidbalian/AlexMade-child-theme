
<footer class="footer">
   <div class="footer-top">
      <div class="container">
        <div class="footer-col">
           <div class="footer-logo">
              <img src="<?php echo get_field('footer-logo', 'OPTIONS') ['url']?>">
           </div>
           <span class="footer-text"><?php echo get_field('footer-tekst_ru', 'OPTIONS') ?></span> 
        </div>
        <div class="footer-col">
          <div class="footer-menu">
            <?php foreach (get_field('footer-menyu_1_ru', 'OPTIONS') as $key => $value): ?>
              <a href="<?=$value['footer-ssylka']?>"><?=$value['footer-tekst']?></a>
            <?php endforeach ?>
          </div>
<!--         <div class="footer-cab">
           <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/001.svg">
            <span>Личный кабинет</span>
          </div> 
-->          
        </div>
        <div class="footer-col">
          <div class="footer-menu">
            <?php foreach (get_field('footer-menyu_2_ru', 'OPTIONS') as $key => $value): ?>
              <a href="<?=$value['footer-ssylka']?>"><?=$value['footer-tekst']?></a>
            <?php endforeach ?>
          </div>
        </div>
        <div class="footer-col">
          <div class="work <?php echo date('l'); ?> <?php echo current_time('H:i'); ?>">
              
                        <?php $t = current_time('H');
                if (($t >= "10") && ($t < "22")): ?>        
                    <div class="open">OPEN</div>
                <?php else: ?>    
                    <div class="closed">SLEEP</div>
                <?php endif ?>

                </div>
          <span class="header-time"><?php echo get_field('header-rezhim_raboty_ru', 'OPTIONS') ?></span>
          <div class="headerlang-box">
                    <div class="header-lang">
                        <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/flag-ru.png" class="lang-img">
                        <select onchange="window.location.href=this.options[this.selectedIndex].value">
                            <option>RU</options>
                            <option VALUE="<?php echo get_home_url(); ?>/en/">EN</option>
                            <option VALUE="<?php echo get_home_url(); ?>/el/">EL</option>
                        </select>
                    </div>
                    <div class="header-location">
                        <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/010.svg">
                        <span><?php echo get_field('location_ru', 'OPTIONS')?></span> 
                    </div>
                </div>
          <div class="social">
            <?php foreach (get_field('footer-soczialnye_seti_ru', 'OPTIONS') as $key => $value): ?>
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
            <?php foreach (get_field('footer-menyu_3ru', 'OPTIONS') as $key => $value): ?>
              <a href="<?=$value['footer-ssylka']?>"><?=$value['footer-tekst']?></a>
            <?php endforeach ?>
        </div>
      </div>
    </div>
</footer>

<?php get_footer(); ?>