const portfolio = document.querySelector('#portfolio-block, #single-portfolio');

if (portfolio) {
  const InnerHTML = (node, ref, value) => {
    if (value) node.querySelector(ref).innerHTML = value;
    return node.querySelector(ref).innerHTML;
  }

  const modal = document.getElementById('modal-portfolio');
  let modalSlider = null;

  if (portfolio.tagName !== 'BODY') {
    let portfolioTab = [];
    new Swiper('.slider-portfolio', {
      simulateTouch: false,
      allowTouchMove: false,
      autoHeight: true,

      effect: 'fade',
      fadeEffect: {
        crossFade: true
      },

      pagination: {
        el: '.slider-portfolio-control .swiper-pagination',
        clickable: true,

        renderBullet(index, className) {
          return `<span class="${className}">${portfolioTab[index]}</span>`;
        },
      },

      on: {
        beforeInit(instance) {
          const slides = instance.el.querySelectorAll(`[data-title]`);
          portfolioTab = _.map(slides, "dataset.title")
        },
      },
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

  else if (portfolio.tagName === 'BODY') {
    if (!isSmallTablet) {
      const images = document.querySelectorAll('.portfolio__picture .image');

      _.forEach(images, (image) => {
        const params = {
          orientation: image.dataset.direction,
          delay: 1.5,
          overflow: true
        };

        new simpleParallax(image, params);
      });
    }
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