'use strict';

const isMobile = window.matchMedia('(max-width: 576px)').matches;
const isSmallTablet = window.matchMedia('(max-width: 768px)').matches;
const isTablet = window.matchMedia('(max-width: 992px)').matches;
const isSafari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);

const StyleСlass = {
  'header': {
    'inverted': 'header-inverted',
    'hidden': 'header-hide',
    'dropdown': {
      'open': 'dropdown--open',
    },
  },

  'side': {
    'open': 'side-menu--open',
    'burger': 'hamburger-custom--hover',
  },

  'mobile': {
    'open': 'mobile-menu--open',
  },

  'body': {
    'overflow': 'scroll-disabled',
  },
}

const modalParams = {
  awaitCloseAnimation: true,
  disableFocus: true,
  onClose: modal => {
    const overflowContainer = modal.querySelectorAll('.custom-scrollbar');
    overflowContainer.forEach(container => container.scrollTop = 0);

    if (modal.id = 'modal-portfolio') {
      if (gallerySlider) gallerySlider.slideTo(0, 0);
    }
  }
}
let currentModal = null;

const scrollParams = {
  speed: 500,
  speedAsDuration: true,
  offset: -60,
  header: '#header',
}

if (isTablet) scrollParams.offset = 20;