const isMobile = window.matchMedia('(max-width: 576px)').matches;
const isTablet = window.matchMedia('(max-width: 992px)').matches;

const StyleСlass = {
  'header': {
    'inverted': 'header-inverted',
    'dropdown': {
      'open': 'dropdown--open',
    },
  },

  'side': {
    'open': 'side-menu--open',
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
}

let currentModal = null;

const scrollParams = {
  speed: 500,
  speedAsDuration: true,
  updateURL: false,
  offset: -60,
  header: '#header',
}

if (isTablet) scrollParams.offset = 20;