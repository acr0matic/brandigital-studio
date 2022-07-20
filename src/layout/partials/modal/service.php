<div class="modal modal--window modal-service micromodal-slide" id="modal-service" aria-hidden="true">
  <div class="modal__overlay" data-micromodal-close>
    <div class="modal__container" role="dialog">
      <header class="modal__header">
        <h2 class="modal__title">
          Давайте рассчитаем цену на ваш проект
        </h2>

        <svg class="modal__close" data-micromodal-close viewBox="0 0 36 35" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path data-micromodal-close d="M2 2L34 33M34 2L2 33" stroke="white" stroke-width="4" />
        </svg>
      </header>

      <main class="modal__content">
        <picture class="modal__picture">
          <img src="img/misc/modal/service/picture.png" alt="" class="modal__image image image--contain">
        </picture>

        <div class="modal__wrapper">
          <p class="modal__text custom-scrollbar custom-scrollbar--white">
            Лендинг (от англ. landing page — «посадочная страница») — это одностраничный сайт с краткой информацией о товаре, услуге или мероприятии. Его задача — превращать посетителей в клиентов.
          </p>

          <ul class="list modal__list">
            <li class="list__item">
              <img class="icon" src="img/icons/component/modal/service/time.svg" alt="">
              <span class="text">2 недели</span>
            </li>

            <li class="list__item">
              <img class="icon" src="img/icons/component/modal/service/ruble.svg" alt="">
              <span class="text">15 000 руб.</span>
            </li>

            <li class="list__item">
              <img class="icon" src="img/icons/component/modal/service/team.svg" alt="">
              <span class="text">
                3D-designer
                <br>
                Middle-designer
              </span>
            </li>
          </ul>
        </div>
        <!-- /.modal__wrapper -->

        <form novalidate action="php/mail.php" class="modal__form form form-modal" data-target="callback" data-subject="Рассчитать цену проекта" data-additional="">
          <div class="form__wrapper me-5">
            <div class="input">
              <input data-required placeholder="+7 ХХХ ХХХ-ХХ-ХХ" autocomplete="off" type="tel" name="user_phone" class="input__field input__field--modal input__field--required">
              <img data-tippy-content="Телефон не указан или содержит ошибки" class="input__warning" src="img/icons/misc/warning.svg" alt="">
            </div>
            <!-- /.input -->

            <div class="form__label mt-1">Свяжемся с вами в Telegram или WhatsApp</div>
          </div>
          <!-- /.form__wrapper -->

          <button data-sending="Отправка..." class="modal__button form__button button button-primary" type="submit">Начать проект</button>
        </form>

        <div class="modal__circle"></div>
      </main>
    </div>
  </div>
</div>
<!-- /.modal -->