const gallerySlider = (isTablet) ? new Swiper('.slider-portfolio-gallery', {
  speed: 500,
  a11y: {
    enabled: false,
  },

  spaceBetween: 16,

  pagination: {
    el: '.slider-portfolio-gallery .swiper-pagination',
    clickable: true,
  },
}) : undefined;


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



  const modalPortfolio = document.getElementById('modal-portfolio');

  if (modalPortfolio) {
    const title = modalPortfolio.querySelector('.modal-portfolio__content h3');
    const list = modalPortfolio.querySelector('.modal-portfolio__content .list');
    const text = modalPortfolio.querySelector('.modal-portfolio__content p');
    const gallery = modalPortfolio.querySelectorAll('.modal-portfolio__gallery .swiper-slide');

    if (portfolio.id === "portfolio-block" && isTablet) {
      const cards = document.querySelectorAll('.portfolio-item')

      _.forEach(cards, card => {
        const cardTitle = card.querySelector('.portfolio-item__title').textContent;
        const cardText = card.querySelector('.portfolio-item__description').textContent;
        const cardList = card.querySelector('.portfolio-item__list').innerHTML;
        const cardPicture = card.querySelectorAll('.portfolio-item__picture .image');

        card.addEventListener('click', () => {
          title.innerHTML = cardTitle;
          list.innerHTML = cardList;
          text.innerHTML = cardText;

          _.forEach(gallery, (item, index) => {
            const image = item.querySelector('.image');
            const link = item.querySelector('a');

            if (cardPicture[index]) {
              const href = cardPicture[index].src;

              image.dataset.src = href;
              link.href = href;

              item.style.removeProperty('display')
              LazyLoad.resetStatus(image)
              lazyLoadInstance.update();
              refreshFsLightbox();
            }

            else {
              item.style.display = 'none'
            }
          });

          MicroModal.show('modal-portfolio', modalParams)
        });
      });
    }

    else if (portfolio.id === "single-portfolio") {
      const cards = document.querySelectorAll('.card-portfolio')

      _.forEach(cards, card => {
        const cardTitle = card.querySelector('h3').textContent;
        const cardList = card.querySelector('.content ul').innerHTML;
        const cardText = card.querySelector('.content p').innerHTML;
        const cardGallery = card.querySelectorAll('.content .gallery a');

        card.addEventListener('click', () => {
          title.innerHTML = cardTitle;
          list.innerHTML = cardList;
          text.innerHTML = cardText;

          _.forEach(gallery, (item, index) => {
            const image = item.querySelector('.image');
            const link = item.querySelector('a');

            if (cardGallery[index]) {
              const href = cardGallery[index].href;

              image.dataset.src = href;
              link.href = href;

              item.style.removeProperty('display')
              LazyLoad.resetStatus(image)
              lazyLoadInstance.update();
              refreshFsLightbox();
            }

            else {
              item.style.display = 'none'
            }
          });
        });
      });
    }
  }
}