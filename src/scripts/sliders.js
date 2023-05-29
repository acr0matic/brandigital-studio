const planSlider = new Swiper('.slider-plan', {
  autoHeight: false,
  slidesPerView: 1,
  spaceBetween: 30,

  breakpoints: {
    400: {
      slidesPerView: 1.2,
    },

    768: {
      slidesPerView: 2,
    },

    1200: {
      slidesPerView: 3,
    },
  }
});
