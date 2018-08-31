export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

    $(document).ready(function(){

      // new arrival slider
      $('.products-slider').lightSlider({
        auto: true,
        item: 3,
        autoplaySpeed: 2000,
        loop: true,
        controls: true,
        pager: false,
        responsive: [{
          breakpoint: 800,
          settings: {
            item: 2,
            slideMove: 1,
            slideMargin: 6,
          },
        },
        {
          breakpoint: 480,
          settings: {
            item: 1,
            slideMove: 1,
            controls: true,
          },
        },
      ],
      });

      // homepage video
      $('.latest-news .poster .play-icon').click(function(e){
        console.log('alert');
        $('.latest-news .poster').removeClass('d-flex').addClass('d-none');
        $(".latest-news iframe")[0].src += "&autoplay=1&mute=0";

        e.preventDefault();
      });

      // gallery popup
      $('ul .gallery').magnificPopup({
        type:'image',
        gallery: {
          enabled: true,
        },
      });
    });
  },
};
