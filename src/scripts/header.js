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
                СКРИПТ МЕНЮ
  --------------------------------------------------------
  */

  const headerBurger = header.querySelector('.header__burger');

  const sideMenu = document.getElementById('side-menu');
  const sideMenuOverlay = sideMenu.querySelector('.side-menu__overlay');
  const sideMenuClose = sideMenu.querySelector('.side-menu__close');

  sideMenuOverlay.addEventListener('click', () => Menu('side', 'close'));
  sideMenuClose.addEventListener('click', () => Menu('side', 'close'));

  headerBurger.addEventListener('click', () => {
    if (!isMobile) Menu('side', 'open');
    else Menu('mobile', 'toggle');
  });

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
      document.body.classList.toggle(StyleСlass.body.overflow);
      if (menu === 'mobile') mobileMenu.classList.toggle(StyleСlass.mobile.open);
    }
  }

  if (isTablet) {
    const nav = header.querySelectorAll('.nav__item');
    const sideNav = sideMenu.querySelectorAll('.nav__item');

    _.forEachRight(nav, item => {
      const title = item.querySelector('.nav__link').innerHTML;
      const list = item.querySelectorAll('.dropdown__item');

      let listTemplate = '';
      _.forEach(list, link => {
        link.removeAttribute('class');
        link.classList.add('nav__link');
        link.classList.add('nav__link--sub');

        listTemplate += link.outerHTML;
      });

      if (listTemplate) {
        const template =
          `
        <div class="handorgel accordion accordion--nav accordion--sidemenu">
          <div class="handorgel__header">
            <button class="handorgel__header__button nav__link">
              <span>${title}</span>
              <img class="handorgel__icon" src="img/icons/component/accordion/arrow__down.svg" alt="">
            </button>
          </div>
          <div class="handorgel__content">
            <div class="handorgel__content__inner">
              ${listTemplate}
            </div>
            <!-- /.handorgel__content__inner -->
          </div>
          <!-- /.handorgel__content -->
        </div>
        <!-- /.handorgel -->
          `;

        sideNav[0].insertAdjacentHTML('afterend', template);
      }

      else sideNav[0].parentNode.insertBefore(item, sideNav[0].nextSibling)

    });

    const accordion = sideMenu.querySelectorAll('.handorgel')
    _.forEach(accordion, instance => new handorgel(instance, {
      ariaEnabled: false,
    }));
  }
}