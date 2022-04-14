const header = document.querySelector('#header');

if (header) {

  /*
  --------------------------------------------------------
            ПЕРЕМЕННЫЕ И ФУНКЦИИ
  --------------------------------------------------------
  */

  let heroHeight, headerHeight;
  const getHeight = (block) => block ? block.clientHeight : null;



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
  window.addEventListener('scroll',
    () => {
      if (heroHeight) {
        if (window.scrollY >= heroHeight) header.classList.add(StyleСlass.header.inverted);
        else header.classList.remove(StyleСlass.header.inverted)
      }

      else {
        if (window.scrollY >= headerHeight + 50) header.classList.add(StyleСlass.header.inverted);
        else header.classList.remove(StyleСlass.header.inverted)
      }
    });

  // Обновление значений высот при изменении окна
  window.addEventListener('resize', () => {
    heroHeight = getHeight(heroBlock);
    headerHeight = getHeight(header);
  });



  /*
  --------------------------------------------------------
                СКРИПТ БОКОВОГО МЕНЮ
  --------------------------------------------------------
  */

  const headerBurger = header.querySelector('.header__burger');

  const sideMenu = document.getElementById('side-menu');
  const sideMenuOverlay = sideMenu.querySelector('.side-menu__overlay');
  const sideMenuClose = sideMenu.querySelector('.side-menu__close');

  sideMenuOverlay.addEventListener('click', () => Menu('side', 'close'));
  sideMenuClose.addEventListener('click', () => Menu('side', 'close'));

  headerBurger.addEventListener('click', () => {
    if (window.matchMedia('(min-width: 991px)').matches) Menu('side', 'open');
    else Menu('mobile', 'toggle');
  });

  function Menu(menu, state) {
    if (state === 'open') {
      document.body.classList.add('body-scroll--disabled');

      if (menu === 'side') sideMenu.classList.add('side-menu--open');
      else if (menu === 'mobile') mobileMenu.classList.add('side-menu--open');
    }

    else if (state === 'close') {
      document.body.classList.remove('body-scroll--disabled');
      if (menu === 'side') sideMenu.classList.remove('side-menu--open');
    }

    else if (state === 'toggle') {
      header.classList.toggle('header-mobile');
      document.body.classList.toggle('body-scroll--disabled');
      if (menu === 'mobile') mobileMenu.classList.toggle('mobile-menu--open');
    }
  }

}