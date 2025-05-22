<?php
    /*
    Template Name: VR-2 ru
    Template Post Type: activities_ru
    */
?>

<?php include_language_specific_part('header'); ?>
<head>
    <link href="<?php bloginfo('template_url'); ?>/fonts-2/stylesheet.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css-2/jquery.fancybox.min.css">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css-2/main.css"> 
</head>
 
<style>
  .buy-vr-button{
    display: none;
  }
</style>

  <div class="banner">
   
    <div class="img" style="background:url('<?php echo get_field('activ-izobrazhenie') ['url']?>');">
     
      <h1><?= the_title() ?></h1>
    </div>
    <div class="oo1"></div>
  
  </div>
 

<div class="content">
  <div class="container">
    <div class="breadsrumbs">
      <ul>
        <li><a href="<?php echo get_permalink(752); ?>">Главная</a> <span class="divider">-</span></li>
        <li><a href="<?php echo get_permalink(770); ?>">Активности</a> <span class="divider">-</span></li>
        <li><span><?= the_title() ?></span></li>
      </ul>
    </div>

<div class="border"></div>
<h2>
  <div class="big-icon"><img src="<?php echo get_field('price-three-ikonka') ['url']?>" alt=""></div>
  <span><?php echo get_field('price-three-zagolovok') ?></span>
</h2>

    <div class="text-after-h2">
      <div class="text-after-h3"><?php echo get_field('price-three-podagolovok') ?></div><?php echo get_field('price-three-tekst') ?></div>



    
 <div class="y-vr">


 <?php foreach (get_field('home-one-slajder') as $key => $value): ?>
 <div class="vr-block-item">
  <div class="img-vr">
    <img src="<?=$value['home-one-izobrazhenie']['url']?>" alt="">
    </div>

    <div class="vr-content">
      <div class="title-vr"><?=$value['home-one-tajtl']?></div>
      <div class="descr-vr"><?=$value['home-one-tekst']?></div>
      <div class="icons-vr">

      <?php foreach ($value['home-one-blok_ikonok'] as $key2 => $value2): ?>
        <div class="icon-vr">
            <div class="icon-vr1" style="width:50px;height:50px;display:block;background: url('<?=$value2['home-one-blok_ikonka']['url']?>') center center no-repeat;margin: 0px auto;"></div>
            <div class="icon-vr1-descr"><?=$value2['home-one-blok_tekst']?></div>
        </div>
      <?php endforeach ?> 

      <div class="sixplus">6+</div>

        
      </div>
      <div class="buy-vr">
        <div class="buy-vr-price"><?=$value['tekstovaya_ikonka']?></div>
        <div class="buy-vr-button"><button><?=$value['home-one-knopka']?></button></div>
      </div>
    </div>
 </div>
 <?php endforeach ?>





</div>

<div class="block-q">
  <h2 class="fgy"><?php echo get_field('school-four-zagolovok') ?></h2>

  <?php foreach (get_field('school-four-vnimanie_blok') as $key => $value): ?>
    <div class="info-item-booking">
      <div class="img"><img src="<?php bloginfo('template_url'); ?>/images-2/galka.png" alt=""></div>
      <div class="info">
        <div class="info-title"><?=$value['school-four-tajtl']?></div>
        <div class="info-text"><?=$value['school-four-tekst']?></div>
      </div>
    </div>
  <?php endforeach ?>
  <div class="button-call">
    <button><a style="color:inherit;" href="#fancyboxID-8" class="fancybox-inline"><?php echo get_field('school-four-text') ?></a></button>
    <div id="fancyboxID-8" class="fancybox-hidden" style="width:460px;max-width:100%;">
        <p><?php echo do_shortcode( '[contact-form-7 id="2662" title="Question RU"]'); ?></p>
    </div>   
  </div>
</div>
 













 
 
  </div>
</div>
   
  
   


    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.1.js"></script> -->
 
    <script src="<?php bloginfo('template_url'); ?>/js-2/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js-2/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper(".mySwiper4", {
        slidesPerView: 1,
        spaceBetween: 24,
        navigation: {
          nextEl: ".swiper-button-next4",
          prevEl: ".swiper-button-prev4",
        },
        breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 24,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 24,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 24,
        },
      },
      });
  </script>
 <script src="<?php bloginfo('template_url'); ?>/js-2/jquery.fancybox.min.js"></script>
<script>
  $('.open_popup').click(function() {
      var popup_id = $('#' + $(this).attr("rel"));
      $(popup_id).show();
      $('.overlay').show();
  })
  $('.popup, .overlay, .menu-box').click(function() {
      $('.overlay, .popup').hide();
  })
</script>

<?php include_language_specific_part('footer'); ?> 