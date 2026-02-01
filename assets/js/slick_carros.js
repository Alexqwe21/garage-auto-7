

  $(document).ready(function () {
    $('.lado_a_lado_carros_venda_men').slick({
      slidesToShow: 4,       // Desktop
      slidesToScroll: 1,
      arrows: true,
      dots: false,

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



