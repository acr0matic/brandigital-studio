const promotion = document.querySelector('.promotion');
const promotionModal = document.getElementById('modal-promotion');

if (promotion && promotionModal) {
  const cards = promotion.querySelectorAll('.promotion-item');

  // Поля модального окна акции
  const inner = promotionModal.querySelector('.modal__inner');
  const header = promotionModal.querySelector('.modal__content .modal__title');
  const content = promotionModal.querySelector('.modal__text');
  const button = promotionModal.querySelector('.modal__button');
  const form = promotionModal.querySelector('.modal__form');

  button.addEventListener('click', () => {
    button.parentNode.classList.add('modal__action--hidden');
    form.classList.add('modal__form--visible');
 });

  _.forEach(cards, (card) => {
    card.addEventListener('click', () => {
      const cloned = card.cloneNode(true);

      // Поля контента из карточки акции
      const title = card.querySelector('.promotion-item__title').innerHTML;
      const subtitle = card.querySelector('.promotion-item__subtitle').innerHTML;
      const text = card.querySelector('.promotion-item__text').innerHTML;

      // Клонруем и вставляем карточку акции в модалку
      cloned.removeAttribute('data-micromodal-trigger');
      cloned.classList.add('promotion-item--big');
      inner.innerHTML = "";
      inner.append(cloned);

      // Замена текста в модальном окне
      header.innerHTML = `${title} ${subtitle}`;
      content.innerHTML = text;

      button.parentNode.classList.remove('modal__action--hidden');
      form.classList.remove('modal__form--visible');
    });
  })
}