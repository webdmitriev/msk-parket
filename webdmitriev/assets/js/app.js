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

  $('.block-09 .varnishes__slider').each(function () {
    const slider = $(this);
    slider.slick({
      autoplay: true,
      autoplaySpeed: 700000,
      dots: true,
      infinite: true,
      variableWidth: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: $('.block-09 .varnishes__arrows .varnishes__arrow-prev'),
      nextArrow: $('.block-09 .varnishes__arrows .varnishes__arrow-next'),
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

  document.querySelectorAll('.rating-stars').forEach((el, index) => {
    const rating = parseFloat(el.dataset.rating) || 0;
    const full = Math.floor(rating);
    const half = rating % 1 >= 0.5 ? 1 : 0;
    const empty = 5 - full - half;

    const starPath = 'M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z';

    let html = '';

    // Полные звезды
    for (let i = 0; i < full; i++) {
      html += `<svg class="full" viewBox="0 0 24 24"><path d="${starPath}"/></svg>`;
    }

    // Половинка
    if (half) {
      const gradId = `half-grad-${index}`;
      html += `
      <svg class="half" viewBox="0 0 24 24">
        <defs>
          <linearGradient id="${gradId}">
            <stop offset="50%" stop-color="gold"/>
            <stop offset="50%" stop-color="#ccc"/>
          </linearGradient>
        </defs>
        <path d="${starPath}" fill="url(#${gradId})"/>
      </svg>
    `;
    }

    // Пустые
    for (let i = 0; i < empty; i++) {
      html += `<svg class="empty" viewBox="0 0 24 24"><path d="${starPath}"/></svg>`;
    }

    el.innerHTML = html;
  });




});