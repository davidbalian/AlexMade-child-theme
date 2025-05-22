<?php
    /*
    Template Name: Birthsdays-new-el
    Template Post Type: activities_el
    */
?>

<?php include_once("header-box_el.php"); ?>
<head>
    <link href="<?php bloginfo('template_url'); ?>/fonts-2/stylesheet.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css-2/jquery.fancybox.min.css">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css-2/main.css"> 
</head>
 

  


<div class="banner">
   
    <div class="img" style="background:url(<?php echo get_field('activ-izobrazhenie') ['url']?>);">
     
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
  <img src="<?php bloginfo('template_url'); ?>/images-2/icon.png" alt="">
  <span><?php echo get_field('price-three-zagolovok')?></span>
</h2>

    <div class="text-after-h2">
      <div class="text-after-h3"><?php echo get_field('price-three-podagolovok')?></div>
      <?php echo get_field('price-three-tekst')?></div>


<div class="icon-list-limassol">
  <?php foreach (get_field('school-three-blok') as $key => $value): ?>
    <div class="icon-t">
      <div class="big-icon"><img src="<?=$value['about-three-ikonka']['url']?>" alt=""></div>
      <div class="text-descr"><?=$value['about-three-tekst']?></div>
    </div>
  <?php endforeach ?>

</div>



<div class="after-icon-secr"><?php echo get_field('calc-zagolovok')?></div>



