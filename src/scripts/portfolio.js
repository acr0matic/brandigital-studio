const portfolio = document.querySelector('#portfolio, #single-portfolio');

if (portfolio) {
  const InnerHTML = (node, ref, value) => {
    if (value) node.querySelector(ref).innerHTML = value;
    return node.querySelector(ref).innerHTML;
  }

  let tabName = [];
  const thumbnail = portfolio.querySelectorAll('.portfolio-thumbnail')
  const sliderContainers = portfolio.querySelectorAll('[data-title]');
  const modal = document.getElementById('modal-portfolio');
  let modalSlider = null;

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
          1200: {
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

  else {
    modalSlider = new Swiper(modal.querySelector('.modal__slider'), {
      a11y: {
        enabled: false,
      },

      spaceBetween: 10,
      slidesPerView: 1,

      pagination: {
        el: '.modal__slider .swiper-pagination',
        clickable: true,
      },

      breakpoints: {
        540: {
          slidesPerView: 2,
        }
      }
    });
  }



  /*
  --------------------------------------------------------
                ОБРАБОТЧИК МОДАЛЬНОГО ОКНА
  --------------------------------------------------------
  */

  if (portfolio.tagName === 'MAIN') {
    const items = portfolio.querySelectorAll('.portfolio-item');

    _.forEach(items, (item) => {
      item.addEventListener('click', () => {
        const gallery = item.querySelectorAll('.portfolio-item__gallery .modal__picture');
        const slides = modal.querySelectorAll('.swiper-slide');
        const title = InnerHTML(item, '.portfolio-item__title');
        const category = InnerHTML(item, '.portfolio-item__category');
        const desc = InnerHTML(item, '.portfolio-item__description');
        const list = InnerHTML(item, '.portfolio-item__list');

        _.forEach(slides, (slide, index) => {
          if (gallery[index]) {
            slide.innerHTML = gallery[index].outerHTML
            slide.querySelector('a').dataset.fslightbox = 'modal';
            slide.style.removeProperty('display');
          }

          else slide.style.display = 'none';
        });

        if (modalSlider) modalSlider.slideTo(0, 0);
        lazyLoadInstance.update();
        refreshFsLightbox();

        InnerHTML(modal, '.modal-info__title', title);
        InnerHTML(modal, '.modal-info__category', category);
        InnerHTML(modal, '.modal-info__description', desc);
        InnerHTML(modal, '.modal-info__list', list);
      });
    });
  }

  else {
    if (isSmallTablet) {
      // Привязываем модалку на мобильной версии
      _.forEach(thumbnail, (thumb) => thumb.dataset.micromodalTrigger = 'modal-portfolio');
      MicroModal.init(modalParams);

      _.forEach(thumbnail, (thumb) => {
        thumb.addEventListener('click', () => {
          const index = thumb.closest('[data-index]').dataset.index;
          const ref = sliderContainers[index].querySelector(`.portfolio-item[data-id="${thumb.dataset.id}"]`);

          if (ref) {
            const picture = InnerHTML(ref, '.portfolio-item__picture');
            const title = InnerHTML(ref, '.portfolio-item__title');
            const category = InnerHTML(ref, '.portfolio-item__category');
            const desc = InnerHTML(ref, '.portfolio-item__description');
            const list = InnerHTML(ref, '.portfolio-item__list');

            InnerHTML(modal, '.swiper-wrapper',
              `<div class="swiper-slide">
              <picture class="modal__picture lazy">
                ${picture}
              </picture>
            </div>`);

            lazyLoadInstance.update();
            refreshFsLightbox();

            InnerHTML(modal, '.modal-info__title', title);
            InnerHTML(modal, '.modal-info__category', category);
            InnerHTML(modal, '.modal-info__description', desc);
            InnerHTML(modal, '.modal-info__list', list);
          }
        });
      });
    }
  }
}
