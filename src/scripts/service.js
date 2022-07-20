const service = document.getElementById('service');
if (service) {
  const modal = document.getElementById('modal-service');
  const wrapper = service.querySelector('.service__items');
  const cards = wrapper.querySelectorAll('.service-card');

  if (cards.length === 5) wrapper.classList.add('service__items--five')
  else if (cards.length === 6) wrapper.classList.add('service__items--six')

  if (modal) {

    // ТРЕКИНГ КУРСОРА И АНИМАЦИЯ КРУГА НА ФОНЕ
    const circle = modal.querySelector('.modal__circle');
    const container = modal.querySelector('.modal__container');

    let circleWidth = circle.clientWidth;
    let circleHeight = circle.clientHeight;

    container.onmousemove = (event) => {
      const x = event.clientX - container.offsetLeft;
      const y = event.clientY - container.offsetTop;

      const value = (x + y) * 0.9 + 'px';

      circle.style.width = value;
      circle.style.height = value;
      circle.style.transition = 'all 0.2s ease';
    }

    document.onmouseout = (event) => {
      circle.style.width = circleWidth + "px";
      circle.style.height = circleHeight + "px";
      circle.style.transition = 'all 1s ease';
    }

    // ------------------- //

    const cardsModal = wrapper.querySelectorAll('.service-card[data-micromodal-trigger=modal-service]');
    const form = modal.querySelector('form');

    // TODO ОТРЕФАКТОРИТЬ ПОЛУЧЕНИЕ ДАННЫХ В МОДАЛКУ
    const modalTitle = modal.querySelector('.modal__title');
    const modalText = modal.querySelector('.modal__text');
    const modalTime = modal.querySelector('.modal__list .time');
    const modalPrice = modal.querySelector('.modal__list .price');
    const modalTeam = modal.querySelector('.modal__list .team');
    const modalPicture = modal.querySelector('.modal__image');

    _.forEach(cardsModal, (card) => {
      card.addEventListener('click', () => {
        const title = card.querySelector('.service-card__title').innerText;
        const text = card.querySelector('.service-card__content .text').innerHTML;
        const time = card.querySelector('.service-card__content .time').innerHTML;
        const price = card.querySelector('.service-card__content .price').innerHTML;
        const team = card.querySelector('.service-card__content .team').innerHTML;
        const image = card.querySelector('.service-card__content .image').src;

        form.dataset.additional = title;

        modalTitle.innerHTML = title;
        modalText.innerHTML = text;
        modalTime.innerHTML = time;
        modalPrice.innerHTML = price;
        modalTeam.innerHTML = team;

        if (image) {
          modalPicture.src = '';
          modalPicture.src = image;
        }
      });
    })
  }
}