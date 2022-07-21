const service = document.getElementById('service');
if (service) {
  const modal = document.getElementById('modal-service');
  const wrapper = service.querySelector('.service__items');
  const cards = wrapper.querySelectorAll('.service-card');

  if (cards.length === 5) wrapper.classList.add('service__items--five')
  else if (cards.length === 6) wrapper.classList.add('service__items--six')

  if (modal) {

    // ТРЕКИНГ КУРСОРА И АНИМАЦИЯ КРУГА НА ФОНЕ

    if (isTablet) {
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
    }

    // ------------------- //

    const cardsModal = wrapper.querySelectorAll('.service-card[data-micromodal-trigger=modal-service]');
    const form = modal.querySelector('form');

    // TODO ОТРЕФАКТОРИТЬ ПОЛУЧЕНИЕ ДАННЫХ В МОДАЛКУ
    const modalTitle = modal.querySelector('.modal__title');
    const modalText = modal.querySelector('.modal__text');
    const modalParams = modal.querySelectorAll('.modal__list [data-value]');
    const modalPicture = modal.querySelector('.modal__picture');

    _.forEach(cardsModal, (card) => {
      card.addEventListener('click', () => {
        const title = card.querySelector('.service-card__title').innerText;
        const text = card.querySelector('.service-card__content .text').innerHTML;
        const image = card.querySelector('.service-card__content .modal__picture');

        form.dataset.additional = title;

        modalTitle.innerHTML = title;
        modalText.innerHTML = text;

        _.forEach(modalParams, (param) => {
          const target = card.querySelector(`[data-value=${param.dataset.value}`);
          param.innerHTML = target.innerHTML; }
        );

        if (image) {
          modalPicture.innerHTML = image.innerHTML;
          lazyLoadInstance.update();
        }
      });
    })
  }
}