<div class="calculator">
  <div class="calculator-item">
    <div class="calculator-item-title"><?php echo get_field('calc-zagolovok_bloka_vremya')?></div>
    <div class="calculator-item-descr"><?php echo get_field('calc-podzagolovok_bloka_vremya')?></div>
    <div class="calculator-item-variants">
      <div class="calculator-item-variant calculator-item-variant-1">
        <label ><input type="radio" id="variant1-1" name="variant1" checked value="<?php echo get_field('calc-vremya-1')?>"> <span><?php echo get_field('calc-vremya-1')?></span>
        <?php
          $text_field = get_field('calc-tekst_pri_navedenii_1');
          if (!empty($text_field)) {
            ?>
            <div class="info-form">
              <div class="info-form-img ">
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/images-2/small-upp.svg" alt=""> </a>
                <div class="f-price"><?php echo $text_field ?></div>
              </div>
            </div>
            <?php
          }
        ?></label>
      </div>
      <div class="calculator-item-variant">
        <label  ><input type="radio" id="variant1-2" name="variant1"   value="<?php echo get_field('calc-vremya-2')?>"> <span><?php echo get_field('calc-vremya-2')?></span>
        <?php
          $text_field = get_field('calc-tekst_pri_navedenii_2');
          if (!empty($text_field)) {
            ?>
            <div class="info-form">
              <div class="info-form-img ">
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/images-2/small-upp.svg" alt=""> </a>
                <div class="f-price"><?php echo $text_field ?></div>
              </div>
            </div>
            <?php
          }
        ?></label>
      </div>
      <div class="calculator-item-variant">
        <label  ><input type="radio" id="variant1-3" name="variant1"  value="<?php echo get_field('calc-vremya-3')?>"> <span><?php echo get_field('calc-vremya-3')?></span>
        <?php
          $text_field = get_field('calc-tekst_pri_navedenii_3');
          if (!empty($text_field)) {
            ?>
            <div class="info-form">
              <div class="info-form-img ">
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/images-2/small-upp.svg" alt=""> </a>
                <div class="f-price"><?php echo $text_field ?></div>
              </div>
            </div>
            <?php
          }
        ?>
        </label>
      </div>
    </div>
  </div>


  <div class="calculator-item">
    <div class="calculator-item-title"><?php echo get_field('calc-zagolovok_bloka_day')?></div>
    <div class="calculator-item-descr"><?php echo get_field('calc-podzagolovok_bloka_day')?></div>
    <div class="calculator-item-variants">
      <div class="calculator-item-variant">
        <label ><input type="radio" id="variant2-1" name="variant2" checked value="<?php echo get_field('calc-day-1')?>"> <span><?php echo get_field('calc-day-1')?> </span>
      <?php
          $text_field = get_field('calc-tekst_pri_navedenii_day_1');
          if (!empty($text_field)) {
            ?>
            <div class="info-form">
              <div class="info-form-img ">
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/images-2/small-upp.svg" alt=""> </a>
                <div class="f-price"><?php echo $text_field ?></div>
              </div>
            </div>
            <?php
          }
        ?></label>
      </div>
      <div class="calculator-item-variant">
        <label  ><input type="radio" id="variant2-2" name="variant2"   value="<?php echo get_field('calc-day-2')?>"> <span><?php echo get_field('calc-day-2')?></span>
      <?php
          $text_field = get_field('calc-tekst_pri_navedenii_day_2');
          if (!empty($text_field)) {
            ?>
            <div class="info-form">
              <div class="info-form-img ">
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/images-2/small-upp.svg" alt=""> </a>
                <div class="f-price"><?php echo $text_field ?></div>
              </div>
            </div>
            <?php
          }
        ?></label>
      </div>
      <div class="calculator-item-variant">
        <label  ><input type="radio" id="variant2-3" name="variant2"  value="<?php echo get_field('calc-day-3')?>"> <span><?php echo get_field('calc-day-3')?></span>
      <?php
          $text_field = get_field('calc-tekst_pri_navedenii_day_3');
          if (!empty($text_field)) {
            ?>
            <div class="info-form">
              <div class="info-form-img ">
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/images-2/small-upp.svg" alt=""> </a>
                <div class="f-price"><?php echo $text_field ?></div>
              </div>
            </div>
            <?php
          }
        ?></label>
      </div>

      <div class="calculator-item-variant">
        <label  ><input type="radio" id="variant2-4" name="variant2"  value="<?php echo get_field('calc-day-4')?>"> <span><?php echo get_field('calc-day-4')?></span>
      <?php
          $text_field = get_field('calc-tekst_pri_navedenii_day_4');
          if (!empty($text_field)) {
            ?>
            <div class="info-form">
              <div class="info-form-img ">
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/images-2/small-upp.svg" alt=""> </a>
                <div class="f-price"><?php echo $text_field ?></div>
              </div>
            </div>
            <?php
          }
        ?></label>
      </div>

      <div class="calculator-item-variant">
        <label  ><input type="radio" id="variant2-5" name="variant2"  value="<?php echo get_field('calc-day-5')?>"> <span><?php echo get_field('calc-day-5')?></span>
          
        <?php
          $text_field = get_field('calc-tekst_pri_navedenii_day_5');
          if (!empty($text_field)) {
            ?>
            <div class="info-form">
              <div class="info-form-img ">
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/images-2/small-upp.svg" alt=""> </a>
                <div class="f-price"><?php echo $text_field ?></div>
              </div>
            </div>
            <?php
          }
        ?>
        </label>
      </div>

      <div class="calculator-item-variant">
        <label  ><input type="radio" id="variant2-6" name="variant2"  value="<?php echo get_field('calc-day-6')?>"> 
          <span><?php echo get_field('calc-day-6')?></span>
          
          <?php
          $text_field = get_field('calc-tekst_pri_navedenii_day_6');
          if (!empty($text_field)) {
            ?>
            <div class="info-form">
              <div class="info-form-img ">
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/images-2/small-upp.svg" alt=""> </a>
                <div class="f-price"><?php echo $text_field ?></div>
              </div>
            </div>
            <?php
          }
        ?>
        </label>
      </div>

      <div class="calculator-item-variant">
        <label  ><input type="radio" id="variant2-7" name="variant2"  value="<?php echo get_field('calc-day-7')?>"> <span><?php echo get_field('calc-day-7')?></span>
          
        <?php
          $text_field = get_field('calc-tekst_pri_navedenii_day_7');
          if (!empty($text_field)) {
            ?>
            <div class="info-form">
              <div class="info-form-img ">
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/images-2/small-upp.svg" alt=""> </a>
                <div class="f-price"><?php echo $text_field ?></div>
              </div>
            </div>
            <?php
          }
        ?>
        </label>
      </div>
    </div>
  </div>




  <div class="calculator-item calculator-item-3">
    <div class="calculator-item-title"><?php echo get_field('calc-zagolovok_bloka_sum')?></div>
    <div class="calculator-item-descr"><?php echo get_field('calc-podzagolovok_bloka_sum')?></div>
    <div class="calculator-item-variants">
     
      <div class="calculator-item-variant">
        <label  ><input type="radio" id="variant3-8" name="variant3"  value="<?php echo get_field('calc-sum-1')?>" checked> <span><?php echo get_field('calc-sum-1')?></span>
      <?php
          $text_field = get_field('calc-tekst_pri_navedenii_sum-1');
          if (!empty($text_field)) {
            ?>
            <div class="info-form">
              <div class="info-form-img ">
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/images-2/small-upp.svg" alt=""> </a>
                <div class="f-price"><?php echo $text_field ?></div>
              </div>
            </div>
            <?php
          }
        ?></label>
      </div>

      <div class="calculator-item-variant">
        <label  ><input type="radio" id="variant3-9" name="variant3"  value="<?php echo get_field('calc-sum-2')?>"> <span><?php echo get_field('calc-sum-2')?></span>
      <?php
          $text_field = get_field('calc-tekst_pri_navedenii_sum-2');
          if (!empty($text_field)) {
            ?>
            <div class="info-form">
              <div class="info-form-img ">
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/images-2/small-upp.svg" alt=""> </a>
                <div class="f-price"><?php echo $text_field ?></div>
              </div>
            </div>
            <?php
          }
        ?></label>
      </div>

      <div class="calculator-item-variant">
        <label  ><input type="radio" id="variant3-10" name="variant3"  value="<?php echo get_field('calc-sum-3')?>"> <span><?php echo get_field('calc-sum-3')?></span>
      <?php
          $text_field = get_field('calc-tekst_pri_navedenii_sum-3');
          if (!empty($text_field)) {
            ?>
            <div class="info-form">
              <div class="info-form-img ">
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/images-2/small-upp.svg" alt=""> </a>
                <div class="f-price"><?php echo $text_field ?></div>
              </div>
            </div>
            <?php
          }
        ?></label>
      </div> 



    </div>
  </div>



  <div class="calculator-item d-yv">
    <div class="calculator-item-title"><?php echo get_field('pack-zagolovok')?></div>
    <div class="calculator-item-descr"><?php echo get_field('pack-podzagolovok')?></div>
     <div class="calculator-usluga-info" style="background:#000 url(<?php echo get_field('pack-img')['url']?>) no-repeat;background-size:cover;margin-left: 35px;">
      <div class="calculator-usluga-info-img">
        <div class="img-rounded">
          <div class="img-rounded-text big-icon"><?php echo get_field('pack-tekst_v_kruge')?></div>
          <div class="text-list">
            <?php foreach (get_field('pack-spisok') as $key => $value): ?>
              <div class="text-item"><?=$value['pack-stroka']?></div>
            <?php endforeach ?>
          </div>
        </div>
      </div>
     </div>
  </div>



  <div class="calculator-item">
    <div class="calculator-item-title"><?php echo get_field('dop-zagolovok')?></div>
    
    <div class="calculator-item-variants col-3d">
      <div class="calculator-item-variant">
        <?php $li_field = get_field('dop-li-1'); if (!empty($li_field)) { ?>
          <label ><input type="checkbox" id="variant4-11" name="variant8" checked value="<?php echo $li_field ?>"> <span><?php echo $li_field ?></span>
          <?php $text_field = get_field('calc-tekst_pri_navedenii_li-1'); if (!empty($text_field)) { ?>
            <div class="info-form">
              <div class="info-form-img  info-form-img-questionmark">
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/images-2/questionmark.svg" alt=""> </a>
                <div class="f-price"><?php echo $text_field ?></div>
              </div>
            </div>
          <?php } ?>
          </label>
        <?php } ?>
      </div>
      <div class="calculator-item-variant">
        <?php $li_field = get_field('dop-li-2'); if (!empty($li_field)) { ?>
          <label ><input type="checkbox" id="variant4-12" name="variant9" value="<?php echo $li_field ?>"> <span><?php echo $li_field ?></span>
          <?php $text_field = get_field('calc-tekst_pri_navedenii_li-2'); if (!empty($text_field)) { ?>
            <div class="info-form">
              <div class="info-form-img  info-form-img-questionmark">
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/images-2/questionmark.svg" alt=""> </a>
                <div class="f-price"><?php echo $text_field ?></div>
              </div>
            </div>
          <?php } ?>
          </label>
        <?php } ?>
      </div>
      <div class="calculator-item-variant">
        <?php $li_field = get_field('dop-li-3'); if (!empty($li_field)) { ?>
          <label ><input type="checkbox" id="variant4-13" name="variant10" value="<?php echo $li_field ?>"> <span><?php echo $li_field ?></span>
          <?php $text_field = get_field('calc-tekst_pri_navedenii_li-3'); if (!empty($text_field)) { ?>
            <div class="info-form">
              <div class="info-form-img  info-form-img-questionmark">
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/images-2/questionmark.svg" alt=""> </a>
                <div class="f-price"><?php echo $text_field ?></div>
              </div>
            </div>
          <?php } ?>
          </label>
        <?php } ?>
      </div>
      <div class="calculator-item-variant">
        <?php $li_field = get_field('dop-li-4'); if (!empty($li_field)) { ?>
          <label ><input type="checkbox" id="variant4-14" name="variant11" value="<?php echo $li_field ?>"> <span><?php echo $li_field ?></span>
          <?php $text_field = get_field('calc-tekst_pri_navedenii_li-4'); if (!empty($text_field)) { ?>
            <div class="info-form">
              <div class="info-form-img  info-form-img-questionmark">
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/images-2/questionmark.svg" alt=""> </a>
                <div class="f-price"><?php echo $text_field ?></div>
              </div>
            </div>
          <?php } ?>
          </label>
        <?php } ?>
      </div>
      <div class="calculator-item-variant">
      <?php $li_field = get_field('dop-li-5'); if (!empty($li_field)) { ?>
          <label ><input type="checkbox" id="variant4-15" name="variant12" value="<?php echo $li_field ?>"> <span><?php echo $li_field ?></span>
          <?php $text_field = get_field('calc-tekst_pri_navedenii_li-5'); if (!empty($text_field)) { ?>
            <div class="info-form">
              <div class="info-form-img  info-form-img-questionmark">
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/images-2/questionmark.svg" alt=""> </a>
                <div class="f-price"><?php echo $text_field ?></div>
              </div>
            </div>
          <?php } ?>
          </label>
        <?php } ?>
      </div>
      <div class="calculator-item-variant">
      <?php $li_field = get_field('dop-li-6'); if (!empty($li_field)) { ?>
          <label ><input type="checkbox" id="variant4-16" name="variant13" value="<?php echo $li_field ?>"> <span><?php echo $li_field ?></span>
          <?php $text_field = get_field('calc-tekst_pri_navedenii_li-6'); if (!empty($text_field)) { ?>
            <div class="info-form">
              <div class="info-form-img  info-form-img-questionmark">
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/images-2/questionmark.svg" alt=""> </a>
                <div class="f-price"><?php echo $text_field ?></div>
              </div>
            </div>
          <?php } ?>
          </label>
        <?php } ?>
      </div>
      <div class="calculator-item-variant">
      <?php $li_field = get_field('dop-li-7'); if (!empty($li_field)) { ?>
          <label ><input type="checkbox" id="variant4-17" name="variant14" value="<?php echo $li_field ?>"> <span><?php echo $li_field ?></span>
          <?php $text_field = get_field('calc-tekst_pri_navedenii_li-7'); if (!empty($text_field)) { ?>
            <div class="info-form">
              <div class="info-form-img  info-form-img-questionmark">
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/images-2/questionmark.svg" alt=""> </a>
                <div class="f-price"><?php echo $text_field ?></div>
              </div>
            </div>
          <?php } ?>
          </label>
        <?php } ?>
      </div>
      <div class="calculator-item-variant">
      <?php $li_field = get_field('dop-li-8'); if (!empty($li_field)) { ?>
          <label ><input type="checkbox" id="variant4-18" name="variant15" value="<?php echo $li_field ?>"> <span><?php echo $li_field ?></span>
          <?php $text_field = get_field('calc-tekst_pri_navedenii_li-8'); if (!empty($text_field)) { ?>
            <div class="info-form">
              <div class="info-form-img  info-form-img-questionmark">
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/images-2/questionmark.svg" alt=""> </a>
                <div class="f-price"><?php echo $text_field ?></div>
              </div>
            </div>
          <?php } ?>
          </label>
        <?php } ?>
      </div>
      <div class="calculator-item-variant">
      <?php $li_field = get_field('dop-li-9'); if (!empty($li_field)) { ?>
          <label ><input type="checkbox" id="variant4-19" name="variant16" value="<?php echo $li_field ?>"> <span><?php echo $li_field ?></span>
          <?php $text_field = get_field('calc-tekst_pri_navedenii_li-9'); if (!empty($text_field)) { ?>
            <div class="info-form">
              <div class="info-form-img  info-form-img-questionmark">
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/images-2/questionmark.svg" alt=""> </a>
                <div class="f-price"><?php echo $text_field ?></div>
              </div>
            </div>
          <?php } ?>
          </label>
        <?php } ?>
      </div>

    </div>
  </div>

