const lazyLoadInstance = new LazyLoad({
  elements_selector: '.lazy__item',

  callback_loaded: (trigger) => {
    const container = trigger.closest('.lazy');
    const loader = container.querySelector('.preloader');

    if (loader) loader.classList.add('preloader--hide');
  },
});

const accordion = document.querySelectorAll('.handorgel');
_.forEach(accordion, instance => new handorgel(instance, { ariaEnabled: false, }));

const scrollController = new SmoothScroll('a[href*="#"]', scrollParams);
