<?php
    /*
    Template Name: Birthsdays-2-new-el
    Template Post Type: activities_el
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
  .fancybox-wrap{
    height: max-content !important;
  }
  .wpcf7 form.sent .wpcf7-response-output {
    border-color: #46b450 !important;
    background: #46b450 !important;
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
            <li><a href="<?php echo get_permalink(750); ?>">Αρχική</a> <span class="divider">-</span></li>
            <li><a href="<?php echo get_permalink(756); ?>">Δραστηριoτητες</a> <span class="divider">-</span></li>
            <li><span><?= the_title() ?></span></li>
        </ul>
    </div>

<div class="border"></div>
<h2>
  <img src="<?php echo get_field('price-three-ikonka') ['url']?>" alt="">
  <span><?php echo get_field('price-three-zagolovok') ?></span>
</h2>

    <div class="b-blocks">

    <?php foreach (get_field('activ-raspisanie') as $key => $value): ?>
      <div class="b-blocks-item">
        <div class="b-blocks-weekends"><?=$value['raspisanie-tajtl']?></div>
        <div class="b-cp">
        <?php foreach ($value['raspisanie-nedelya'] as $key2 => $value2): ?>
        <div class="col1">
         <div class="item-v">
          <div class="item-v-title"><?=$value2['raspisanietekst_podzagolovok']?></div>
            
            <?php foreach ($value2['raspisanie-stroka'] as $key3 => $value3): ?>
                <div class="item-v-item"><span><?=$value3['raspisanie-vremya']?></span> <b><?=$value3['raspisanie-cost']?></b></div>
            <?php endforeach ?>
                 
            </div> 
            </div>
         <?php endforeach ?>
        </div>

        </div>
    <?php endforeach ?>



    </div>



  
   

<div class="plan">
 
    <h2>
      <img src="<?php echo get_field('school-six-img') ['url']?>" alt="">
      <span><?php echo get_field('school-six-zagolovok') ?></span>
    </h2>
    
   <div class="plan-set">

    <?php foreach (get_field('school-six-list') as $key => $value): ?>
        <div class="plan-set-item">
            <div class="plan-set-name"><?=$value['school-six-list-text-1']?></div>
            <div class="plan-set-r"><?=$value['school-six-list-text-2']?></div>
        </div>
    <?php endforeach ?>
      
   </div>


<div class="descr-plan">
  <div class="d-plan-item"><?php echo get_field('school-six-tekst-1') ?></div>
  <div class="d-plan-item"><?php echo get_field('school-six-tekst-2') ?></div>
  <div class="d-plan-item"><?php echo get_field('school-six-tekst-3') ?></div>
  <div class="d-plan-item"><?php echo get_field('school-six-tekst-4') ?></div>
</div>

<?php foreach (get_field('school-six-block') as $key => $value): ?>
<div class="plan-double-t">
  <div class="plan-doble-column">
  <?php foreach ($value['school-six-block-list'] as $key2 => $value2): ?>
    <div class="plan-doble-column1">
        <?php foreach ($value2['school-six-block-stroka'] as $key3 => $value3): ?>
            <div class="item-pd">
                <span><?=$value3['school-six-block-text-1']?></span>  <b><?=$value3['school-six-block-text-2']?></b> 
            </div>
        <?php endforeach ?>
    </div>
    <?php endforeach ?>
  </div>
  <div class="r"><?=$value['school-six-block-text']?></div>
</div>
<?php endforeach ?>
   
</div>


<div class="booking-info">
<h2><?php echo get_field('dr-three-zagolovok') ?></h2>
<div class="text-h2"><?php echo get_field('dr-three-podzagolovok') ?></div>
  <div class="text2-h2"><?php echo get_field('dr-three-text') ?></div>
   
<?php foreach (get_field('school-five-blok') as $key => $value): ?>
<div class="info-item-booking">
  <div class="img"><img src="<?php bloginfo('template_url'); ?>/images-2/galka.png" alt=""></div>
  <div class="info">
    <div class="info-title"><?=$value['home-two-tekst_1']?></div>
    <div class="info-text"><?=$value['home-two-tekst_2']?></div>
  </div>
</div>
<?php endforeach ?>


<div class="button-call">
    <button><a style="color:inherit;" href="<?php echo get_permalink(3039); ?>"><?php echo get_field('price-three-knopka-3') ?></a></button>
</div>

<div class="border"></div>
</div>




  
   
   
   
   
  <div class="faq">
    <h2>
      <img src="<?php echo get_field('school-four-icon') ['url']?>" alt="">
      <span><?php echo get_field('school-four-zagolovok') ?></span>
    </h2>


    <div class="faq-items">
        <?php foreach (get_field('school-four-vnimanie_blok') as $key => $value): ?>

            <div class="faq-item">
                <div class="faq-title"><?=$value['school-four-tajtl']?></div>
                <div class="faq-descr"><?=$value['school-four-tekst']?></div>
            </div>

        <?php endforeach ?>

           
          
            <div class="faq-descr offer"><?php echo get_field('school-four-text') ?></div></div>
    </div>

    <div class="button-call">
        <button><a style="color:inherit;" href="#fancyboxID-8" class="fancybox-inline"><?php echo get_field('price-three-knopka-2') ?></a></button>
        <div id="fancyboxID-8" class="fancybox-hidden" style="width:460px;max-width:100%;">
            <p><?php echo do_shortcode( '[contact-form-7 id="2663" title="Question GR"]'); ?></p>
        </div>  
    </div>
   
   </div>
  
   
  
   
   
   
   
   
  </div>
</div>
   
  
   


 
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