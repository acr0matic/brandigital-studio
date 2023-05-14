<?php include_once('layout/partials/header.php') ?>

<!-- Основной контент -->
<main id="webdev">
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
              <button data-micromodal-trigger="modal-callback" class="button button-primary me-2 me-xl-3 me-xxl-4">Оставить заявку</button>
              <a href="#portfolio-block" class="button button-outline button-outline--orange button-outline--hover__gray">Портфолио</a>
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
          <h2 class="section__title service__title">Мы делаем</h2>
        </div>
        <!-- /.section__header -->

        <div class="service__items">
          <div class="service__card service-card" data-micromodal-trigger="modal-service">
            <div class="service-card__wrapper">
              <h3 class="service-card__title">Брендирование</h3>
              <div class="service-card__price">Подробнее</div>
            </div>
            <!-- /.service-card__wrapper -->

            <picture class="service-card__picture lazy">
              <img data-src="img/page/index/service/1.png" alt="" class="service-card__image image image--contain lazy__item">
              <img src="img/misc/preloader.svg" alt="" class="preloader">
            </picture>

            <div class="service-card__content">
              <p class="text">
                Одностраничный сайт, создается с целью продажи узконаправленных товаров или услуг.
              </p>

              <div data-value="time">2 недели</div>
              <div data-value="price">от 60 000 руб</div>

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
              <div data-value="price" class="service-card__price">Подробнее</div>
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
              <div class="service-card__price">Подробнее</div>
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
              <div class="service-card__price">Подробнее</div>
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
              <div class="service-card__price">Подробнее</div>
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
              <div class="service-card__price">Подробнее</div>
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

  <section id="quiz" class="section">
    <div class="container">
      <div class="quiz">
        <form action="">
          <div class="swiper slider-quiz">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="quiz__content">
                  <div class="section__header">
                    <h2 class="section__title">
                      Давайте рассчитаем стоимость
                      <br>
                      вашего сайта
                    </h2>
                  </div>
                  <!-- /.section__header -->

                  <div class="quiz__info">
                    <img src="img/section/quiz/gift.png" alt="">
                    <p>
                      Ответьте на 5 простых вопросов
                      <br>
                      и получите <span>бесплатный анализ конкурентов</span>
                    </p>
                  </div>
                  <!-- /.quiz__info -->

                  <div class="quiz__action">
                    <div class="button button-primary">Рассчитать стоимость за 2 минуты</div>
                  </div>
                  <!-- /.quiz__action -->
                </div>
                <!-- /.quiz__content -->
              </div>
              <!-- /.swiper-slide -->

              <div class="swiper-slide">
                <div class="quiz__stage">
                  Вопрос 1 из 5
                </div>
                <!-- /.quiz__stage -->

                <h3 class="quiz__title">
                  Выберите тип сайта
                </h3>

                <div class="row">
                  <div class="col-12 col-md-8">
                    <div class="row gy-3 gy-md-4">
                      <div class="col-12 col-md-6">
                        <label class="radio">
                          <input checked type="radio" name="site_type">
                          <span class="radio__mark"></span>
                          <span class="radio__label">Одностраничный</span>
                        </label>
                      </div>
                      <!-- /.col-4 -->

                      <div class="col-12 col-md-6">
                        <label class="radio">
                          <input type="radio" name="site_type">
                          <span class="radio__mark"></span>
                          <span class="radio__label">Интернет-магазин</span>
                        </label>
                      </div>
                      <!-- /.col-4 -->

                      <div class="col-12 col-md-6">
                        <label class="radio">
                          <input type="radio" name="site_type">
                          <span class="radio__mark"></span>
                          <span class="radio__label">Корпоративный</span>
                        </label>
                      </div>
                      <!-- /.col-4 -->

                      <div class="col-12 col-md-6">
                        <label class="radio">
                          <input type="radio" name="site_type">
                          <span class="radio__mark"></span>
                          <span class="radio__label">Не определился</span>
                        </label>
                      </div>
                      <!-- /.col-4 -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.col-8 -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.swiper-slide -->

              <div class="swiper-slide">
                <div class="quiz__stage">
                  Вопрос 2 из 5
                </div>
                <!-- /.quiz__stage -->

                <h3 class="quiz__title">
                  У меня уже есть сайт
                </h3>

                <div class="row">
                  <div class="col-12 col-md-8">
                    <div class="row gy-3 gy-md-4">
                      <div class="col-12 col-md-6">
                        <label class="radio">
                          <input checked type="radio" name="site_existence">
                          <span class="radio__mark"></span>
                          <span class="radio__label">Да</span>
                        </label>
                      </div>
                      <!-- /.col-4 -->

                      <div class="col-12 col-md-6">
                        <label class="radio">
                          <input type="radio" name="site_existence">
                          <span class="radio__mark"></span>
                          <span class="radio__label">Нет</span>
                        </label>
                      </div>
                      <!-- /.col-4 -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.col-8 -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.swiper-slide -->

              <div class="swiper-slide">
                <div class="quiz__stage">
                  Вопрос 3 из 5
                </div>
                <!-- /.quiz__stage -->

                <h3 class="quiz__title">
                  Область деятельности организации
                </h3>

                <div class="row">
                  <div class="col-12 col-md-8">
                    <div class="row gy-3 gy-md-4">
                      <div class="col-12 col-md-6">
                        <label class="radio">
                          <input checked type="radio" name="site_area">
                          <span class="radio__mark"></span>
                          <span class="radio__label">Розничная торговля</span>
                        </label>
                      </div>
                      <!-- /.col-4 -->

                      <div class="col-12 col-md-6">
                        <label class="radio">
                          <input type="radio" name="site_area">
                          <span class="radio__mark"></span>
                          <span class="radio__label">Услуги юр.лицам</span>
                        </label>
                      </div>
                      <!-- /.col-4 -->

                      <div class="col-12 col-md-6">
                        <label class="radio">
                          <input type="radio" name="site_area">
                          <span class="radio__mark"></span>
                          <span class="radio__label">Оптовые продажи</span>
                        </label>
                      </div>
                      <!-- /.col-4 -->

                      <div class="col-12 col-md-6">
                        <label class="radio">
                          <input type="radio" name="site_area">
                          <span class="radio__mark"></span>
                          <span class="radio__label">Некоммерческий проект</span>
                        </label>
                      </div>
                      <!-- /.col-4 -->

                      <div class="col-12 col-md-6">
                        <label class="radio">
                          <input type="radio" name="site_area">
                          <span class="radio__mark"></span>
                          <span class="radio__label">Услуги физ.лицам</span>
                        </label>
                      </div>
                      <!-- /.col-4 -->

                      <div class="col-12 col-md-6">
                        <label class="radio">
                          <input type="radio" name="site_area">
                          <span class="radio__mark"></span>
                          <span class="radio__label">Нет моего варианта</span>
                        </label>
                      </div>
                      <!-- /.col-4 -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.col-8 -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.swiper-slide -->

              <div class="swiper-slide">
                <div class="quiz__stage">
                  Вопрос 4 из 5
                </div>
                <!-- /.quiz__stage -->

                <h3 class="quiz__title">
                  Для каких целей нужен сайт?
                </h3>

                <div class="row">
                  <div class="col-12 col-md-8">
                    <div class="row gy-3 gy-md-4">
                      <div class="col-12 col-md-6">
                        <label class="radio">
                          <input checked type="radio" name="site_reason">
                          <span class="radio__mark"></span>
                          <span class="radio__label">Привлечение новых клиентов</span>
                        </label>
                      </div>
                      <!-- /.col-4 -->

                      <div class="col-12 col-md-6">
                        <label class="radio">
                          <input type="radio" name="site_reason">
                          <span class="radio__mark"></span>
                          <span class="radio__label">Для имиджа компании</span>
                        </label>
                      </div>
                      <!-- /.col-4 -->

                      <div class="col-12 col-md-6">
                        <label class="radio">
                          <input type="radio" name="site_reason">
                          <span class="radio__mark"></span>
                          <span class="radio__label">Онлай продажи</span>
                        </label>
                      </div>
                      <!-- /.col-4 -->

                      <div class="col-12 col-md-6">
                        <label class="radio">
                          <input type="radio" name="site_reason">
                          <span class="radio__mark"></span>
                          <span class="radio__label">Затрудняюсь ответить</span>
                        </label>
                      </div>
                      <!-- /.col-4 -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.col-8 -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.swiper-slide -->

              <div class="swiper-slide">
                <div class="quiz__stage">
                  Вопрос 5 из 5
                </div>
                <!-- /.quiz__stage -->

                <h3 class="quiz__title">
                  Оставьте контакты, чтобы мы могли
                  <br>
                  с вами связаться и отправить расчет
                </h3>

                <div class="quiz__info">
                  <p>
                    Наши специалисты проведут <span>бесплатный аудит конкурентов</span>, и мы направим
                    <br>
                    его вам вместе с <span>индивидуальным спецпредложением!</span>
                  </p>
                </div>
                <!-- /.quiz__info -->

                <div class="quiz__action">
                  <div class="row">
                    <div class="col-12 col-md-2 mb-3 mb-md-0">
                      <label class="input">
                        <span class="input__label">Телефон</span>
                        <input placeholder="Ваш телефон" autocomplete="off" type="tel" name="user_phone" class="input__field input__field--required">
                        <img data-tippy-content="Телефон не указан или содержит ошибки" class="input__warning" src="img/icons/misc/warning.svg" alt="">
                      </label>
                      <!-- /.input -->
                    </div>
                    <!-- /.col-4 -->

                    <div class="col-12 col-md-2">
                      <label class="input">
                        <span class="input__label">E-mail</span>
                        <input placeholder="Ваша почта" autocomplete="off" type="email" name="user_email" class="input__field input__field--required">
                        <img data-tippy-content="Почта не указана или содержит ошибки" class="input__warning" src="img/icons/misc/warning.svg" alt="">
                      </label>
                      <!-- /.input -->
                    </div>
                    <!-- /.col-4 -->
                  </div>
                  <!-- /.row -->

                  <div class="row mt-4 mt-md-5">
                    <div class="col-12 col-md-3 offset-md-2">
                      <button data-sending="Отправка..." class="button button--block button-primary" type="submit">Рассчитать стоимость*</button>
                    </div>
                    <!-- /.col-4 -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.quiz__action -->
              </div>
              <!-- /.swiper-slide -->
            </div>
            <!-- /.swiper-wrapper -->

            <div class="swiper-control hidden">
              <button class="button button-outline  button-outline--orange me-md-3">Назад</button>
              <button class="button button-primary">Далее</button>
            </div>
            <!-- /.swiper-control -->
          </div>
          <!-- /.swiper quiz-slider -->
        </form>

        <img class="quiz__background" src="img/section/quiz/illustration-1.svg" alt="">
        <img class="quiz__background hidden" src="img/section/quiz/illustration-2.svg" alt="">
      </div>
      <!-- /.quiz -->
    </div>
    <!-- /.container -->
  </section>

  <?php include_once('layout/block/seo.php') ?>

  <?php include_once('layout/block/team.php') ?>

  <section id="promotion-action" class="section">
    <div class="container">
      <div class="promotion-action">
        <h2 class="section__title">
          Закажите оклейку от 3-х авто
          <br>
          и получите <span>СКИДКУ 15%</span>
        </h2>

        <p class="section__text">Акция действует на единовременный заказ услуги</p>

        <div class="row">
          <div class="col-12 col-lg-9 col-xl-7">
            <form novalidate="" action="php/mail.php" class="modal__form form form-modal" data-target="callback">
              <div class="row">
                <div class="col-12 col-md-4 mb-3 mb-md-0">
                  <label class="input">
                    <span class="input__label">Телефон*</span>
                    <input data-required placeholder="Ваш номер телефона" autocomplete="off" type="tel" name="user_phone" class="input__field input__field--required">
                    <img data-tippy-content="Телефон не указан или содержит ошибки" class="input__warning" src="img/icons/misc/warning.svg" alt="">
                  </label>
                  <!-- /.input -->
                </div>
                <!-- /.col-2 -->

                <div class="col-12 col-md-4 mb-4 mb-md-0">
                  <label class="input">
                    <span class="input__label">E-mail</span>
                    <input placeholder="Ваша почта" autocomplete="off" type="email" name="user_email" class="input__field input__field--required">
                    <img data-tippy-content="Почта не указана или содержит ошибки" class="input__warning" src="img/icons/misc/warning.svg" alt="">
                  </label>
                  <!-- /.input -->
                </div>
                <!-- /.col-2 -->

                <div class="col-12 col-md-4">
                  <button data-sending="Отправка..." class="button button-primary" type="submit">Оставить заявку</button>
                </div>
                <!-- /.col-2 -->
              </div>
              <!-- /.row -->

              <p class="form__privacy mt-3">*Нажимая на кнопку вы соглашаетесь с <a class="link link--underline link--orange" href="">политикой обработки персональных даннных</a></p>
            </form>
          </div>
          <!-- /.col-6 -->
        </div>
        <!-- /.row -->

        <img class="promotion-action__background" src="img/page/service/promotion/illustration.svg" alt="">
      </div>
      <!-- /.promotion-action -->
    </div>
    <!-- /.container -->
  </section>

  <?php include_once('layout/partials/modal/service.php') ?>
  <?php include_once('layout/block/callback.php') ?>

</main>

<?php include_once('layout/partials/footer.php') ?>