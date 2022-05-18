const header = document.querySelector('#header');

if (header) {

  /*
  --------------------------------------------------------
            ПЕРЕМЕННЫЕ И ФУНКЦИИ
  --------------------------------------------------------
  */

  let heroHeight, headerHeight, isReach;
  const getHeight = (block) => block ? block.clientHeight : null;

  function Menu(menu, state) {
    if (state === 'open') {
      document.body.classList.add(StyleСlass.body.overflow);

      if (menu === 'side') sideMenu.classList.add(StyleСlass.side.open);
      else if (menu === 'mobile') mobileMenu.classList.add(StyleСlass.mobile.open);
    }

    else if (state === 'close') {
      document.body.classList.remove(StyleСlass.body.overflow);
      if (menu === 'side') sideMenu.classList.remove(StyleСlass.side.open);
    }

    else if (state === 'toggle') {
      header.classList.toggle(StyleСlass.header.inverted);
      CheckHeader();

      document.body.classList.toggle(StyleСlass.body.overflow);
      if (menu === 'mobile') {
        headerMobile.classList.toggle('is-active');
        mobileMenu.classList.toggle(StyleСlass.mobile.open);
      }
    }
  }

  function CheckHeader() {
    let offset = heroHeight || headerHeight + 50;
    isReach = window.scrollY >= offset;

    if (isReach) header.classList.add(StyleСlass.header.inverted);
    else header.classList.remove(StyleСlass.header.inverted)
  }

  /*
  --------------------------------------------------------
              СКРИПТ ВЫПАДАЮЩИХ СПИСКОВ
  --------------------------------------------------------
  */

  const headerDropdown = header.querySelectorAll('.nav__list .dropdown__header');

  let scrollPosition = window.pageYOffset;
  _.forEach(headerDropdown, (dropdown) => {

    // Открытие дропдаунов и закрытие при клике не по ним
    dropdown.addEventListener('click', () => dropdown.parentNode.classList.toggle(StyleСlass.header.dropdown.open));
    window.addEventListener('click',
      (e) => {
        if (!dropdown.parentNode.contains(e.target)) dropdown.parentNode.classList.remove(StyleСlass.header.dropdown.open);
      });

    // Скрытие их при скролле
    window.addEventListener('scroll',
      () => {
        scrollPosition = window.pageYOffset;
        if (scrollPosition >= 150) dropdown.parentNode.classList.remove(StyleСlass.header.dropdown.open);
      });
  })



  /*
  --------------------------------------------------------
                СКРИПТ ИНВЕРТИРОВАНИЯ ХЕДЕРА
  --------------------------------------------------------
  */

  const heroBlock = document.querySelector('[data-hero]')

  heroHeight = getHeight(heroBlock);
  headerHeight = getHeight(header);

  // Смена цветовой гаммы хедера
  window.addEventListener('scroll', () => CheckHeader());

  // Обновление значений высот при изменении окна
  window.addEventListener('resize', () => {
    heroHeight = getHeight(heroBlock);
    headerHeight = getHeight(header);
  });



  /*
  --------------------------------------------------------
                СКРИПТ СКРЫТИЯ ХЕДЕРА
  --------------------------------------------------------
  */

  if (!isTablet) {
    let lastScroll = 0;

    window.addEventListener('scroll', () => {
      const position = window.pageYOffset;
      if ((position > lastScroll) && isReach) header.classList.add('header-hide');
      else header.classList.remove('header-hide');

      lastScroll = position;
    });
  }



  /*
  --------------------------------------------------------
                СКРИПТ БОКОВОГО МЕНЮ
  --------------------------------------------------------
  */

  const headerBurger = header.querySelector('.header__burger');

  const sideMenu = document.getElementById('side-menu');
  const sideMenuOverlay = sideMenu.querySelector('.side-menu__overlay');
  const sideMenuClose = sideMenu.querySelector('.side-menu__close');

  let timer = null;

  sideMenuOverlay.addEventListener('click', () => Menu('side', 'close'));
  sideMenuClose.addEventListener('click', () => Menu('side', 'close'));
  headerBurger.addEventListener('click', () => Menu('side', 'open'));

  headerBurger.addEventListener('mouseenter', () => {
    window.clearTimeout(timer);
    headerBurger.classList.add(StyleСlass.side.burger);
  });

  headerBurger.addEventListener('mouseleave', () => timer = window.setTimeout(() => {
    headerBurger.classList.remove(StyleСlass.side.burger);
  }, 500));

  sideMenuClose.addEventListener('mouseenter', () => {
    sideMenuClose.classList.add(StyleСlass.side.burger);
  });

  sideMenuClose.addEventListener('mouseleave', () => {
    sideMenuClose.classList.remove(StyleСlass.side.burger);
  });

}



/*
--------------------------------------------------------
              СКРИПТ МОБИЛЬНОГО МЕНЮ
--------------------------------------------------------
*/

const headerMobile = header.querySelector('.header__mobile .hamburger');
const mobileMenu = document.getElementById('mobile-menu');
if (mobileMenu) {
  const mobileMenuOverlay = mobileMenu.querySelector('.mobile-menu__box');
  const button = mobileMenu.querySelector('.mobile-menu__button');

  mobileMenuOverlay.addEventListener('click', () => Menu('mobile', 'toggle'));
  button.addEventListener('click', () => Menu('mobile', 'toggle'));
  headerMobile.parentNode.addEventListener('click', () => Menu('mobile', 'toggle'));
}