<div class="total-calculator">
  <div class="button-calculator">
      <button><?php echo get_field('calc-footer-knopka')?></button>
      <div class="total-info"><?php echo get_field('calc-footer-text')?></div>
  </div>

  <div class="price-calculator">
    <div class="price-calculator-total">€ 150.00</div>
    <div class="price-calculator-img">
      <a style="color:inherit;" href="#fancyboxID-8" class="manager-button fancybox-inline">
        <img src="<?php bloginfo('template_url'); ?>/images-2/icon92.png" alt="">
      <span><?php echo get_field('calc-footer-obratnaya_svyaz')?></span></a>
      <div id="fancyboxID-8" class="fancybox-hidden" style="width:460px;max-width:100%;">
        <p><?php echo do_shortcode( '[contact-form-7 id="3035" title="Birthday_bookings_GR"]'); ?></p>
      </div> 
    </div>


  </div>
</div>
<style>
  .hidden-form-block{
    display: none;
  }
</style>
<script>
$('.manager-button').on('click', function() {
  var currentValue = $('input[name="variant4-text"]').val();
  var newValue = '';
  if ($('#variant1-1').prop('checked')) {
      var variant1 = $('#variant1-1').val();
      $('input[name="variant1-text"]').val(variant1);
    }
  if ($('#variant1-2').prop('checked')) {
      var variant1 = $('#variant1-2').val();
      $('input[name="variant1-text"]').val(variant1);
    }
  if ($('#variant1-3').prop('checked')) {
      var variant1 = $('#variant1-3').val();
      $('input[name="variant1-text"]').val(variant1);
    }
  if ($('#variant2-1').prop('checked')) {
      var variant2 = $('#variant2-1').val();
      $('input[name="variant2-text"]').val(variant2);
    }
  if ($('#variant2-2').prop('checked')) {
      var variant2 = $('#variant2-2').val();
      $('input[name="variant2-text"]').val(variant2);
    }
  if ($('#variant2-3').prop('checked')) {
      var variant2 = $('#variant2-3').val();
      $('input[name="variant2-text"]').val(variant2);
    }
  if ($('#variant2-4').prop('checked')) {
      var variant2 = $('#variant2-4').val();
      $('input[name="variant2-text"]').val(variant2);
    }
  if ($('#variant2-5').prop('checked')) {
      var variant2 = $('#variant2-5').val();
      $('input[name="variant2-text"]').val(variant2);
    }
  if ($('#variant2-6').prop('checked')) {
      var variant2 = $('#variant2-6').val();
      $('input[name="variant2-text"]').val(variant2);
    }
  if ($('#variant2-7').prop('checked')) {
      var variant2 = $('#variant2-7').val();
      $('input[name="variant2-text"]').val(variant2);
    }
  if ($('#variant3-8').prop('checked')) {
      var variant3 = $('#variant3-8').val();
      $('input[name="variant3-text"]').val(variant3);
    }
  if ($('#variant3-9').prop('checked')) {
      var variant3 = $('#variant3-9').val();
      $('input[name="variant3-text"]').val(variant3);
    }
  if ($('#variant3-10').prop('checked')) {
      var variant3 = $('#variant3-10').val();
      $('input[name="variant3-text"]').val(variant3);
    }
  if ($('#variant4-11').prop('checked')) {
      newValue += $('#variant4-11').val() + ', ';
    }
  if ($('#variant4-12').prop('checked')) {
      newValue += $('#variant4-12').val() + ', ';
    }
  if ($('#variant4-13').prop('checked')) {
      newValue += $('#variant4-13').val() + ', ';
    }
  if ($('#variant4-14').prop('checked')) {
      newValue += $('#variant4-14').val() + ', ';
    }
  if ($('#variant4-15').prop('checked')) {
      newValue += $('#variant4-15').val() + ', ';
    }
  if ($('#variant4-16').prop('checked')) {
      newValue += $('#variant4-16').val() + ', ';
    }
  if ($('#variant4-17').prop('checked')) {
      newValue += $('#variant4-17').val() + ', ';
    }
  if ($('#variant4-18').prop('checked')) {
      newValue += $('#variant4-18').val() + ', ';
    }
  if ($('#variant4-19').prop('checked')) {
      newValue += $('#variant4-19').val() + ', ';
    }
    $('input[name="variant4-text"]').val(currentValue + newValue);
});
</script>


