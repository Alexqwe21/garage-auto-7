$(document).ready(function(){
  // Slider principal com autoplay
  $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    autoplay: true,
    autoplaySpeed: 3000,
    infinite: true
  });

  // Verifica quantas miniaturas existem
  var miniCount = $('.slider-nav div').length;

  if(miniCount > 3){
    // Mais de 3 miniaturas → slider-nav vira carrossel
    $('.slider-nav').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      infinite: true,
      focusOnSelect: true
    });

    // Sincroniza com slider principal
    $('.slider-nav').on('click', '.slick-slide', function(){
      var index = $(this).data("slick-index");
      $('.slider-for').slick('slickGoTo', index);
    });

  } else {
    // 3 ou menos miniaturas → ficam fixas
    $('.slider-nav div').click(function(){
      var index = $(this).index();
      $('.slider-for').slick('slickGoTo', index);
    });
  }
});
