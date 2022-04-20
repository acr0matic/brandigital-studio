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

const scrollParams = {
  speed: 500,
  speedAsDuration: true,
  updateURL: false,
  offset: 150,
}

if (isTablet) scrollParams.offset = 100;