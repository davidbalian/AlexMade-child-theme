<?php wp_footer(); ?>

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        loop: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },

autoplay: {
            delay: 3000, // Time in milliseconds between slides (e.g., 3000ms = 3 seconds)
            disableOnInteraction: false, // Set to false to continue autoplay after user interaction
            pauseOnMouseEnter: true, // Pause autoplay when the mouse enters the slider
        },
        
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
</script>

<script>
      var swiper = new Swiper(".mySwiper2", {
        spaceBetween: 10,
        slidesPerView: 2,
        freeMode: true,
        watchSlidesProgress: true,
      });
      var swiper2 = new Swiper(".mySwiper3", {
        direction: "vertical",
        loop: true,
        spaceBetween: 10,
        thumbs: {
          swiper: swiper,
        },
      });
  </script>

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

<script>
      var swiper = new Swiper(".mySwiper5", {
        spaceBetween: 30,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
</script>

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

</body>
</html>