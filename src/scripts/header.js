
const header = document.querySelector('#header');
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


// Смена цветовой гаммы хедера
window.addEventListener('scroll',
  () => {
    const heroBlock = document.querySelector('[data-hero]')
    const heroHeight = heroBlock ? heroBlock.offsetHeight : null;

    if (heroHeight) {
      if (window.scrollY >= heroHeight) header.classList.add(StyleСlass.header.inverted);
      else header.classList.remove(StyleСlass.header.inverted)
    }

    else {
      if (window.scrollY >= header.offsetHeight + 50) header.classList.add(StyleСlass.header.inverted);
      else header.classList.remove(StyleСlass.header.inverted)
    }
  });