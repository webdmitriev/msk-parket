document.addEventListener('DOMContentLoaded', function () {

  //console.log("Start");
  $('.block-08 .grinding__slider').each(function () {
    const slider = $(this);
    slider.slick({
      autoplay: true,
      autoplaySpeed: 700000,
      dots: true,
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      prevArrow: $('.block-08 .grinding-arrows .grinding-arrow-prev'),
      nextArrow: $('.block-08 .grinding-arrows .grinding-arrow-next'),
      rows: 0,
      responsive: [
        {
          breakpoint: 1440,
          settings: {
            variableWidth: true,
          }
        }
      ]
    });
  })

});