<?php $calc_vremya_1 = get_field('calc-vremya-1'); ?>
<?php $calc_vremya_2 = get_field('calc-vremya-2'); ?>
<?php $calc_vremya_3 = get_field('calc-vremya-3'); ?>
<?php $calc_day_1 = get_field('calc-day-1'); ?>
<?php $calc_day_2 = get_field('calc-day-2'); ?>
<?php $calc_day_3 = get_field('calc-day-3'); ?>
<?php $calc_day_4 = get_field('calc-day-4'); ?>
<?php $calc_day_5 = get_field('calc-day-5'); ?>
<?php $calc_day_6 = get_field('calc-day-6'); ?>
<?php $calc_day_7 = get_field('calc-day-7'); ?>
<?php $calc_sum_3 = get_field('calc-sum-3'); ?>
<?php $calc_sum_value_1 = get_field('calc-sum-value-1'); ?>
<?php $calc_sum_value_2 = get_field('calc-sum-value-2'); ?>
<?php $calc_sum_value_3 = get_field('calc-sum-value-3'); ?>
<?php $calc_cost_1 = get_field('calc-cost-1'); ?>
<?php $calc_cost_2 = get_field('calc-cost-2'); ?>
<?php $calc_cost_3 = get_field('calc-cost-3'); ?>
<?php $calc_cost_4 = get_field('calc-cost-4'); ?>
<?php $calc_cost_5 = get_field('calc-cost-5'); ?>
<?php $calc_cost_6 = get_field('calc-cost-6'); ?>
<?php $calc_cost_7 = get_field('calc-cost-7'); ?>
<?php $calc_cost_8 = get_field('calc-cost-8'); ?>
<?php $calc_cost_9 = get_field('calc-cost-9'); ?>
<?php $calc_cost_10 = get_field('calc-cost-10'); ?>
<?php $calc_cost_11 = get_field('calc-cost-11'); ?>
<?php $calc_cost_12 = get_field('calc-cost-12'); ?>
<?php $calc_cost_13 = get_field('calc-cost-13'); ?>
<?php $calc_cost_14 = get_field('calc-cost-14'); ?>
<?php $calc_cost_15 = get_field('calc-cost-15'); ?>
<?php $calc_cost_16 = get_field('calc-cost-16'); ?>
<?php $calc_cost_17 = get_field('calc-cost-17'); ?>
<?php $calc_cost_18 = get_field('calc-cost-18'); ?>


