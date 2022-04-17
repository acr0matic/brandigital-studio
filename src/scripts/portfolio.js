const portfolio = document.getElementById('portfolio');

if (portfolio) {
  let tabName = [];
  const sliderItems = portfolio.querySelectorAll('[data-title]');

  const tab = new Swiper(portfolio.querySelector('.tab__slider'), {
    simulateTouch: false,
    allowTouchMove: false,

    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },

    a11y: {
      enabled: false,
    },

    pagination: {
      el: '#portfolio .swiper-pagination',
      clickable: true,

      renderBullet(index, className) {
        return `<span class="${className}">${tabName[index]}</span>`;
      },
    },

    on: {
      afterInit(instance) {
        tabName = _.map(sliderItems, 'dataset.title')

        instance.pagination.render();
        instance.pagination.update();
      },
    },
  });

  if (window.matchMedia('(min-width: 768px)').matches) {
    _.forEach(sliderItems, (item) => {
      const inner = item.querySelector('.inner__slider');
      const thumbnail = item.querySelector('.thumbnail__slider');

      const thumbnailSlider = new Swiper(thumbnail, {
        allowTouchMove: false,

        spaceBetween: 10,
        slidesPerView: 'auto',

        nested: true,
        slideToClickedSlide: true,

        speed: 500,

        a11y: {
          enabled: false,
        },
      });

      const innerSlider = new Swiper(inner, {
        simulateTouch: false,
        allowTouchMove: false,

        spaceBetween: 30,

        nested: true,
        speed: 500,

        a11y: {
          enabled: false,
        },

        navigation: {
          nextEl: inner.querySelector('.portfolio__next'),
          prevEl: inner.querySelector('.portfolio__prev'),
        },

        thumbs: {
          swiper: thumbnailSlider,
          autoScrollOffset: 1,
        },
      });
    });
  }
}