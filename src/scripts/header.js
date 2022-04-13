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
}