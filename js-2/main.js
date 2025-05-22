$(document).ready(function() {
    $('.services-tab li a').click(function(e){
        e.preventDefault();
        $('.services-tab li,.tab-content>div').removeClass('active');
        $(this).parents('li').addClass('active'); 
            href = $(this).attr('href');
            $(href).addClass('active');

         
    });
$('.menu-mobile,.mobile-close').click(function(e) {
    $('.mobile-bar').toggleClass('active');
     $('.mob-shadow').addClass('active');
});

$('li.drop2').click(function(e) {
    //$('li.drop2').removeClass('active2');
    $(this).toggleClass('active2'); 
})
 
    $('.drop > a').click(function(e){
        e.preventDefault();
        $ 
        $('.drop ul,.drop  ').toggleClass('active');
         
    });
    $('.block-q-title a').click(function(e){
        e.preventDefault();
       href = $(this).attr('href');
         
        $(href).toggleClass('active');
         
    });

    $('.accord-t a').click(function(e){
        e.preventDefault();
       
         
       $('.accord-t').toggleClass('active');
         
    });
    $('.footer-item-h2').click(function(e){
        e.preventDefault();
       
         
       $(this).parents('.footer-item').toggleClass('active');
         
    });
    
    
    $('footer .all').click(function(e){
        e.preventDefault();
        $('.l-category li').removeClass('hidden');
       
        $('footer .all').remove();

         
    });
    
    
$('.banner-slider').slick({
    dots: true,
   slidesToShow: 1,
   slidesToScroll: 1,
   autoplay: false,
   infinite:false,
   arrows: false, 
   autoplaySpeed: 2000,
    
}); 

$('.banner-mobile').slick({
    dots: true,
   slidesToShow: 1,
   slidesToScroll: 1,
   autoplay: false,
   infinite:false,
   arrows: false, 
   autoplaySpeed: 2000,
    
}); 

$('.product-list-items').slick({
  
    slidesToShow: 4,
   slidesToScroll: 1,
   dots: false,
   autoplay: false,
   infinite:true,
   arrows: true,
          prevArrow:'<button class="prev"><svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M32.9908 15.9608L18.4003 28.2169L32.9908 39.3056" stroke="black"/><rect x="1.00552" y="0.71228" width="54.4035" height="54.4" rx="27.2" stroke="black"/></svg></button>',
 nextArrow:'<button class="next"><svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M23.5118 39.5846L38.1024 27.3286L23.5118 16.2398" stroke="black"/><rect x="0.605347" y="0.991211" width="54.4035" height="54.4" rx="27.2" stroke="black"/></svg></button>',
 
   autoplaySpeed: 2000,
   responsive: [ 
    {
        breakpoint: 1270,
         settings: {
               slidesToShow: 3,
      centerMode: false,
         adaptiveHeight: true,
                slidesToScroll: 1,
                arrows: false,
                infinite: false,
                dots: true,
       
            }
    },
    {
      breakpoint: 1000,
       settings: {
             slidesToShow: 2,
    centerMode: false,
       adaptiveHeight: true,
              slidesToScroll: 1,
     
              infinite: false,
              dots: true,
     
          }
  },
      {
           breakpoint: 768,
            settings: {
                  slidesToShow: 2,
         centerMode: false,
            adaptiveHeight: true,
                   slidesToScroll: 1,
                   arrows: false,
                   infinite: false,
                   dots: true,
          
               }
       }
      
     
   ]
}); 



$('.gallery-row').slick({
  
    slidesToShow: 3,
   slidesToScroll: 1,
   dots: false,
   autoplay: false,
   infinite:true,
   arrows: true,
          prevArrow:'<button class="prev"><svg width="24" height="58" viewBox="0 0 24 58" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22.1211 55.8342L3.39717 32.7045C1.69574 30.6027 1.69574 27.5973 3.39717 25.4955L22.1211 2.36597" stroke="#767676" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></button>',
 nextArrow:'<button class="next"><svg width="24" height="58" viewBox="0 0 24 58" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.15527 2.366L20.8792 25.4957C22.5806 27.5975 22.5806 30.6029 20.8792 32.7047L2.15527 55.8342" stroke="#767676" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></button>',
 
   autoplaySpeed: 2000,
   responsive: [ 
    {
      breakpoint: 1000,
       settings: {
             slidesToShow: 2,
    centerMode: false,
       adaptiveHeight: true,
              slidesToScroll: 1,
     
              infinite: false,
              dots: false,
     
          }
  },
      {
           breakpoint: 768,
            settings: {
                  slidesToShow: 2,
         centerMode: false,
            adaptiveHeight: true,
                   slidesToScroll: 1,
          
                   infinite: false,
                   dots: true,
          
               }
       },
       {
           breakpoint: 400,
            settings: {
                   slidesToShow: 2,
         centerMode: false,
          adaptiveHeight: true,
                   slidesToScroll: 1,
          arrows: true,
          
                   infinite: false,
                   dots: true
               }
       }
     
   ]
}); 


$( '.lit-img').slick({
    vertical: true,
    arrows: true,
    verticalSwiping: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow:'.arrow1',
    nextArrow:'.arrow2',
    asNavFor: '.big-img',
    focusOnSelect: true
  });

  $('.big-img').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.lit-img',
    
  });





  $('.img-gal').slick({
  
    slidesToShow: 1,
   slidesToScroll: 1,
   dots: true,
   autoplay: false,
   infinite:false,
   arrows: true,
          prevArrow:'<button class="prev"><svg width="24" height="58" viewBox="0 0 24 58" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22.1211 55.8342L3.39717 32.7045C1.69574 30.6027 1.69574 27.5973 3.39717 25.4955L22.1211 2.36597" stroke="#767676" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></button>',
 nextArrow:'<button class="next"><svg width="24" height="58" viewBox="0 0 24 58" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.15527 2.366L20.8792 25.4957C22.5806 27.5975 22.5806 30.6029 20.8792 32.7047L2.15527 55.8342" stroke="#767676" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg></button>',
 
   autoplaySpeed: 2000,
    
}); 

});