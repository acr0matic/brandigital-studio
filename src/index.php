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
          <div class="service__card service-card">
            <div class="service-card__wrapper">
              <h3 class="service-card__title">Брендирование</h3>
              <div class="service-card__price">от 50 000 р.</div>
            </div>
            <!-- /.service-card__wrapper -->

            <picture class="service-card__picture lazy">
              <img data-src="img/page/index/service/1.png" alt="" class="service-card__image image image--contain lazy__item">
              <img src="img/misc/preloader.svg" alt="" class="preloader">
            </picture>
          </div>
          <!-- /.service__card service-card -->

          <div class="service__card service-card">
            <div class="service-card__wrapper">
              <h3 class="service-card__title">Web-дизайн</h3>
              <div class="service-card__price">от 20 000 р.</div>
            </div>
            <!-- /.service-card__wrapper -->

            <picture class="service-card__picture lazy">
              <img data-src="img/page/index/service/2.png" alt="" class="service-card__image image image--contain lazy__item">
              <img src="img/misc/preloader.svg" alt="" class="preloader">
            </picture>
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

  <section id="seo" class="section">
    <div class="container">
      <div class="seo">
        <div class="row flex-column-reverse flex-md-row">
          <div class="col-12 col-md-5 col-lg-6 col-xl-6 pe-4">
            <div data-header-hidden="false" class="seo__side">
              <picture class="seo__picture lazy">
                <img data-src="img/page/index/seo/picture.jpg" src="img/page/index/seo/thumb.jpg" alt="" class="seo__image image image--contain lazy__item">
                <img src="img/misc/preloader.svg" alt="" class="preloader">
              </picture>

              <div class="seo__wrapper">
                <button class="button button-outline mb-3">Полное портфолио</button>
                <a href="" class="seo__link" download>
                  <span>Скачать PDF</span>

                  <svg class="seo__icon" width="100%" height="100%" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="arrow seo__arrow" fill-rule="evenodd" clip-rule="evenodd" d="M17.2651 8.04871C17.2651 7.27266 17.8942 6.64355 18.6703 6.64355C19.4463 6.64355 20.0754 7.27266 20.0754 8.04871V26.5224L24.5602 22.5595C25.0887 22.0925 25.9475 22.0902 26.4784 22.5544C27.0093 23.0187 27.0113 23.7736 26.4828 24.2406L19.7904 30.1544C19.501 30.4102 19.1124 30.5265 18.7329 30.5032C18.3534 30.5265 17.9648 30.4102 17.6754 30.1544L10.983 24.2406C10.4545 23.7736 10.4565 23.0187 10.9874 22.5544C11.5183 22.0902 12.3771 22.0925 12.9056 22.5595L17.2651 26.4118V8.04871Z" fill="#888888" />
                    <path class="rect" d="M2.2793 7.98141V1.95996H34.1295V7.98141" stroke="#888888" stroke-width="3" stroke-linecap="round" />
                  </svg>
                </a>
              </div>
              <!-- /.seo__wrapper -->
            </div>
            <!-- /.seo__side -->
          </div>
          <!-- /.col-5 -->

          <div class="col-12 col-md-7 col-lg-6 mb-3 mb-md-0">
            <div class="section__header">
              <h2 class="section__title seo__title">
                Студия брендирования Brand & Digital /
                <br>
                Бренд энд Диджитал
              </h2>
            </div>
            <!-- /.section__header -->

            <p class="seo__description">
              B&D - изначально компания по брендированию коммерческого автотранспорта с услугами по оклейке. Мы решили дополнить свой портфель компетенций и начали заниматься дизайном, айдентикой и брендированием бизнеса в целом. Brand&Digital необходимо было упаковать, что и стало нашим первым кейсом.
            </p>

            <div class="seo__content">
              <h3>Студия дизайна B&D</h3>

              <p>Мы реализуем полный цикл оформления бизнеса или продукта, а именно:</p>

              <ul>
                <li>Брендинг: разработка логотипа, фирменного стиля, брендбука, айдентики;</li>
                <li>Веб-дизайн: дизайн лендинга и сайта, разработка сайтовa, верстка сайтов;</li>
                <li>Полиграфический дизайн: дизайн, вёрстка и подготовка к печати листовок, брошюр, каталогов, календарей, журналов и презентаций, наружная реклама;</li>
                <li>Визуализация: иллюстрации, паттерны, инфографика, баннеры, стенды, упаковка;</li>
                <li>Анимация 2D и 3D: анимация 2D и 3D, motion, рекламные ролики и анимированные баннеры, 3D анимация и визуализация.</li>
              </ul>

              <h3>Брендирование / брендинг</h3>
              <p>- процесс создания нового или изменения существуюего образа компании. Визуальный стиль, слова, основной посыл в рекламных сообщениях и многое другое.</p>

              <h3>Зачем компании нужно брендирование?</h3>
              <p>Правильное позиционирование себя на рынке, современное и актуальное - позваляет громко и понятно рассказать о том, кто вы и чем занимаетесь. Самое главное быть услышанными и понятыми. </p>
            </div>
            <!-- /.seo__content -->
          </div>
          <!-- /.col-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.seo -->
    </div>
    <!-- /.container -->
  </section>

  <?php include_once('layout/block/team.php') ?>

  <section style="background-image: url(img/page/index/about/background.svg)" id="about" class="section">
    <div class="container">
      <div class="about">
        <div class="row">
          <div class="col-6 col-lg-5">
            <div class="about__content">
              <div class="section__header">
                <h2 class="section__title">
                  Оформляем бизнес
                  <br>
                  Видео о нас - <span>B&D</span>
                </h2>
              </div>
              <!-- /.section__header -->

              <p class="section__text">
                Наша команда занимается созданием визуальных решений
                <br>
                для бизнеса. Специалисты B&D заточены на то, чтобы
                <br>
                формировать яркий и заметный бренд. Брендирование
                <br>
                транспорта, оклейка авто, cоздание
                <br>
                дизайна, интерьерные плёнки, наклейки и многое др.
              </p>
            </div>
            <!-- /.about__content -->
          </div>
          <!-- /.col-5 -->

          <div class="col-6 col-xl-7 offset-lg-1 offset-xl-0">
            <div class="about__video lazy">
              <iframe class="position-relative lazy__item" width="100%" height="100%" data-src="https://www.youtube.com/embed/rDaC1yokRQs" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <img src="img/misc/preloader.svg" alt="" class="preloader">
            </div>
            <!-- /.about__video -->
          </div>
          <!-- /.col-7 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.about -->
    </div>
    <!-- /.container -->
  </section>

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

  <?php include_once('layout/block/callback.php') ?>

</main>

<?php include_once('layout/partials/footer.php') ?>