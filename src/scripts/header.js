const header = document.querySelector('#header');

if (header) {

  /*
  --------------------------------------------------------
            ПЕРЕМЕННЫЕ И ФУНКЦИИ
  --------------------------------------------------------
  */

  let heroHeight, headerHeight;
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
      headerBurger.classList.toggle('is-active');

      document.body.classList.toggle(StyleСlass.body.overflow);
      if (menu === 'mobile') mobileMenu.classList.toggle(StyleСlass.mobile.open);
    }
  }

  function CheckHeader() {
    if (heroHeight) {
      if (window.scrollY >= heroHeight) header.classList.add(StyleСlass.header.inverted);
      else header.classList.remove(StyleСlass.header.inverted)
    }

    else {
      if (window.scrollY >= headerHeight + 50) header.classList.add(StyleСlass.header.inverted);
      else header.classList.remove(StyleСlass.header.inverted)
    }
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
      if (position > lastScroll) header.classList.add('header-hide');
      else header.classList.remove('header-hide');

      lastScroll = position;
    });
  }



  /*
  --------------------------------------------------------
                СКРИПТ БОКОВОГО МЕНЮ
  --------------------------------------------------------
  */

  const headerBurger = header.querySelector('.header__burger .hamburger');

  const sideMenu = document.getElementById('side-menu');
  const sideMenuOverlay = sideMenu.querySelector('.side-menu__overlay');
  const sideMenuClose = sideMenu.querySelector('.side-menu__close');

  sideMenuOverlay.addEventListener('click', () => Menu('side', 'close'));
  sideMenuClose.addEventListener('click', () => Menu('side', 'close'));

  headerBurger.addEventListener('click', () => {
    if (!isMobile) Menu('side', 'open');
    else Menu('mobile', 'toggle');
  });
}



/*
--------------------------------------------------------
              СКРИПТ МОБИЛЬНОГО МЕНЮ
--------------------------------------------------------
*/

const mobileMenu = document.getElementById('mobile-menu');
if (mobileMenu) {
  const mobileMenuOverlay = mobileMenu.querySelector('.mobile-menu__overlay');
  const button = mobileMenu.querySelector('.mobile-menu__button');

  mobileMenuOverlay.addEventListener('click', () => Menu('mobile', 'toggle'));
  button.addEventListener('click', () => Menu('mobile', 'toggle'));
}

