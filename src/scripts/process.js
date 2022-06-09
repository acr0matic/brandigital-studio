const process = document.getElementById('process');

if (process) {
  if (isSmallTablet) {
    new Swiper(process.querySelector('.recomendation__slider'), {
      slidesPerView: 'auto',
      spaceBetween: 15,

      a11y: {
        enabled: false,
      },
    });

    new Swiper(process.querySelector('.certificate__slider'), {
      slidesPerView: 'auto',
      spaceBetween: 15,

      a11y: {
        enabled: false,
      },
    });

    new Swiper(process.querySelector('.feedback__slider'), {
      slidesPerView: 'auto',
      spaceBetween: 15,

      a11y: {
        enabled: false,
      },
    });
  }

  const container = process.querySelector('.process');

  if (container.classList.contains('design')) {
    const button = container.querySelector('.process-textblock__button');
    const wrapper = button.closest('.process-textblock');

    if (button.hasAttribute('data-change-image')) {
      const defaultText = button.innerHTML;
      const picture = wrapper.querySelector('.process-textblock__picture')
      const main = picture.querySelector('.process-textblock__image');
      const second = picture.querySelector('.process-textblock__image--top');

      // Вставляем кнопку после изображения
      if (isSmallTablet) {
        const parent = picture.parentNode;
        parent.insertBefore(button.parentNode, picture.nextSibling)
      }

      button.addEventListener('click', () => {
        button.classList.toggle('button-primary--gray');
        main.classList.toggle('process-textblock__image--hidden');
        second.classList.toggle('process-textblock__image--hidden');

        button.innerHTML = button.classList.contains('button-primary--gray') ? 'Назад' : defaultText;
      });
    }
  }
}