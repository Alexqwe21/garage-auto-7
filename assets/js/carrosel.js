
  $('.autoplay').slick({
    slidesToShow: 2,
  slidesToScroll: 1, // ← PASSA 1
  autoplay: true,
  autoplaySpeed: 3500,
  arrows: true,
  infinite: true,
  responsive: [
    {
      breakpoint: 1400,
      settings: { slidesToShow: 2 }
    },
    {
      breakpoint: 1024,
      settings: { slidesToShow: 1 }
    }
  ]
});