<script>
const timeInputs = document.querySelectorAll('input[name="variant1"]');
const dayInputs = document.querySelectorAll('input[name="variant2"]');
const childrenInputs = document.querySelectorAll('input[name="variant3"]');
const calculateButton = document.querySelector('button');
const totalPriceElement = document.querySelector('.price-calculator-total');

let totalPrice = 0;

function calculateTotalPrice() {
  const selectedTime = getSelectedValue(timeInputs);
  const selectedDay = getSelectedValue(dayInputs);
  let selectedChildren = getSelectedValue(childrenInputs);

  console.log(`Selected Time: ${selectedTime}`);
  console.log(`Selected Day: ${selectedDay}`);
  console.log(`Selected Children: ${selectedChildren}`);

  let pricePerChild = 0;
  let totalChildren = 0;

  if (selectedChildren === '<?php echo $calc_sum_3 ?>') {
    totalChildren = <?php echo $calc_sum_value_3 ?>; // Assign number 20
    if (selectedDay === '<?php echo $calc_day_1 ?>' || selectedDay === '<?php echo $calc_day_2 ?>' || selectedDay === '<?php echo $calc_day_3 ?>' || selectedDay === '<?php echo $calc_day_4 ?>' || selectedDay === '<?php echo $calc_day_5 ?>') {
      if (selectedTime === '<?php echo $calc_vremya_1 ?>') {
        pricePerChild = <?php echo $calc_cost_3 ?>;
      } else if (selectedTime === '<?php echo $calc_vremya_2 ?>') {
        pricePerChild = <?php echo $calc_cost_6 ?>;
      } else if (selectedTime === '<?php echo $calc_vremya_3 ?>') {
        pricePerChild = <?php echo $calc_cost_9 ?>;
      }
    } else if (selectedDay === '<?php echo $calc_day_6 ?>' || selectedDay === '<?php echo $calc_day_7 ?>') {
      if (selectedTime === '<?php echo $calc_vremya_1 ?>') {
        pricePerChild = <?php echo $calc_cost_12 ?>;
      } else if (selectedTime === '<?php echo $calc_vremya_2 ?>') {
        pricePerChild = <?php echo $calc_cost_15 ?>;
      } else if (selectedTime === '<?php echo $calc_vremya_3 ?>') {
        pricePerChild = <?php echo $calc_cost_18 ?>;
      }
    }
  } else {
    const numericValue = selectedChildren.match(/\d+/);
    if (numericValue) {
      totalChildren = parseInt(numericValue[0], 10);
    } else {
      totalChildren = 0; // default value
    }

    if (selectedDay === '<?php echo $calc_day_1 ?>' || selectedDay === '<?php echo $calc_day_2 ?>' || selectedDay === '<?php echo $calc_day_3 ?>' || selectedDay === '<?php echo $calc_day_4 ?>' || selectedDay === '<?php echo $calc_day_5 ?>') {
      if (selectedTime === '<?php echo $calc_vremya_1 ?>') {
        if (totalChildren <= <?php echo $calc_sum_value_1 ?>) {
          pricePerChild = <?php echo $calc_cost_1 ?>;
        } else if (totalChildren <= <?php echo $calc_sum_value_2 ?>) {
          pricePerChild = <?php echo $calc_cost_2 ?>;
        } else {
          pricePerChild = <?php echo $calc_cost_3 ?>;
        }
      } else if (selectedTime === '<?php echo $calc_vremya_2 ?>') {
        if (totalChildren <= <?php echo $calc_sum_value_1 ?>) {
          pricePerChild = <?php echo $calc_cost_4 ?>;
        } else if (totalChildren <= <?php echo $calc_sum_value_2 ?>) {
          pricePerChild = <?php echo $calc_cost_5 ?>;
        } else {
          pricePerChild = <?php echo $calc_cost_6 ?>;
        }
      } else if (selectedTime === '<?php echo $calc_vremya_3 ?>') {
        if (totalChildren <= <?php echo $calc_sum_value_1 ?>) {
          pricePerChild = <?php echo $calc_cost_7 ?>;
        } else if (totalChildren <= <?php echo $calc_sum_value_2 ?>) {
          pricePerChild = <?php echo $calc_cost_8 ?>;
        } else {
          pricePerChild = <?php echo $calc_cost_9 ?>;
        }
      }
    } else if (selectedDay === '<?php echo $calc_day_6 ?>' || selectedDay === '<?php echo $calc_day_7 ?>') {
      if (selectedTime === '<?php echo $calc_vremya_1 ?>') {
        if (totalChildren <= <?php echo $calc_sum_value_1 ?>) {
          pricePerChild = <?php echo $calc_cost_10 ?>;
        } else if (totalChildren <= <?php echo $calc_sum_value_2 ?>) {
          pricePerChild = <?php echo $calc_cost_11 ?>;
        } else {
          pricePerChild = <?php echo $calc_cost_12 ?>;
        }
      } else if (selectedTime === '<?php echo $calc_vremya_2 ?>') {
        if (totalChildren <= <?php echo $calc_sum_value_1 ?>) {
          pricePerChild = <?php echo $calc_cost_13 ?>;
        } else if (totalChildren <= <?php echo $calc_sum_value_2 ?>) {
          pricePerChild = <?php echo $calc_cost_14 ?>;
        } else {
          pricePerChild = <?php echo $calc_cost_15 ?>;
        }
      } else if (selectedTime === '<?php echo $calc_vremya_3 ?>') {
        if (totalChildren <= <?php echo $calc_sum_value_1 ?>) {
          pricePerChild = <?php echo $calc_cost_16 ?>;
        } else if (totalChildren <= <?php echo $calc_sum_value_2 ?>) {
          pricePerChild = <?php echo $calc_cost_17 ?>;
        } else {
          pricePerChild = <?php echo $calc_cost_18 ?>;
        }
      }
    }
  }

  console.log(`Price per child: ${pricePerChild}`);
  console.log(`Total children: ${totalChildren}`);

  if (isNaN(totalChildren)) {
    totalPriceElement.textContent = 'Price calculation error';
  } else {
    totalPrice = pricePerChild * totalChildren;
    console.log(`Total price: ${totalPrice}`);
    totalPriceElement.textContent = `€ ${totalPrice.toFixed(2)}`; // Add € symbol and format price to 2 decimal places
  }
}

