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
        <picture class="modal__picture lazy">
          <img data-src="img/misc/modal/service/picture.png" alt="" class="modal__image image image--contain lazy__item">
          <img src="img/misc/preloader.svg" alt="" class="preloader">
        </picture>

        <div class="modal__wrapper">
          <p class="modal__text custom-scrollbar custom-scrollbar--white">
            Одностраничный сайт, создается с целью продажи узконаправленных товаров или услуг.
          </p>

          <div class="modal__list">
            <div>В базовый тариф входит:</div>
            <ul class="list list--dotted">
              <li class="list__item">
                Анализ конкурентов и ниши бизнеса
              </li>

              <li class="list__item">
                Разработка продающей структуры, дизайн </li>

              <li class="list__item">
                Внедрение форм для систем обратной связи
              </li>

              <li class="list__item">
                Адаптивная верстка сайта, тестирование
              </li>
            </ul>
          </div>
          <!-- /.modal__list -->

          <ul class="list modal__list">
            <li class="list__item">
              <img class="icon" src="img/icons/component/modal/service/time.svg" alt="">
              <span data-value="time" class="text">2 недели</span>
            </li>

            <li class="list__item">
              <img class="icon" src="img/icons/component/modal/service/ruble.svg" alt="">
              <span data-value="price" class="text">15 000 руб.</span>
            </li>
          </ul>
        </div>
        <!-- /.modal__wrapper -->

        <form novalidate action="php/mail.php" class="modal__form form form-modal" data-target="callback" data-subject="Рассчитать цену проекта" data-additional="">
          <div class="form__wrapper me-md-4 me-xxl-5">
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