const service = document.getElementById('service');
if (service) {
  const modal = document.getElementById('modal-service');
  const wrapper = service.querySelector('.service__items');
  const cards = wrapper.querySelectorAll('.service-card');

  if (cards.length === 5) wrapper.classList.add('service__items--five')
  else if (cards.length === 6) wrapper.classList.add('service__items--six')

  if (modal) {
    const cardsModal = wrapper.querySelectorAll('.service-card[data-micromodal-trigger=modal-service]');
    const form = modal.querySelector('form');
    const modalPicture = modal.querySelector('.modal__image');

    _.forEach(cardsModal, (card) => {
      card.addEventListener('click', () => {
        const title = card.querySelector('.service-card__title').innerText;
        const image = card.dataset.modalImage;

        form.dataset.additional = title;

        if (image) {
          modalPicture.src = '';
          modalPicture.src = image;
        }
      });
    })
  }
}