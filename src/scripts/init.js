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

MicroModal.init(modalParams);
const modalTrigger = document.querySelectorAll('[data-micromodal-trigger]');
_.forEach(modalTrigger, modal => {
  modal.addEventListener('click', () => {
    currentModal = modal.dataset.micromodalTrigger;
  })
});

const tooltip = tippy('[data-tippy-content]', {
  allowHTML: true,
  maxWidth: 320,
  placement: 'right',
  theme: 'flat',
});

if (isTablet) _.forEach(tooltip, (item) => item.props.placement = 'bottom');


const forms = document.querySelectorAll('form');
_.forEach(forms, (form) => new Form(form));
