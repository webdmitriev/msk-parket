document.addEventListener('DOMContentLoaded', function () {

  // *******
  // SLIDERS
  // *******
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

  // *******************
  // rating for block-09
  // *******************
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

  // *********
  // accordion
  // *********
  $(document).ready(function () {
    $(".accordion__item-header").on("click", function () {
      const item = $(this).closest(".accordion__item");
      const content = item.find(".accordion__item-content");

      if (item.hasClass("active")) {
        // если уже открыт → закрываем
        content.stop().slideUp(300);
        item.removeClass("active");
      } else {
        // закрываем все остальные
        $(".accordion__item-content").stop().slideUp(300);
        $(".accordion__item").removeClass("active");

        // открываем текущий
        content.stop().slideDown(300);
        item.addClass("active");
      }
    });
  });

  // ******************************
  // rearrangeElements
  // main-block - перестановка html
  // ******************************
  function mainBlock() {
    const $blockMain = $(".block-main");

    if ($(window).width() < 991) {
      // (мобильная версия)
      $blockMain.each(function () {
        const $item = $(this);
        const $form = $item.find(".block__container");
        const $blockRight = $item.find(".block__right");
        console.log($form);

        $form.appendTo($blockRight);
      });
    } else {
      // (десктопная версия)
      $blockMain.each(function () {
        const $item = $(this);
        const $form = $item.find(".block__container");
        const $blockLeft = $item.find(".block__left");
        console.log($form);

        $form.appendTo($blockLeft);
      });
    }
  }

  // Запускаем при загрузке и ресайзе
  $(document).ready(mainBlock);
  $(window).on("resize", mainBlock);



});