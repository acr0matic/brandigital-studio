<section id="callback" class="section">
  <div class="container">
    <div class="section__header">
      <h2 class="section__title section__title--orange">Если у вас остались вопросы</h2>
    </div>
    <!-- /.section__header -->

    <div class="callback">
      <div class="row">
        <div class="col-12 col-md-8 col-lg-6 pe-md-5">
          <p class="callback__text section__text">
            Свяжитесь с нашими менеджерами по горячей линии<br>
            <a class="callback__link link link--orange" href="tel:+79991412480">+7 999 141-24-80</a> <br>
            или закажите обратный звонок
          </p>

          <form action="php/mail.php" class="callback__form form form-callback">
            <div class="form__wrapper">
              <div class="input me-md-3 mb-2 mb-md-0">
                <input data-required data-error="Телефон не указан или содержит ошибки" class="input__field input__field--big input__field--required" placeholder="+7 XXX XXX-XX-XX" autocomplete="off" type="tel" name="user_phone">
              </div>
              <!-- /.input -->

              <button class="form__button button button-primary" type="submit">Заказать звонок</button>
            </div>
            <!-- /.form__wrapper -->

            <div class="form__error">
              <img class="form__warning" src="img/icons/misc/warning.svg" alt="">
              <span class="form__log"></span>
            </div>
            <!-- /.form__error -->
          </form>
        </div>
        <!-- /.col-6 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.callback -->
  </div>
  <!-- /.container -->
</section>