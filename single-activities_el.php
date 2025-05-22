<?php include_once("header-box_el.php"); ?>

<section class="events-one" style="background: url(<?php echo get_field('activ-izobrazhenie') ['url']?>) center no-repeat; background-size:cover;">
    <div class="container">
        <h1><?= the_title() ?></h1>
    </div>
</section> 

<div class="events-bgr">
    <section class="bread">
        <div class="container">
            <a href="/el/">Αρχική</a> - <a href="/el/aktivnosti/">Δραστηριότητες</a> - <span><?= the_title() ?></span>
        </div>
    </section>

    <section class="home-five price-two active-two">
        <div class="container">
            <div class="content">
                <div class="big-icon">
                    <img src="<?php echo get_field('price-three-ikonka') ['url']?>">
                </div>
                <h2><?php echo get_field('price-three-zagolovok') ?></h2>
                <span class="home-two-text"><?php echo get_field('price-three-podagolovok') ?></span>
                <span class="home-two-text white"><?php echo get_field('price-three-tekst') ?></span>
                <div class="icons-block">
                    <?php foreach (get_field('school-three-blok') as $key => $value): ?>
                        <div class="icons-item">
                            <div class="big-icon">
                                <img src="<?=$value['about-three-ikonka']['url']?>">
                            </div>
                            <span><?=$value['about-three-tekst']?></span>
                        </div>
                    <?php endforeach ?>
                </div>

                <?php if ( 1684 == $post->ID ) : ?>
            </div>
        </div>
    </section>
    
     <section class="home-five school-two">
        <div class="container">
            <div class="content">
                <h2><?php echo get_field('school-five-zagolovok') ?></h2>
                <span class="home-two-text"><?php echo get_field('school-five-tekst') ?></span>
                <div class="swiper-container">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper mySwiper5">
                        <div class="swiper-wrapper">
                            <?php foreach (get_field('school-five-slajder') as $key => $value): ?>
                                <div class="swiper-slide" style="background: url(<?=$value['school-five-izobrazhenie']['url']?>) left top no-repeat; background-size: cover;">
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                </div>
                <a class="button" href="<?php echo get_field('school-five-fajl')['url'] ?>">
                    <span>DOWNLOAD</span>
                    <span><?php echo get_field('school-five-knopka') ?></span>
                </a>
            </div>
        </div>
    </section> 
                
                <?php else : ?>
                
                <h3><?php echo get_field('price-three-podagolovok_2') ?></h3>
                <div class="rasp-block">
                    <?php foreach (get_field('activ-raspisanie') as $key => $value): ?>
                        <div class="rasp-block-item">
                            
                                <img src="<?=$value['raspisanie-ikonka']['url']?>">
                            
                            <h3><?=$value['raspisanie-tajtl']?></h3>
                            <span class="big-text"><?=$value['raspisanietekst']?></span>
                            <div class="textbox">
                                <span><?=$value['raspisanietekst_1']?></span>
                                <span><?=$value['raspisanietekst_2']?></span>
                                <span><?=$value['raspisanietekst_3']?></span>
                            </div>
                            <div class="rasp">
                                <div class="rasp-item">
                                    <div class="time">Mon</div>
                                    <div class="time">Tue</div>
                                    <div class="time">Wed</div>
                                    <div class="time">Thu</div>
                                    <div class="time">Fri</div>
                                    <div class="time">Sat</div>
                                    <div class="time">Sun</div>
                                </div>
                                <?php foreach ($value['raspisanie-nedelya'] as $key2 => $value2): ?>
                                    <div class="rasp-item">
                                        <?php foreach ($value2['raspisanie-stroka'] as $key3 => $value3): ?>
                                            <div class="time"><?=$value3['raspisanie-vremya']?></div>
                                        <?php endforeach ?>
                                    </div>
                                <?php endforeach ?>
                            </div>
                            <div class="rasp-foo">
                                <div>
                                    <span><?=$value['raspisanie-stoimost']?></span>
                                    <span><?=$value['raspisanie-primechanie']?></span>
                                </div>