function getSelectedValue(inputs) {
  for (const input of inputs) {
    if (input.checked) {
      return input.value;
    }
  }
  return null;
}

calculateButton.addEventListener('click', calculateTotalPrice);
</script>



</div>




<div class="swiper-container">
  <div class="swiper-button-prev swiper-button-prev4"></div>
  <div class="swiper mySwiper4">
      <div class="swiper-wrapper">
        <?php foreach (get_field('activ-galereya') as $key => $value): ?>
          <div class="swiper-slide" style="background: url(<?=$value['activ-izobrazhenie']['url']?>) left top no-repeat; background-size: cover;"></div>
        <?php endforeach ?>
                                        
      </div>
  </div>
  <div class="swiper-button-next swiper-button-next4"></div>
</div>




 <div class="border"></div>
<div class="count-list">
<div class="count-item-list">
  <?php foreach (get_field('school-three-blok_2') as $key => $value): ?>
    <div class="count-item-item">
      <div class="count-item-item-count"><?=$value['about-three-text-2-1']?></div>
      <div class="count-item-item-text"><?=$value['about-three-text-2-2']?></div>
    </div>
  <?php endforeach ?>


</div>
</div>


 


<div class="button-call">
  <button><a style="color:inherit;" href="<?php echo get_permalink(2510); ?>"><?php echo get_field('price-three-knopka-1')?></a></button>
</div>

<div class="button-call">
    <button><a style="color:inherit;" href="#fancyboxID-8" class="fancybox-inline"><?php echo get_field('price-three-knopka-2')?></a></button>
    <div id="fancyboxID-8" class="fancybox-hidden" style="width:460px;max-width:100%;">
        <p><?php echo do_shortcode( '[contact-form-7 id="2663" title="Question GR"]'); ?></p>
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

<?php include_once("footer-box_el.php"); ?> 