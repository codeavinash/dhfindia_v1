let displaySlide = 3;
let poweredby = 5;
if(screen.width < 600){
 displaySlide = 1;
 poweredby = 2;
}


var swiper = new Swiper('.swiper-container', {
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },

    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="sliderThumbnail ' + className + '"></span>';
      }
    },

    onSlideChangeStart: function(s){
      console.log('just swaped');
    }
  });


const thumbnailImages = $('.ThumbnailList').children();
const bulletPoints = $('.sliderThumbnail');
for(let i = 0;i<thumbnailImages.length;i++){
    $(bulletPoints[i]).css("background-image", "url('"+ $(thumbnailImages[i]).text() +"')");
}

var swiper = new Swiper('.post-Swipre-container', {
    slidesPerView: displaySlide,
    spaceBetween: 30,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
    pagination: {
      el: '.post-pagination',
      clickable: true,
    },
  });


  var imagegalary = new Swiper('.image-galary-swip-container', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: '.image-swap-pagination',
    },
  });


  var poweredBY = new Swiper('.poweredby-slider-container', {
    slidesPerView: poweredby,
    spaceBetween: 30,
    freeMode: true,
    autoplay: {
      delay: 1000,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.powered-by-pagination',
      clickable: true,
    },
  });