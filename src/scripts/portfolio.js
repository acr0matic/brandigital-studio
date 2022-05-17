const portfolio = document.getElementById('portfolio');

if (portfolio) {
  let tabName = [];
  const sliderContainers = portfolio.querySelectorAll('[data-title]');

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
        tabName = _.map(sliderContainers, 'dataset.title')

        instance.pagination.render();
        instance.pagination.update();
      },
    },
  });

  if (window.matchMedia('(min-width: 768px)').matches) {
    _.forEach(sliderContainers, (item) => {

      const inner = item.querySelector('.inner__slider');
      const thumbnail = item.querySelector('.thumbnail__slider');

      const thumbnailSlider = new Swiper(thumbnail, {
        allowTouchMove: false,
        nested: true,
        speed: 500,
        a11y: {
          enabled: false,
        },

        spaceBetween: 10,
        slidesPerView: 'auto',

        slideToClickedSlide: true,

        breakpoints: {
          991: {
            spaceBetween: 20,

          }
        }
      });

      const innerSlider = new Swiper(inner, {
        allowTouchMove: false,
        nested: true,
        speed: 500,
        a11y: {
          enabled: false,
        },

        simulateTouch: false,
        spaceBetween: 30,

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
