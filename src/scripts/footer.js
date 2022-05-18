/*
--------------------------------------------------------
        СКРИПТЫ ФУТЕРА
--------------------------------------------------------
*/

// Подняться наверх из футера
const footer = document.getElementById('footer');
if (footer) {
  const upButton = footer.querySelector('.footer__up');
  const params = {
    top: 0,
    behavior: "smooth",
  };

  upButton.addEventListener('click', () => window.scrollTo(params));
}