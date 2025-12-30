
$(function () {

  const $carousel = $('.lado_a_lado_carros_venda_men');

  if (!$carousel.length || $carousel.hasClass('slick-initialized')) return;

  $carousel.slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    infinite: false,
    adaptiveHeight: false,
    responsive: [
      {
        breakpoint: 1200,
        settings: { slidesToShow: 3 }
      },
      {
        breakpoint: 900,
        settings: { slidesToShow: 2 }
      },
      {
        breakpoint: 600,
        settings: { slidesToShow: 1 }
      }
    ]
  });

});

