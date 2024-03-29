<?php include_once('layout/partials/header.php') ?>

<!-- Основной контент -->
<main id="index">
  <section id="hero" class="section">
    <div class="hero">
      <div data-hero class="hero__row hero__row--main">
        <div class="container">
          <div class="hero__content">
            <h1 class="page__title section__title hero__title">
              Студия дизайна
              <br>
              <span>B&D</span>
            </h1>

            <p class="page__description hero__description">
              Разработка дизайна полного цикла. Не боимся
              <br>
              правок, работаем эффективно и быстро.
              <br>
              Делаем графический дизайн, web, анимации
              <br>
              и многое другое.
            </p>

            <div class="hero__action">
              <button data-micromodal-trigger="modal-callback" class="button button-primary me-2 me-xl-3 me-xxl-4">Начать проект</button>
              <a href="#portfolio" class="button button-outline button-outline--orange button-outline--hover__gray">Портфолио</a>
            </div>
            <!-- /.hero__action -->

            <div class="hero__special">
              <a href="#promotion" class="hero__promotion link link--bold">
                Наши акции
                <svg class="svg ms-3" width="14" height="22" viewBox="0 0 14 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="6" width="2" height="21" rx="1" fill="#FF8025" class="translate-left"></rect>
                  <rect width="2" height="9" rx="1" transform="matrix(0.707107 0.707107 -0.703365 0.710829 12.3301 14)" fill="#FF8025" class="translate-left"></rect>
                  <rect width="2" height="9" rx="1" transform="matrix(-0.707107 0.707107 0.703365 0.710829 2 14)" fill="#FF8025" class="translate-left"></rect>
                </svg>
              </a>
            </div>
            <!-- /.hero__special -->
          </div>
          <!-- /.hero__content -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.hero__hero -->

      <div class="hero__row hero__row--inverted">
        <div class="container position-relative">
          <div class="hero__motion motion" data-safari="video/fallback/design.png" data-safari-mobile="video/fallback/mobile/design.png">
            <video class="motion__media" poster="video/posters/design.png" autoplay loop playsinline muted>
              <source src="video/design.webm">
            </video>
          </div>
          <!-- /.hero__motion -->

          <div class="hero__action">
            <button data-micromodal-trigger="modal-callback" class="button button-primary mb-2">Начать проект</button>
            <a href="#portfolio" class="button button-outline">Портфолио</a>
          </div>
          <!-- /.hero__action -->

          <div class="hero__special">
            <a href="#promotion" class="hero__promotion link link--bold">
              Наши акции
              <svg class="svg ms-3" width="14" height="22" viewBox="0 0 14 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="6" width="2" height="21" rx="1" fill="#FF8025" class="translate-left"></rect>
                <rect width="2" height="9" rx="1" transform="matrix(0.707107 0.707107 -0.703365 0.710829 12.3301 14)" fill="#FF8025" class="translate-left"></rect>
                <rect width="2" height="9" rx="1" transform="matrix(-0.707107 0.707107 0.703365 0.710829 2 14)" fill="#FF8025" class="translate-left"></rect>
              </svg>
            </a>
          </div>
          <!-- /.hero__special -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.hero__row hero__row--white -->
    </div>
    <!-- /.hero -->
  </section>

  <section id="service" class="section">
    <div class="container">
      <div class="service">
        <div class="section__header text-center">
          <h2 class="section__title service__title">Какой дизайн мы делаем</h2>
        </div>
        <!-- /.section__header -->

        <div class="service__items">
          <div class="service__card service-card" data-micromodal-trigger="modal-service">
            <div class="service-card__wrapper">
              <h3 class="service-card__title">Брендирование</h3>
              <div data-value="price" class="service-card__price">от 50 000 р.</div>
            </div>
            <!-- /.service-card__wrapper -->

            <picture class="service-card__picture lazy">
              <img data-src="img/page/index/service/1.png" alt="" class="service-card__image image image--contain lazy__item">
              <img src="img/misc/preloader.svg" alt="" class="preloader">
            </picture>

            <div class="service-card__content">
              <p class="text">
                Лендинг (от англ. landing page — «посадочная страница») — это одностраничный сайт с краткой информацией о товаре, услуге или мероприятии. Его задача — превращать посетителей в клиентов.
              </p>

              <div data-value="time">2 недели</div>
              <div data-value="team">Middle-designer<br>2D-designer</div>

              <picture class="modal__picture lazy">
                <img data-src="img/misc/modal/service/picture.png" alt="" class="modal__image image image--cover lazy__item">
                <img src="img/misc/preloader.svg" alt="" class="preloader">
              </picture>
              <!-- /.modal__picture -->
            </div>
            <!-- /.service-card__content -->
          </div>
          <!-- /.service__card service-card -->

          <div class="service__card service-card" data-micromodal-trigger="modal-service">
            <div class="service-card__wrapper">
              <h3 class="service-card__title">Web-дизайн</h3>
              <div data-value="price" class="service-card__price">от 20 000 р.</div>
            </div>
            <!-- /.service-card__wrapper -->

            <picture class="service-card__picture lazy">
              <img data-src="img/page/index/service/2.png" alt="" class="service-card__image image image--contain lazy__item">
              <img src="img/misc/preloader.svg" alt="" class="preloader">
            </picture>

            <div class="service-card__content">
              <p class="text">
                Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. О строчка послушавшись маленький раз образ предупредила рекламных, переулка однажды.
              </p>

              <div data-value="time">1 неделя</div>
              <div data-value="team">Middle-designer<br>3D-designer</div>

              <picture class="modal__picture lazy">
                <img data-src="img/page/index/service/2.png" alt="" class="modal__image image image--cover lazy__item">
                <img src="img/misc/preloader.svg" alt="" class="preloader">
              </picture>
              <!-- /.modal__picture -->
            </div>
            <!-- /.service-card__content -->
          </div>
          <!-- /.service__card service-card -->

          <div class="service__card service-card">
            <div class="service-card__wrapper">
              <h3 class="service-card__title">Дизайн авто</h3>
              <div class="service-card__price">от 15 000 р.</div>
            </div>
            <!-- /.service-card__wrapper -->

            <picture class="service-card__picture lazy">
              <img data-src="img/page/index/service/3.png" alt="" class="service-card__image image image--contain lazy__item">
              <img src="img/misc/preloader.svg" alt="" class="preloader">
            </picture>

            <a class="stretched-link" href=""></a>
          </div>
          <!-- /.service__card service-card -->

          <div class="service__card service-card">
            <div class="service-card__wrapper">
              <h3 class="service-card__title">Логотип</h3>
              <div class="service-card__price">от 9 000 р.</div>
            </div>
            <!-- /.service-card__wrapper -->

            <picture class="service-card__picture lazy">
              <img data-src="img/page/index/service/4.png" alt="" class="service-card__image image image--contain lazy__item">
              <img src="img/misc/preloader.svg" alt="" class="preloader">
            </picture>

            <a class="stretched-link" href=""></a>
          </div>
          <!-- /.service__card service-card -->

          <div class="service__card service-card">
            <div class="service-card__wrapper">
              <h3 class="service-card__title">Иллюстрация / motion</h3>
              <div class="service-card__price">от 15 000 р.</div>
            </div>
            <!-- /.service-card__wrapper -->

            <picture class="service-card__picture lazy">
              <img data-src="img/page/index/service/5.png" alt="" class="service-card__image image image--contain lazy__item">
              <img src="img/misc/preloader.svg" alt="" class="preloader">
            </picture>

            <a class="stretched-link" href=""></a>
          </div>
          <!-- /.service__card service-card -->

          <div class="service__card service-card">
            <div class="service-card__wrapper">
              <h3 class="service-card__title">Упаковка</h3>
              <div class="service-card__price">от 12 000 р.</div>
            </div>
            <!-- /.service-card__wrapper -->

            <picture class="service-card__picture lazy">
              <img data-src="img/page/index/service/6.png" alt="" class="service-card__image image image--contain lazy__item">
              <img src="img/misc/preloader.svg" alt="" class="preloader">
            </picture>

            <a class="stretched-link" href=""></a>
          </div>
          <!-- /.service__card service-card -->
        </div>
        <!-- /.service__items -->
      </div>
      <!-- /.service -->
    </div>
    <!-- /.container -->
  </section>

  <section id="assurance" class="section">
    <div class="container">
      <div class="assurance">
        <div class="assurance__content">
          <h2 class="assurance__title section__title">Нам доверяют бренды</h2>
          <p class="assurance__text section__text">
            Работаем с небольшими компаниями
            <br>
            с региональными брендами, которые
            <br>
            знают все.
          </p>
          <button data-micromodal-trigger="modal-callback" class="assurance__button button button-primary">Рекомендации</button>
        </div>
        <!-- /.assurance__content -->

        <div class="assurance__bg">
          <div class="assurance__infinite">
            <div class="assurance__partners">
              <img src="img/page/index/assurance/1.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/2.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/3.svg" alt="" class="assurance__partner">

              <img src="img/page/index/assurance/1.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/2.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/3.svg" alt="" class="assurance__partner">

              <img src="img/page/index/assurance/1.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/2.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/3.svg" alt="" class="assurance__partner">

              <img src="img/page/index/assurance/1.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/2.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/3.svg" alt="" class="assurance__partner">
            </div>
            <!-- /.assurance__partners -->

            <div class="assurance__partners assurance__partners--dublicate">
              <img src="img/page/index/assurance/1.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/2.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/3.svg" alt="" class="assurance__partner">

              <img src="img/page/index/assurance/1.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/2.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/3.svg" alt="" class="assurance__partner">

              <img src="img/page/index/assurance/1.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/2.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/3.svg" alt="" class="assurance__partner">

              <img src="img/page/index/assurance/1.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/2.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/3.svg" alt="" class="assurance__partner">
            </div>
            <!-- /.assurance__partners -->
          </div>
          <!-- /.assurance__infinite -->

          <div class="assurance__infinite">
            <div class="assurance__partners">
              <img src="img/page/index/assurance/1.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/2.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/3.svg" alt="" class="assurance__partner">

              <img src="img/page/index/assurance/1.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/2.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/3.svg" alt="" class="assurance__partner">

              <img src="img/page/index/assurance/1.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/2.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/3.svg" alt="" class="assurance__partner">

              <img src="img/page/index/assurance/1.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/2.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/3.svg" alt="" class="assurance__partner">
            </div>
            <!-- /.assurance__partners -->

            <div class="assurance__partners assurance__partners--dublicate">
              <img src="img/page/index/assurance/1.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/2.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/3.svg" alt="" class="assurance__partner">

              <img src="img/page/index/assurance/1.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/2.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/3.svg" alt="" class="assurance__partner">

              <img src="img/page/index/assurance/1.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/2.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/3.svg" alt="" class="assurance__partner">

              <img src="img/page/index/assurance/1.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/2.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/3.svg" alt="" class="assurance__partner">
            </div>
            <!-- /.assurance__partners -->
          </div>
          <!-- /.assurance__infinite -->

          <div class="assurance__infinite">
            <div class="assurance__partners">
              <img src="img/page/index/assurance/1.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/2.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/3.svg" alt="" class="assurance__partner">

              <img src="img/page/index/assurance/1.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/2.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/3.svg" alt="" class="assurance__partner">

              <img src="img/page/index/assurance/1.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/2.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/3.svg" alt="" class="assurance__partner">

              <img src="img/page/index/assurance/1.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/2.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/3.svg" alt="" class="assurance__partner">
            </div>
            <!-- /.assurance__partners -->

            <div class="assurance__partners assurance__partners--dublicate">
              <img src="img/page/index/assurance/1.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/2.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/3.svg" alt="" class="assurance__partner">

              <img src="img/page/index/assurance/1.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/2.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/3.svg" alt="" class="assurance__partner">

              <img src="img/page/index/assurance/1.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/2.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/3.svg" alt="" class="assurance__partner">

              <img src="img/page/index/assurance/1.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/2.svg" alt="" class="assurance__partner">
              <img src="img/page/index/assurance/3.svg" alt="" class="assurance__partner">
            </div>
            <!-- /.assurance__partners -->
          </div>
          <!-- /.assurance__infinite -->
        </div>
        <!-- /.assurance__bg -->

        <div class="assurance__fade"></div>
        <!-- /.assurance__fade -->
      </div>
      <!-- /.assurance -->
    </div>
    <!-- /.container -->
  </section>

  <?php include_once('layout/block/portfolio.php') ?>

  <?php include_once('layout/block/seo.php') ?>

  <?php include_once('layout/block/team.php') ?>

  <?php include_once('layout/block/about.php') ?>

  <section id="promotion" class="section">
    <div class="container">
      <div class="section__header text-center">
        <h2 class="section__title">Акции и скидки</h2>
      </div>
      <!-- /.section__header -->

      <?php include_once('layout/block/promotion.php') ?>
    </div>
    <!-- /.container -->

    <?php include_once('layout/partials/modal/promotion.php') ?>
  </section>

  <?php include_once('layout/partials/modal/service.php') ?>
  <?php include_once('layout/block/callback.php') ?>

</main>

<?php include_once('layout/partials/footer.php') ?>