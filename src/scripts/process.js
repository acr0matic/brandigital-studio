const process = document.getElementById('process');

if (process) {
  if (window.matchMedia('(max-width: 768px)').matches) {
    new Swiper(process.querySelector('.recomendation__slider'), {
      slidesPerView: 'auto',
      spaceBetween: 15,

      a11y: {
        enabled: false,
      },
    });
  }

  if (window.matchMedia('(max-width: 768px)').matches) {
    new Swiper(process.querySelector('.certificate__slider'), {
      slidesPerView: 'auto',
      spaceBetween: 15,

      a11y: {
        enabled: false,
      },
    });
  }
}