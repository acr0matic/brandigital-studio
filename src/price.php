<?php include_once('layout/partials/header.php') ?>

<!-- Основной контент -->
<main id="price">
  <section id="price" class="section">
    <div class="price__header price-header" data-hero>
      <div class="container position-relative">
        <div class="section__header">
          <h2 class="price-header__title page__title section__title">Цены и акции</h2>
        </div>
        <!-- /.section__header -->

        <picture class="price-header__background">
          <img class="price-header__image image image--contain" src="img/page/price/price/background.svg" alt="">
        </picture>
      </div>
      <!-- /.container -->
    </div>
    <!-- /.price__header price-header -->

    <div class="price__body price-body">
      <div class="container">
        <div class="price-body__wrapper">
          <div class="price-body__promotion">
            <div class="section__header text-center">
              <h1 class="section__title">Акции и скидки</h2>
            </div>
            <!-- /.section__header -->

            <?php include('layout/block/promotion.php') ?>
          </div>
          <!-- /.price-body__promotion -->

          <div class="price-body__service">
            <div class="section__header text-lg-center">
              <h2 class="section__title">Цены</h2>
              <p class="section__description">
                Стоимость зависит от множества факторов: сложность задачи, сроки выполнения, подготовленность клиента и т.д. Ниже представленны цены на минимальный объём работы по каждому направлению.
              </p>
            </div>
            <!-- /.section__header text-center -->

            <div class="row">
              <div class="col-12 col-md-4 mb-4">
                <div class="price-card">
                  <div class="price-card__header">
                    <h3 class="price-card__title">Брендирование</h3>
                  </div>
                  <!-- /.price-card__header -->

                  <div class="price-card__body">
                    <picture class="price-card__picture lazy">
                      <img data-src="img/page/price/service/1.png" alt="" class="price-card__image image image--contain lazy__item">
                      <img src="img/misc/preloader.svg" alt="" class="preloader">
                    </picture>
                    <span class="price-card__cost">от 50 000 ₽</span>
                  </div>
                  <!-- /.price-card__body -->
                </div>
                <!-- /.price-card -->
              </div>
              <!-- /.col-4 -->

              <div class="col-12 col-md-4 mb-4">
                <div class="price-card">
                  <div class="price-card__header">
                    <h3 class="price-card__title">Web-дизайн</h3>
                  </div>
                  <!-- /.price-card__header -->

                  <div class="price-card__body">
                    <picture class="price-card__picture lazy">
                      <img data-src="img/page/price/service/2.png" alt="" class="price-card__image image image--contain lazy__item">
                      <img src="img/misc/preloader.svg" alt="" class="preloader">
                    </picture>
                    <span class="price-card__cost">от 20 000 ₽</span>
                  </div>
                  <!-- /.price-card__body -->
                </div>
                <!-- /.price-card -->
              </div>
              <!-- /.col-4 -->

              <div class="col-12 col-md-4 mb-4">
                <div class="price-card">
                  <div class="price-card__header">
                    <h3 class="price-card__title">Дизайн авто</h3>
                  </div>
                  <!-- /.price-card__header -->

                  <div class="price-card__body">
                    <picture class="price-card__picture lazy">
                      <img data-src="img/page/price/service/3.png" alt="" class="price-card__image image image--contain lazy__item">
                      <img src="img/misc/preloader.svg" alt="" class="preloader">
                    </picture>
                    <span class="price-card__cost">от 15 000 ₽</span>
                  </div>
                  <!-- /.price-card__body -->
                </div>
                <!-- /.price-card -->
              </div>
              <!-- /.col-4 -->

              <div class="col-12 col-md-4 mb-4 mb-md-0">
                <div class="price-card">
                  <div class="price-card__header">
                    <h3 class="price-card__title">Логотип</h3>
                  </div>
                  <!-- /.price-card__header -->

                  <div class="price-card__body">
                    <picture class="price-card__picture lazy">
                      <img data-src="img/page/price/service/4.png" alt="" class="price-card__image image image--contain lazy__item">
                      <img src="img/misc/preloader.svg" alt="" class="preloader">
                    </picture>
                    <span class="price-card__cost">от 15 000 ₽</span>
                  </div>
                  <!-- /.price-card__body -->
                </div>
                <!-- /.price-card -->
              </div>
              <!-- /.col-4 -->

              <div class="col-12 col-md-4 mb-4 mb-md-0">
                <div class="price-card">
                  <div class="price-card__header">
                    <h3 class="price-card__title">Иллюстрации / motion</h3>
                  </div>
                  <!-- /.price-card__header -->

                  <div class="price-card__body">
                    <picture class="price-card__picture lazy">
                      <img data-src="img/page/price/service/5.png" alt="" class="price-card__image image image--contain lazy__item">
                      <img src="img/misc/preloader.svg" alt="" class="preloader">
                    </picture>
                    <span class="price-card__cost">от 9 000 ₽</span>
                  </div>
                  <!-- /.price-card__body -->
                </div>
                <!-- /.price-card -->
              </div>
              <!-- /.col-4 -->

              <div class="col-12 col-md-4">
                <div class="price-card">
                  <div class="price-card__header">
                    <h3 class="price-card__title">Дизайн авто</h3>
                  </div>
                  <!-- /.price-card__header -->

                  <div class="price-card__body">
                    <picture class="price-card__picture lazy">
                      <img data-src="img/page/price/service/6.png" alt="" class="price-card__image image image--contain lazy__item">
                      <img src="img/misc/preloader.svg" alt="" class="preloader">
                    </picture>
                    <span class="price-card__cost">от 12 000 ₽</span>
                  </div>
                  <!-- /.price-card__body -->
                </div>
                <!-- /.price-card -->
              </div>
              <!-- /.col-4 -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.price-body__service -->
        </div>
        <!-- /.price-body__wrapper -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.price__body price-body -->
  </section>

  <?php include_once('layout/block/callback.php') ?>

  <?php include_once('layout/partials/modal/promotion.php') ?>
</main>


<?php include_once('layout/partials/footer.php') ?>