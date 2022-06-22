<div class="modal modal--window modal-callback micromodal-slide" id="modal-service" aria-hidden="true">
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
        <p class="modal__text">
          Оставьте ваши контактные данные и мы свяжемся с вами, удобным для вас способом
        </p>

        <div class="modal__wrapper">
          <form novalidate action="php/mail.php" class="modal__form form form-modal" data-target="callback" data-subject="Рассчитать цену проекта" data-additional="">
            <div class="input mb-2 mb-lg-3">
              <input data-required placeholder="Имя" autocomplete="off" type="text" name="user_name" class="input__field input__field--modal input__field--required">
              <img data-tippy-content="Имя не указано или содержит ошибки" class="input__warning" src="img/icons/misc/warning.svg" alt="">
            </div>
            <!-- /.input -->

            <div class="input mb-2 mb-lg-3">
              <input data-required placeholder="+7 ХХХ ХХХ-ХХ-ХХ" autocomplete="off" type="tel" name="user_phone" class="input__field input__field--modal input__field--required">
              <img data-tippy-content="Телефон не указан или содержит ошибки" class="input__warning" src="img/icons/misc/warning.svg" alt="">
            </div>
            <!-- /.input -->

            <div class="input mb-2">
              <input placeholder="E-mail" autocomplete="off" type="email" name="user_email" class="input__field input__field--modal">
              <img data-tippy-content="Почта содержит ошибки" class="input__warning" src="img/icons/misc/warning.svg" alt="">
            </div>
            <!-- /.input -->

            <div class="form__info mb-3 mb-lg-4">Обязательные поля</div>

            <div class="input input--box mb-2 mb-lg-3">
              <textarea rows="3" placeholder="Комментарий" name="user_message" class="input__field input__field--modal input__field--box"></textarea>
            </div>
            <!-- /.input -->

            <div class="form__action">
              <div class="form__privacy">
                <label class="checkbox mb-3">
                  <input type="checkbox">
                  <span class="checkbox__mark"></span>
                  <span class="checkbox__label">Согласен с <a href="privacy.php" class="checkbox__policy link">Политикой обработки данных</a></span>
                </label>
              </div>
              <!-- /.form__privacy -->

              <button data-sending="Отправка..." disabled class="modal__button form__button button button-primary mt-1" type="submit">Отправить</button>
            </div>
            <!-- /.form__action -->
          </form>

          <picture class="modal__picture">
            <img src="img/misc/modal/callback/picture.svg" alt="" class="modal__image image image--contain">
          </picture>
        </div>
        <!-- /.modal__wrapper -->
      </main>
    </div>
  </div>
</div>
<!-- /.modal -->