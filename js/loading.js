$(document).ready(function () {
  const $slideShow = $('.slideShowIndex');
  const $slide = $slideShow.children();
  const slideLen = $slide.length;
  $slideShow.slick({
    autoplay: true,
    autoplayspeed: 300,
    fade: true,
    cssEase: 'linear'
  })
    .on('afterChange', function () {
      const $self = $(this);
      if ((slideLen - 1) <= $self.slick('slickCurrentSlide')) {
        $self.slick('slickSetOption', 'autoplay', false);
      }
    });
});