<? //                         <div class="button">Βιβλίο</div> ?>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
                
                <?php endif ?>
                
                <div class="swiper-container">
                    <div class="swiper-button-prev swiper-button-prev4"></div>
                    <div class="swiper mySwiper4">
                        <div class="swiper-wrapper">
                            <?php foreach (get_field('activ-galereya') as $key => $value): ?>
                                <div class="swiper-slide" style="background: url(<?=$value['activ-izobrazhenie']['url']?>) left top no-repeat; background-size: cover;">
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                    <div class="swiper-button-next swiper-button-next4"></div>
                </div>
            </div>
        </div>
    </section> 

    <section class="home-five school-five activ-five">
        <div class="container">
            <div class="content" style="border-bottom: none;">
                <div class="home-two-block">
                    <?php foreach (get_field('school-five-blok') as $key => $value): ?>
                        <div class="home-two-item">
                            <div><?=$value['home-two-tekst_1']?></div>
                            <div><?=$value['home-two-tekst_2']?></div>
                        </div>
                    <?php endforeach ?>
                </div>
                
                <?php if ( 1684 == $post->ID ) : ?>
            <p><a href="#fancyboxID-20" class="button fancybox-inline">ΜΟΝΑΔΙΚΗ ΕΚΔΗΛΩΣΗ</a></p>
            <div id="fancyboxID-20" class="fancybox-hidden hentry" style="width:460px;max-width:100%;">
                <p><?php echo do_shortcode( '[contact-form-7 id="2749" title="Booking_Corp GR"]'); ?></p>
            </div>                

                <?php else : ?>
                <a href="https://cosmoport.eu/el/%cf%80%cf%81%cf%8c%ce%b3%cf%81%ce%b1%ce%bc%ce%bc%ce%b1-%ce%b1%cf%86%ce%bf%cf%83%ce%af%cf%89%cf%83%ce%b7%cf%82/" class="button">Πρόγραμμα αφοσίωσης</a>
                <?php endif ?>
                
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <?php foreach (get_field('home-one-slajder') as $key => $value): ?>
                            <div class="swiper-slide" style="background: url(<?=$value['home-one-izobrazhenie']['url']?>) right top no-repeat; background-size: cover;">
                                <div class="slider-bgr">
                                <div class="big-icon">
                                    <img src="<?=$value['home-one-ikonka']['url']?>">
                                </div>
                                <div class="slider-cont">
                                    <h1 class="slider-title"><?=$value['home-one-tajtl']?></h1>
                                    <span><?=$value['home-one-tekst']?></span>
                                    <div class="slider-icon-block">
                                        <?php foreach ($value['home-one-blok_ikonok'] as $key2 => $value2): ?>
                                            <div class="slider-icon">
                                                <img src="<?=$value2['home-one-blok_ikonka']['url']?>">
                                                <div><?=$value2['home-one-blok_tekst']?></div>
                                            </div>
                                        <?php endforeach ?>
                                        <?php if ($value['tekstovaya_ikonka']): ?>
                                            <div class="twxt-icon"><?=$value['tekstovaya_ikonka']?></div>
                                        <?php endif; ?>
                                    </div>
                                    <a href="<?=$value['home-one-ssylka']?>" class="button"><?=$value['home-one-knopka']?></a>
                                </div>
                            </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <?php if ( 1684 == $post->ID ) : ?>
            <p><a href="#fancyboxID-20" class="button fancybox-inline">κράτηση</a></p>
            <div id="fancyboxID-20" class="fancybox-hidden hentry" style="width:460px;max-width:100%;">
                <p><?php echo do_shortcode( '[contact-form-7 id="2749" title="Booking_Corp GR"]'); ?></p>
            </div>

                <?php else : ?>
            <p><a href="#fancyboxID-8" class="button fancybox-inline">ΚΑΝΕ ΜΙΑ ΕΡΩΤΗΣΗ</a></p>
            <div id="fancyboxID-8" class="fancybox-hidden hentry" style="width:460px;max-width:100%;">
                <p><?php echo do_shortcode( '[contact-form-7 id="2663" title="Question GR"]'); ?></p>
            </div>
                <?php endif ?>
                
            </div>
        </div>
    </section> 

    <section class="home-five school-four activ-six">
        <div class="container">
            <div class="content">
                <h3 class="podzagolovok"><?php echo get_field('school-four-podzagolovok') ?></h3>
                
                    
                        <?php foreach (get_field('school-four-vnimanie_blok') as $key => $value): ?>
                            <div class="school-four-item">
                                <img src="<?php echo get_home_url(); ?>/wp-content/themes/AlexMade/img/check.svg">
                                <div class="school-four-item-text-box">
                                    <h3><?=$value['school-four-tajtl']?></h3>
                                    <span><?=$value['school-four-tekst']?></span>
                                </div>
                            </div>
                        <?php endforeach ?>
                     
                
            <p><a href="#fancyboxID-8" class="button fancybox-inline">ΚΑΝΕ ΜΙΑ ΕΡΩΤΗΣΗ</a></p>
            <div id="fancyboxID-8" class="fancybox-hidden hentry" style="width:460px;max-width:100%;">
                <p><?php echo do_shortcode( '[contact-form-7 id="2663" title="Question GR"]'); ?></p>
            </div>
            </div>
        </div>
    </section> 

</div>

<?php include_once("footer-box_el.php"); ?> 