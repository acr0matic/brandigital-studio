<?php include_once('layout/partials/header.php') ?>

<!-- Основной контент -->
<main id="single-portfolio">

  <section id="single-portfolio" class="section">
    <div class="single-portfolio">
      <div class="single-portfolio__header portfolio-header">
        <div class="portfolio-header__wrapper">
          <div class="container">
            <div class="portfolio-header__content">
              <h1 class="portfolio-header__title page__title section__title">Наши работы</h1>
              <p class="portfolio-header__description section__text">
                Мы внимательны к каждому
                <br>
                нашему проекту.
              </p>
            </div>
            <!-- /.portfolio-header__content -->
          </div>
          <!-- /.container -->

          <picture class="portfolio-header__picture lazy">
            <source srcset="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" media="(max-width: 768px)">
            <img data-src="img/single/portfolio/picture.jpg" alt="" class="portfolio-header__image image image--cover lazy__item">
            <img src="img/misc/preloader.svg" alt="" class="preloader">
          </picture>
        </div>
        <!-- /.portfolio-header__wrapper -->

        <div class="portfolio-header__nav portfolio-nav">
          <div class="container">
            <div class="portfolio-nav__wrapper">
              <div class="portfolio-nav__item portfolio-nav__item--current">
                <div class="portfolio-nav__image">
                  <div class="portfolio-nav__background"></div>
                  <svg class="portfolio-nav__icon svg" viewBox="0 0 158 160" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M50.5106 107.554C50.9184 107.974 50.9485 108.62 50.6003 109.055L49.7527 109.896C49.3605 110.285 49.2808 110.922 49.6107 111.385C49.9649 111.877 50.5894 111.998 51.0598 111.738C51.564 111.267 51.9245 110.939 51.9245 110.939C52.3873 110.49 53.1092 110.489 53.5414 110.934L53.5683 110.961L49.3764 115.122C49.0232 115.473 48.4501 115.459 48.096 115.095L41.5442 108.354L43.673 106.241C44.1065 105.81 44.8138 105.824 45.2485 106.271L45.29 106.314C45.6832 106.719 45.723 107.336 45.4138 107.771L45.4016 107.783L44.2739 108.937C43.8404 109.367 43.8485 109.996 44.2856 110.446C44.7105 110.883 45.3909 110.909 45.827 110.515L48.9107 107.503C49.3443 107.073 50.0515 107.087 50.4886 107.537L50.5082 107.557L50.5106 107.554ZM47.2949 112.267L47.5677 111.996C48.0037 111.563 48.7086 111.579 49.1457 112.029C49.5828 112.479 49.5861 113.191 49.1501 113.624L48.8773 113.895C48.4438 114.325 47.7365 114.312 47.2994 113.862C46.8623 113.412 46.8589 112.7 47.2949 112.267Z" fill="white" />
                    <path d="M57.3346 94.37L56.2977 95.3993C56.2166 95.4798 56.2153 95.6126 56.2948 95.6944L58.2177 97.6728C58.2972 97.7546 58.4286 97.7557 58.5097 97.6752L59.5466 96.6459C60.441 95.758 60.4468 94.9047 59.7601 94.1981C59.0734 93.4866 58.229 93.4821 57.3346 94.37Z" fill="white" />
                    <path d="M69.3914 84.4911L71.9029 85.6588C72.0404 85.7225 72.072 85.901 71.9685 86.0037L70.5697 87.3923C70.4637 87.4974 70.2853 87.4598 70.2272 87.3222L69.1145 84.7659C69.0347 84.5865 69.2153 84.4072 69.3914 84.4911Z" fill="white" />
                    <path d="M95.2994 61.2699C96.7412 62.7534 96.6252 64.4797 95.2977 65.7974L94.3512 66.737C94.1403 66.9463 93.7987 66.9388 93.5886 66.7226L89.8741 62.9008C89.664 62.6846 89.6627 62.3393 89.8735 62.13L90.8201 61.1904C92.1476 59.8726 93.8551 59.7839 95.2994 61.2699Z" fill="white" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M86.7409 29.6254C83.406 29.6046 80.2148 30.9065 77.8524 33.2515L25.216 85.5017C20.2316 90.4496 20.2174 98.6035 25.1844 103.714L52.78 132.107C57.747 137.218 65.8142 137.35 70.7987 132.402L123.35 80.2359C125.763 77.8409 127.112 74.5551 127.098 71.1122L126.976 42.8054C126.945 35.6729 121.186 29.8403 114.13 29.7962L86.7409 29.6254ZM106.161 50.486C108.521 52.9143 112.354 52.977 114.723 50.6259C117.091 48.2749 117.098 44.4004 114.738 41.9721C112.378 39.5438 108.544 39.4811 106.176 41.8322C103.808 44.1832 103.801 48.0577 106.161 50.486ZM52.913 103.837C52.7301 103.821 52.5787 103.67 52.5662 103.48C52.4968 102.581 52.1274 101.694 51.4583 100.986C49.9955 99.4413 47.6004 99.306 46.0462 100.656L39.9471 106.701C39.5257 107.119 39.5266 107.809 39.9466 108.242L47.9807 116.508C48.4032 116.943 49.0861 116.956 49.505 116.54L55.2631 110.824C55.2631 110.824 55.3289 110.754 55.3678 110.72L55.3776 110.71C56.9731 109.201 57.0064 106.65 55.446 105.044C54.7403 104.318 53.835 103.914 52.913 103.837ZM61.401 99.6567L61.2241 99.8323C60.971 100.084 60.967 100.497 61.2152 100.752L62.6899 102.269C62.9381 102.525 62.9341 102.938 62.681 103.189L60.3516 105.501C60.0985 105.753 59.6897 105.749 59.4415 105.494L50.8996 96.705C50.6514 96.4496 50.6554 96.0365 50.9085 95.7852L55.0856 91.6387C57.7688 88.9752 60.85 88.6981 63.0355 90.9467C64.2354 92.1814 64.6616 93.6581 64.3524 95.1828C64.2809 95.5314 64.5137 95.8654 64.8562 95.9346L67.9311 96.5502C68.4363 96.6527 68.6249 97.2839 68.2563 97.6497L65.8975 99.9913C65.7451 100.143 65.5279 100.207 65.319 100.166L61.977 99.4843C61.7706 99.4408 61.5534 99.5054 61.401 99.6567ZM72.1243 90.4861L74.999 87.6325C75.2132 87.4198 75.5386 87.3653 75.8137 87.4925L77.1744 88.1284C77.4518 88.2581 77.7772 88.2036 77.9915 87.9909L80.1318 85.8662C80.505 85.4958 80.3715 84.8523 79.8793 84.6477L68.1358 79.7825C67.6606 79.5856 67.1231 79.6896 66.7619 80.0481L64.8214 81.9743C64.4603 82.3328 64.3478 82.8741 64.5341 83.3578L69.1368 95.3114C69.3304 95.8123 69.9647 95.9588 70.3379 95.5883L72.4252 93.5163C72.6395 93.3036 72.6993 92.9758 72.5759 92.6931L71.9736 91.3093C71.8503 91.0266 71.9101 90.6988 72.1243 90.4861ZM81.9478 65.7058L90.6666 74.6765C90.867 74.8827 90.8722 75.2046 90.6783 75.3971L88.6545 77.4061C88.5517 77.5081 88.4029 77.5582 88.2554 77.5387L82.1054 76.7808C81.6367 76.7237 81.3799 77.2862 81.7179 77.634L84.6491 80.6499C84.8495 80.8561 84.8547 81.178 84.6607 81.3705L82.3542 83.6601C82.1603 83.8527 81.8419 83.8417 81.6415 83.6355L72.9227 74.6647C72.7223 74.4585 72.7171 74.1366 72.9111 73.9441L74.9348 71.9352C75.0376 71.8331 75.1864 71.783 75.3339 71.8025L81.484 72.5604C81.9526 72.6175 82.2095 72.055 81.8715 71.7072L78.9402 68.6913C78.7398 68.4851 78.7346 68.1632 78.9286 67.9707L81.2351 65.6811C81.4291 65.4885 81.7474 65.4996 81.9478 65.7058ZM84.2229 62.7152C84.0121 62.9245 84.0134 63.2698 84.2235 63.486L92.9035 72.4168C93.1136 72.633 93.4552 72.6406 93.6661 72.4312L97.9146 68.2139C101.054 65.0978 101.418 61.1084 98.4911 58.0966C95.564 55.0849 91.6106 55.3818 88.4715 58.4978L84.2229 62.7152Z" fill="white" />
                  </svg>
                </div>
                <!-- /.portfolio-nav__icon -->

                <div class="portfolio-nav__title">Брендинг</div>
                <a class="stretched-link" href=""></a>
              </div>
              <!-- /.portfolio-nav__item -->

              <div class="portfolio-nav__item">
                <div class="portfolio-nav__image">
                  <div class="portfolio-nav__background"></div>
                  <svg class="portfolio-nav__icon svg" viewBox="0 0 160 160" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M50.2182 40C57.0909 40 62.4364 45.4369 62.4364 52.4272C62.4364 59.4175 57.0909 64.8544 50.2182 64.8544C43.3455 64.8544 38 59.4175 38 52.4272C38 45.4369 43.3455 40 50.2182 40ZM102.909 48.5437H70.0727C68.5455 48.5437 67.7818 47.767 67.7818 46.2136C67.7818 44.6602 68.5455 43.8835 70.0727 43.8835H105.2C105.964 44.6602 106.727 45.4369 106.727 46.2136V61.7476H110.545C111.309 61.7476 111.309 61.7476 112.073 62.5243C112.073 63.301 112.073 63.301 112.073 64.0777L109.018 69.5146L105.964 74.9515C105.964 75.7282 105.2 75.7282 104.436 75.7282C103.673 75.7282 103.673 75.7282 102.909 74.9515L99.8546 69.5146L96.8 64.0777C96.8 63.301 96.8 63.301 96.8 62.5243C96.8 61.7476 97.5636 61.7476 98.3273 61.7476H101.382V48.5437H102.909ZM56.3273 110.68H75.4182C77.7091 110.68 79.2364 112.233 79.2364 114.563C79.2364 116.893 77.7091 118.447 75.4182 118.447H50.2182C48.6909 117.67 47.9273 116.893 47.9273 115.34V92.0388H42.5818C41.8182 92.0388 41.0545 91.2621 40.2909 90.4854C39.5273 89.7087 39.5273 88.932 40.2909 88.1553L44.8727 80.3884L49.4545 72.6214C50.2182 71.8447 50.9818 71.068 51.7455 71.068C52.5091 71.068 53.2727 71.8447 54.0364 72.6214L58.6182 80.3884L63.2 88.1553C63.9636 88.932 63.9636 89.7087 63.2 90.4854C62.4364 91.2621 61.6727 92.0388 60.9091 92.0388H56.3273V110.68ZM102.909 81.1651C113.6 81.1651 122 89.7087 122 100.583C122 111.456 113.6 120 102.909 120C92.2182 120 83.8182 111.456 83.8182 100.583C83.8182 89.7087 92.2182 81.1651 102.909 81.1651ZM102.909 88.932C109.782 88.932 115.127 94.3689 115.127 101.359C115.127 108.35 109.782 113.786 102.909 113.786C96.0364 113.786 90.6909 108.35 90.6909 101.359C90.6909 94.3689 96.0364 88.932 102.909 88.932Z" fill="#ffffff" />
                  </svg>
                </div>
                <!-- /.portfolio-nav__icon -->

                <div class="portfolio-nav__title">Web-дизайн</div>
                <a class="stretched-link" href=""></a>
              </div>
              <!-- /.portfolio-nav__item -->

              <div class="portfolio-nav__item">
                <div class="portfolio-nav__image">
                  <div class="portfolio-nav__background"></div>
                  <svg class="portfolio-nav__icon svg" viewBox="0 0 160 160" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M134.042 95.5564V109.649H126.177C126.201 109.357 126.212 109.062 126.212 108.765C126.212 102.711 121.305 97.8039 115.252 97.8039C109.198 97.8039 104.291 102.711 104.291 108.765C104.291 109.601 104.384 110.415 104.562 111.198L104.292 111.218L55.2011 111.652C54.052 114.547 51.2258 116.594 47.9216 116.594C44.6664 116.594 41.8752 114.607 40.6943 111.78L27.5658 111.897L26 66.5885L54.1849 46.2327C64.9086 39.6406 69.3009 43.8301 76.8895 52.496L61.2312 63.3558L63.5799 66.5885H94.8965C105.491 70.959 116.035 86.9443 116.035 86.9443C117.169 87.1399 118.239 87.2961 119.257 87.4448C125.194 88.3116 129.363 88.9203 134.042 95.5564ZM87.0671 107.982H55.712C55.3192 104.026 51.9812 100.936 47.9216 100.936C43.8619 100.936 40.5239 104.026 40.1311 107.982H30.6972L29.1314 68.8361L52.6188 52.3948C52.6188 52.3948 51.8359 56.366 53.4017 58.7469L87.0671 107.982ZM115.252 116.594C119.576 116.594 123.081 113.089 123.081 108.765C123.081 104.441 119.576 100.936 115.252 100.936C110.928 100.936 107.423 104.441 107.423 108.765C107.423 113.089 110.928 116.594 115.252 116.594Z" fill="#ffffff" />
                  </svg>
                </div>
                <!-- /.portfolio-nav__icon -->

                <div class="portfolio-nav__title">Авто</div>
                <a class="stretched-link" href=""></a>
              </div>
              <!-- /.portfolio-nav__item -->

              <div class="portfolio-nav__item">
                <div class="portfolio-nav__image">
                  <div class="portfolio-nav__background"></div>
                  <svg class="portfolio-nav__icon svg" viewBox="0 0 158 160" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M51.7414 95.1205L51.7427 95.1128C51.875 94.3706 51.8838 93.5495 51.5905 92.7082C51.3035 91.8852 50.8063 91.2711 50.316 90.8025C46.838 87.4233 43.3772 84.0331 39.9167 80.6433C38.1636 78.9259 36.4105 77.2087 34.6554 75.493C33.5954 74.4568 32.9715 73.4227 32.6886 72.4106C32.4108 71.4169 32.4172 70.2893 32.8616 68.9655C33.3076 67.6367 33.9811 66.7295 34.8024 66.0973C35.6394 65.453 36.7638 64.9927 38.2476 64.784L38.2496 64.7837L38.2567 64.7827C40.9496 64.4018 43.659 64.0186 46.3708 63.6031C48.2034 63.3444 50.0143 63.0786 51.8172 62.8139C54.5083 62.4189 57.1816 62.0265 59.883 61.6643L59.9005 61.662L59.9179 61.6594C60.6173 61.5556 61.374 61.3263 62.0693 60.8064C62.7557 60.2931 63.1801 59.647 63.4729 59.0604L63.4782 59.0496L63.4835 59.0388C66.7236 52.3867 69.9955 45.7345 73.2992 39.0823L73.3041 39.0724C74.7486 36.131 77.7207 34.8813 80.6297 35.7956C82.3161 36.3471 83.4999 37.466 84.4054 39.2526C85.7298 41.9067 87.0566 44.5554 88.3835 47.2041C90.3753 51.1804 92.3673 55.1567 94.3512 59.1517L94.3534 59.1559C94.6239 59.698 95.0311 60.3353 95.7095 60.8425C96.3968 61.3562 97.1516 61.5806 97.8641 61.6665C105.092 62.6513 112.353 63.6998 119.586 64.7805C121.009 64.9974 122.087 65.4714 122.89 66.1261C123.684 66.7729 124.335 67.6965 124.761 69.0215C125.169 70.3229 125.165 71.4245 124.892 72.3956C124.614 73.3844 124.013 74.3938 122.992 75.4169C117.746 80.6411 112.539 85.8273 107.268 91.0126L107.26 91.0206L107.252 91.0286C106.738 91.5441 106.251 92.1911 105.982 93.0296C105.71 93.8739 105.733 94.6824 105.861 95.3981C106.479 98.9255 107.082 102.462 107.686 106.005L107.686 106.008C108.29 109.55 108.895 113.099 109.516 116.641L109.517 116.648C109.778 118.109 109.693 119.307 109.349 120.287C109.013 121.247 108.377 122.148 107.279 122.96L107.271 122.967L107.262 122.973C106.138 123.821 105.064 124.192 104.031 124.249C102.981 124.307 101.806 124.051 100.494 123.38C93.8526 119.973 87.2472 116.569 80.6754 113.133L80.6563 113.123L80.637 113.114C80.0565 112.823 79.347 112.58 78.5147 112.603C77.6963 112.625 77.0231 112.898 76.5114 113.167L76.5021 113.172C69.9509 116.645 63.412 120.112 56.8432 123.514L56.8422 123.514C53.5424 125.225 49.7917 123.846 48.439 120.625L48.4196 120.579L48.3984 120.533C48.171 120.047 48.0756 119.607 47.9348 118.957C47.8929 118.764 47.8471 118.553 47.7926 118.316C47.9943 117.097 48.1989 115.883 48.402 114.679C48.6764 113.051 48.9478 111.441 49.2047 109.862C50.0315 104.924 50.855 100.005 51.7414 95.1205Z" stroke="white" stroke-width="5" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M81.393 33.4149C83.3025 34.0361 84.7284 35.1805 85.8065 36.7273L48.5068 92.5304C45.0484 89.1698 41.6037 85.7954 38.1636 82.4256L38.1628 82.4248L38.1611 82.4231C36.4092 80.707 34.6585 78.9921 32.9078 77.2807C30.3008 74.7323 29.3152 71.6741 30.4915 68.1699C31.6679 64.6657 34.275 62.8181 37.8994 62.3084L37.9004 62.3082L37.9005 62.3082C40.6026 61.926 43.3047 61.5438 46.0068 61.1297C47.8126 60.8749 49.6185 60.6098 51.4243 60.3448C54.1332 59.9472 56.842 59.5496 59.5508 59.1865C60.4093 59.0591 60.8544 58.7086 61.2359 57.9441C64.4788 51.2862 67.7536 44.6283 71.0601 37.9703C73.0313 33.9565 77.2599 32.1088 81.393 33.4149ZM102.981 59.8489L59.4464 124.98C64.173 122.524 68.8843 120.037 73.5922 117.543L111.359 61.0419C108.566 60.6371 105.772 60.2388 102.981 59.8489ZM119.786 62.2825L83.0751 117.204C88.4808 120.017 93.9079 122.812 99.3564 125.606C102.599 127.263 105.81 127.199 108.767 124.969C111.692 122.803 112.614 119.777 111.978 116.209C111.358 112.673 110.754 109.129 110.15 105.585C109.546 102.041 108.942 98.4969 108.322 94.9609C108.163 94.0689 108.354 93.4636 109.022 92.7947C114.299 87.6021 119.513 82.4096 124.759 77.1852C127.271 74.6685 128.225 71.7059 127.144 68.2655C126.031 64.7932 123.519 62.8499 119.959 62.3084C119.901 62.2998 119.843 62.2912 119.786 62.2825Z" fill="white" />
                  </svg>
                </div>
                <!-- /.portfolio-nav__icon -->

                <div class="portfolio-nav__title">Логотип</div>
                <a class="stretched-link" href=""></a>
              </div>
              <!-- /.portfolio-nav__item -->

              <div class="portfolio-nav__item">
                <div class="portfolio-nav__image">
                  <div class="portfolio-nav__background"></div>
                  <svg class="portfolio-nav__icon svg" viewBox="0 0 160 160" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M112.389 59.656C113.69 57.9294 113.353 55.4642 111.637 54.1497C111.45 54.0066 111.254 53.883 111.053 53.7787L119.329 42.7959C119.993 41.9138 121.243 41.7431 122.12 42.4146L132.62 50.4546C133.496 51.1261 133.669 52.3857 133.004 53.2678L103.185 92.8388L105.314 111.589C106.052 118.091 100.971 123.787 94.4329 123.787H52.2746L52.2356 123.787H33.0011C28.1972 123.787 24.4766 119.583 25.0604 114.815L32.4962 54.0891C32.9789 50.1475 36.2755 47.168 40.2238 47.0642C41.8671 46.0708 43.7974 45.4957 45.8748 45.4957H88.0331C93.6026 45.4957 98.285 49.6799 98.9138 55.2189L100.361 67.9666L106.414 59.9345C106.568 60.1025 106.738 60.2592 106.925 60.4024C108.642 61.7168 111.088 61.3826 112.389 59.656ZM96.2562 73.4141L94.2506 55.7493C93.8913 52.5841 91.2157 50.1931 88.0331 50.1931H45.8748C45.733 50.1931 45.5923 50.1978 45.4529 50.2071C41.9248 50.4423 39.2546 53.59 39.6602 57.1635L41.8007 76.019C38.5431 78.8884 36.4879 83.0908 36.4879 87.7731C36.4879 93.7251 39.8089 98.9015 44.699 101.55L46.0593 113.533C46.4186 116.699 49.0939 119.09 52.2761 119.09H78.9737L78.9737 119.09H94.4329C98.1687 119.09 101.072 115.835 100.65 112.119L98.5353 93.4891C98.2447 93.1428 97.9121 92.8229 97.5388 92.5371C96.3448 91.6227 94.93 91.2069 93.5411 91.2561C93.1991 89.9409 92.4335 88.7265 91.2753 87.8396C89.7874 86.7002 87.9567 86.335 86.2604 86.6789L96.2562 73.4141ZM44.699 101.55C46.9138 102.75 49.4504 103.431 52.1462 103.431C60.7941 103.431 67.8045 96.4209 67.8045 87.7731C67.8045 79.1252 60.7941 72.1148 52.1462 72.1148C48.1807 72.1148 44.5595 73.5889 41.8007 76.019L44.699 101.55ZM111.053 53.7787L106.414 59.9345C105.155 58.5598 105.013 56.4347 106.173 54.8961C107.332 53.3575 109.401 52.9246 111.053 53.7787ZM126.238 38.7811L124.234 41.4399L132.937 48.1038L134.94 45.445C136.436 43.4602 136.049 40.6263 134.076 39.1153L132.519 37.9231C130.546 36.4121 127.734 36.7963 126.238 38.7811ZM82.2457 104.058C81.9438 104.961 82.9434 105.742 83.7349 105.222L90.5199 100.766C91.0931 100.39 91.126 99.5552 90.5843 99.132L86.3866 95.8524C85.8449 95.4291 85.0516 95.6694 84.833 96.323L82.2457 104.058Z" fill="#ffffff" />
                  </svg>
                </div>
                <!-- /.portfolio-nav__icon -->

                <div class="portfolio-nav__title">Упаковка</div>
                <a class="stretched-link" href=""></a>
              </div>
              <!-- /.portfolio-nav__item -->

              <div class="portfolio-nav__item">
                <div class="portfolio-nav__image">
                  <div class="portfolio-nav__background"></div>
                  <svg class="portfolio-nav__icon svg" viewBox="0 0 158 160" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M51.7414 95.1205L51.7427 95.1128C51.875 94.3706 51.8838 93.5495 51.5905 92.7082C51.3035 91.8852 50.8063 91.2711 50.316 90.8025C46.838 87.4233 43.3772 84.0331 39.9167 80.6433C38.1636 78.9259 36.4105 77.2087 34.6554 75.493C33.5954 74.4568 32.9715 73.4227 32.6886 72.4106C32.4108 71.4169 32.4172 70.2893 32.8616 68.9655C33.3076 67.6367 33.9811 66.7295 34.8024 66.0973C35.6394 65.453 36.7638 64.9927 38.2476 64.784L38.2496 64.7837L38.2567 64.7827C40.9496 64.4018 43.659 64.0186 46.3708 63.6031C48.2034 63.3444 50.0143 63.0786 51.8172 62.8139C54.5083 62.4189 57.1816 62.0265 59.883 61.6643L59.9005 61.662L59.9179 61.6594C60.6173 61.5556 61.374 61.3263 62.0693 60.8064C62.7557 60.2931 63.1801 59.647 63.4729 59.0604L63.4782 59.0496L63.4835 59.0388C66.7236 52.3867 69.9955 45.7345 73.2992 39.0823L73.3041 39.0724C74.7486 36.131 77.7207 34.8813 80.6297 35.7956C82.3161 36.3471 83.4999 37.466 84.4054 39.2526C85.7298 41.9067 87.0566 44.5554 88.3835 47.2041C90.3753 51.1804 92.3673 55.1567 94.3512 59.1517L94.3534 59.1559C94.6239 59.698 95.0311 60.3353 95.7095 60.8425C96.3968 61.3562 97.1516 61.5806 97.8641 61.6665C105.092 62.6513 112.353 63.6998 119.586 64.7805C121.009 64.9974 122.087 65.4714 122.89 66.1261C123.684 66.7729 124.335 67.6965 124.761 69.0215C125.169 70.3229 125.165 71.4245 124.892 72.3956C124.614 73.3844 124.013 74.3938 122.992 75.4169C117.746 80.6411 112.539 85.8273 107.268 91.0126L107.26 91.0206L107.252 91.0286C106.738 91.5441 106.251 92.1911 105.982 93.0296C105.71 93.8739 105.733 94.6824 105.861 95.3981C106.479 98.9255 107.082 102.462 107.686 106.005L107.686 106.008C108.29 109.55 108.895 113.099 109.516 116.641L109.517 116.648C109.778 118.109 109.693 119.307 109.349 120.287C109.013 121.247 108.377 122.148 107.279 122.96L107.271 122.967L107.262 122.973C106.138 123.821 105.064 124.192 104.031 124.249C102.981 124.307 101.806 124.051 100.494 123.38C93.8526 119.973 87.2472 116.569 80.6754 113.133L80.6563 113.123L80.637 113.114C80.0565 112.823 79.347 112.58 78.5147 112.603C77.6963 112.625 77.0231 112.898 76.5114 113.167L76.5021 113.172C69.9509 116.645 63.412 120.112 56.8432 123.514L56.8422 123.514C53.5424 125.225 49.7917 123.846 48.439 120.625L48.4196 120.579L48.3984 120.533C48.171 120.047 48.0756 119.607 47.9348 118.957C47.8929 118.764 47.8471 118.553 47.7926 118.316C47.9943 117.097 48.1989 115.883 48.402 114.679C48.6764 113.051 48.9478 111.441 49.2047 109.862C50.0315 104.924 50.855 100.005 51.7414 95.1205Z" stroke="white" stroke-width="5" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M81.393 33.4149C83.3025 34.0361 84.7284 35.1805 85.8065 36.7273L48.5068 92.5304C45.0484 89.1698 41.6037 85.7954 38.1636 82.4256L38.1628 82.4248L38.1611 82.4231C36.4092 80.707 34.6585 78.9921 32.9078 77.2807C30.3008 74.7323 29.3152 71.6741 30.4915 68.1699C31.6679 64.6657 34.275 62.8181 37.8994 62.3084L37.9004 62.3082L37.9005 62.3082C40.6026 61.926 43.3047 61.5438 46.0068 61.1297C47.8126 60.8749 49.6185 60.6098 51.4243 60.3448C54.1332 59.9472 56.842 59.5496 59.5508 59.1865C60.4093 59.0591 60.8544 58.7086 61.2359 57.9441C64.4788 51.2862 67.7536 44.6283 71.0601 37.9703C73.0313 33.9565 77.2599 32.1088 81.393 33.4149ZM102.981 59.8489L59.4464 124.98C64.173 122.524 68.8843 120.037 73.5922 117.543L111.359 61.0419C108.566 60.6371 105.772 60.2388 102.981 59.8489ZM119.786 62.2825L83.0751 117.204C88.4808 120.017 93.9079 122.812 99.3564 125.606C102.599 127.263 105.81 127.199 108.767 124.969C111.692 122.803 112.614 119.777 111.978 116.209C111.358 112.673 110.754 109.129 110.15 105.585C109.546 102.041 108.942 98.4969 108.322 94.9609C108.163 94.0689 108.354 93.4636 109.022 92.7947C114.299 87.6021 119.513 82.4096 124.759 77.1852C127.271 74.6685 128.225 71.7059 127.144 68.2655C126.031 64.7932 123.519 62.8499 119.959 62.3084C119.901 62.2998 119.843 62.2912 119.786 62.2825Z" fill="white" />
                  </svg>
                </div>
                <!-- /.portfolio-nav__icon -->

                <div class="portfolio-nav__title">Иллюстрации / motion</div>
                <a class="stretched-link" href=""></a>
              </div>
              <!-- /.portfolio-nav__item -->
            </div>
            <!-- /.portfolio-nav__wrapper -->
          </div>
          <!-- /.container -->
        </div>
        <!-- /.portfolio-header__nav -->
      </div>
      <!-- /.portfolio__header portfolio-header -->

      <div class="single-portfolio__body portfolio-body">
        <div class="container">
          <div class="portfolio-body__portfolio">
            <div class="row">
              <div class="col-6 col-md-4">
                <div data-micromodal-trigger="modal-portfolio" class="portfolio-body__item portfolio-item">
                  <div class="portfolio-item__picture lazy">
                    <img data-src="img/single/portfolio/1.jpg" alt="" class="portfolio-item__image image image--cover lazy__item">
                    <img src="img/misc/preloader.svg" alt="" class="preloader">
                  </div>
                  <!-- /.portfolio-item__picture -->

                  <div class="portfolio-item__content">
                    <h3 class="portfolio-item__title">Мобильный Кванториум</h3>
                    <div class="portfolio-item__wrapper">
                      <div class="portfolio-item__info">
                        Срок исполнения:
                        <span>3 дня</span>
                      </div>
                      <!-- /.portfolio-item__info -->

                      <img class="portfolio-item__dots" src="img/single/portfolio/dots.svg" alt="">

                      <div class="portfolio-item__hidden">
                        <div class="portfolio-item__category">Брендинг</div>

                        <p class="portfolio-item__description">
                          Дизайн автомобиля разработан для компании Кристанваль. Работа учитывает все тонкости дальнейшей оклейки и соответсвует требования и ожиданиям клиента
                        </p>

                        <ul class="portfolio-item__list list list--info">
                          <li class="list__item">Cрок эксплуатации: <span>до 3 лет</span></li>
                          <li class="list__item">Срок изготовления: <span>1 рабочий день</span></li>
                          <li class="list__item">Гарантия: <span>6 месяцев</span></li>
                        </ul>

                        <div class="portfolio-item__gallery">
                          <picture class="modal__picture lazy">
                            <a href="img/section/portfolio/modal/2.jpg">
                              <img data-src="img/section/portfolio/modal/2.jpg" alt="" class="modal__image image image--cover lazy__item">
                              <img src="img/misc/preloader.svg" alt="" class="preloader">
                            </a>
                          </picture>
                          <!-- /.modal__picture -->

                          <picture class="modal__picture lazy">
                            <a href="img/section/portfolio/modal/1.jpg">
                              <img data-src="img/section/portfolio/modal/1.jpg" alt="" class="modal__image image image--cover lazy__item">
                              <img src="img/misc/preloader.svg" alt="" class="preloader">
                            </a>
                          </picture>
                          <!-- /.modal__picture -->

                          <picture class="modal__picture lazy">
                            <a href="img/section/portfolio/modal/3.jpg">
                              <img data-src="img/section/portfolio/modal/3.jpg" alt="" class="modal__image image image--cover lazy__item">
                              <img src="img/misc/preloader.svg" alt="" class="preloader">
                            </a>
                          </picture>
                          <!-- /.modal__picture -->
                        </div>
                        <!-- /.portfolio-item__gallery -->
                      </div>
                      <!-- /.portfolio-item__hidden -->
                    </div>
                    <!-- /.portfolio-item__wrapper -->
                  </div>
                  <!-- /.portfolio-item__content -->
                </div>
                <!-- /.portfolio-body__item -->
              </div>
              <!-- /.col-4 -->

              <div class="col-6 col-md-4">
                <div data-micromodal-trigger="modal-portfolio" class="portfolio-body__item portfolio-item">
                  <div class="portfolio-item__picture lazy">
                    <img data-src="img/single/portfolio/2.jpg" alt="" class="portfolio-item__image image image--cover lazy__item">
                    <img src="img/misc/preloader.svg" alt="" class="preloader">
                  </div>
                  <!-- /.portfolio-item__picture -->

                  <div class="portfolio-item__content">
                    <h3 class="portfolio-item__title">Брендирование VLS Log</h3>
                    <div class="portfolio-item__wrapper">
                      <div class="portfolio-item__info">
                        Стоимость работы:
                        <span>14 000р</span>
                      </div>
                      <!-- /.portfolio-item__info -->

                      <img class="portfolio-item__dots" src="img/single/portfolio/dots.svg" alt="">

                      <div class="portfolio-item__hidden">
                        <div class="portfolio-item__category">Брендинг</div>

                        <p class="portfolio-item__description">
                          Дизайн автомобиля разработан для компании Кристанваль. Работа учитывает все тонкости дальнейшей оклейки и соответсвует требования и ожиданиям клиента
                        </p>

                        <ul class="portfolio-item__list list list--info">
                          <li class="list__item">Cрок эксплуатации: <span>до 3 лет</span></li>
                          <li class="list__item">Срок изготовления: <span>1 рабочий день</span></li>
                          <li class="list__item">Гарантия: <span>6 месяцев</span></li>
                        </ul>

                        <div class="portfolio-item__gallery">
                          <picture class="modal__picture lazy">
                            <a href="img/section/portfolio/modal/1.jpg">
                              <img data-src="img/section/portfolio/modal/1.jpg" alt="" class="modal__image image image--cover lazy__item">
                              <img src="img/misc/preloader.svg" alt="" class="preloader">
                            </a>
                          </picture>
                          <!-- /.modal__picture -->

                          <picture class="modal__picture lazy">
                            <a href="img/section/portfolio/modal/2.jpg">
                              <img data-src="img/section/portfolio/modal/2.jpg" alt="" class="modal__image image image--cover lazy__item">
                              <img src="img/misc/preloader.svg" alt="" class="preloader">
                            </a>
                          </picture>
                          <!-- /.modal__picture -->

                          <picture class="modal__picture lazy">
                            <a href="img/section/portfolio/modal/3.jpg">
                              <img data-src="img/section/portfolio/modal/3.jpg" alt="" class="modal__image image image--cover lazy__item">
                              <img src="img/misc/preloader.svg" alt="" class="preloader">
                            </a>
                          </picture>
                          <!-- /.modal__picture -->

                          <picture class="modal__picture lazy">
                            <a href="img/section/portfolio/modal/4.jpg">
                              <img data-src="img/section/portfolio/modal/4.jpg" alt="" class="modal__image image image--cover lazy__item">
                              <img src="img/misc/preloader.svg" alt="" class="preloader">
                            </a>
                          </picture>
                          <!-- /.modal__picture -->
                        </div>
                        <!-- /.portfolio-item__gallery -->
                      </div>
                      <!-- /.portfolio-item__hidden -->
                    </div>
                    <!-- /.portfolio-item__wrapper -->
                  </div>
                  <!-- /.portfolio-item__content -->
                </div>
                <!-- /.portfolio-body__item -->
              </div>
              <!-- /.col-4 -->

              <div class="col-6 col-md-4">
                <div data-micromodal-trigger="modal-portfolio" class="portfolio-body__item portfolio-item">
                  <div class="portfolio-item__picture lazy">
                    <img data-src="img/single/portfolio/3.jpg" alt="" class="portfolio-item__image image image--cover lazy__item">
                    <img src="img/misc/preloader.svg" alt="" class="preloader">
                  </div>
                  <!-- /.portfolio-item__picture -->

                  <div class="portfolio-item__content">
                    <h3 class="portfolio-item__title">Оклейка «Авто ПЭК»</h3>
                    <div class="portfolio-item__wrapper">
                      <div class="portfolio-item__info">
                        Срок исполнения:
                        <span>15 дней</span>
                      </div>
                      <!-- /.portfolio-item__info -->

                      <img class="portfolio-item__dots" src="img/single/portfolio/dots.svg" alt="">
                    </div>
                    <!-- /.portfolio-item__wrapper -->
                  </div>
                  <!-- /.portfolio-item__content -->
                </div>
                <!-- /.portfolio-body__item -->
              </div>
              <!-- /.col-4 -->

              <div class="col-6 col-md-4">
                <div data-micromodal-trigger="modal-portfolio" class="portfolio-body__item portfolio-item">
                  <div class="portfolio-item__picture lazy">
                    <img data-src="img/single/portfolio/1.jpg" alt="" class="portfolio-item__image image image--cover lazy__item">
                    <img src="img/misc/preloader.svg" alt="" class="preloader">
                  </div>
                  <!-- /.portfolio-item__picture -->

                  <div class="portfolio-item__content">
                    <h3 class="portfolio-item__title">Мобильный Кванториум</h3>
                    <div class="portfolio-item__wrapper">
                      <div class="portfolio-item__info">
                        Срок исполнения:
                        <span>3 дня</span>
                      </div>
                      <!-- /.portfolio-item__info -->

                      <img class="portfolio-item__dots" src="img/single/portfolio/dots.svg" alt="">
                    </div>
                    <!-- /.portfolio-item__wrapper -->
                  </div>
                  <!-- /.portfolio-item__content -->
                </div>
                <!-- /.portfolio-body__item -->
              </div>
              <!-- /.col-4 -->

              <div class="col-6 col-md-4">
                <div data-micromodal-trigger="modal-portfolio" class="portfolio-body__item portfolio-item">
                  <div class="portfolio-item__picture lazy">
                    <img data-src="img/single/portfolio/2.jpg" alt="" class="portfolio-item__image image image--cover lazy__item">
                    <img src="img/misc/preloader.svg" alt="" class="preloader">
                  </div>
                  <!-- /.portfolio-item__picture -->

                  <div class="portfolio-item__content">
                    <h3 class="portfolio-item__title">Брендирование VLS Log</h3>
                    <div class="portfolio-item__wrapper">
                      <div class="portfolio-item__info">
                        Стоимость работы:
                        <span>14 000р</span>
                      </div>
                      <!-- /.portfolio-item__info -->

                      <img class="portfolio-item__dots" src="img/single/portfolio/dots.svg" alt="">
                    </div>
                    <!-- /.portfolio-item__wrapper -->
                  </div>
                  <!-- /.portfolio-item__content -->
                </div>
                <!-- /.portfolio-body__item -->
              </div>
              <!-- /.col-4 -->

              <div class="col-6 col-md-4">
                <div data-micromodal-trigger="modal-portfolio" class="portfolio-body__item portfolio-item">
                  <div class="portfolio-item__picture lazy">
                    <img data-src="img/single/portfolio/3.jpg" alt="" class="portfolio-item__image image image--cover lazy__item">
                    <img src="img/misc/preloader.svg" alt="" class="preloader">
                  </div>
                  <!-- /.portfolio-item__picture -->

                  <div class="portfolio-item__content">
                    <h3 class="portfolio-item__title">Оклейка «Авто ПЭК»</h3>
                    <div class="portfolio-item__wrapper">
                      <div class="portfolio-item__info">
                        Срок исполнения:
                        <span>15 дней</span>
                      </div>
                      <!-- /.portfolio-item__info -->

                      <img class="portfolio-item__dots" src="img/single/portfolio/dots.svg" alt="">
                    </div>
                    <!-- /.portfolio-item__wrapper -->
                  </div>
                  <!-- /.portfolio-item__content -->
                </div>
                <!-- /.portfolio-body__item -->
              </div>
              <!-- /.col-4 -->

              <div class="col-6 col-md-4">
                <div data-micromodal-trigger="modal-portfolio" class="portfolio-body__item portfolio-item">
                  <div class="portfolio-item__picture lazy">
                    <img data-src="img/single/portfolio/1.jpg" alt="" class="portfolio-item__image image image--cover lazy__item">
                    <img src="img/misc/preloader.svg" alt="" class="preloader">
                  </div>
                  <!-- /.portfolio-item__picture -->

                  <div class="portfolio-item__content">
                    <h3 class="portfolio-item__title">Мобильный Кванториум</h3>
                    <div class="portfolio-item__wrapper">
                      <div class="portfolio-item__info">
                        Срок исполнения:
                        <span>3 дня</span>
                      </div>
                      <!-- /.portfolio-item__info -->

                      <img class="portfolio-item__dots" src="img/single/portfolio/dots.svg" alt="">
                    </div>
                    <!-- /.portfolio-item__wrapper -->
                  </div>
                  <!-- /.portfolio-item__content -->
                </div>
                <!-- /.portfolio-body__item -->
              </div>
              <!-- /.col-4 -->

              <div class="col-6 col-md-4">
                <div data-micromodal-trigger="modal-portfolio" class="portfolio-body__item portfolio-item">
                  <div class="portfolio-item__picture lazy">
                    <img data-src="img/single/portfolio/2.jpg" alt="" class="portfolio-item__image image image--cover lazy__item">
                    <img src="img/misc/preloader.svg" alt="" class="preloader">
                  </div>
                  <!-- /.portfolio-item__picture -->

                  <div class="portfolio-item__content">
                    <h3 class="portfolio-item__title">Брендирование VLS Log</h3>
                    <div class="portfolio-item__wrapper">
                      <div class="portfolio-item__info">
                        Стоимость работы:
                        <span>14 000р</span>
                      </div>
                      <!-- /.portfolio-item__info -->

                      <img class="portfolio-item__dots" src="img/single/portfolio/dots.svg" alt="">
                    </div>
                    <!-- /.portfolio-item__wrapper -->
                  </div>
                  <!-- /.portfolio-item__content -->
                </div>
                <!-- /.portfolio-body__item -->
              </div>
              <!-- /.col-4 -->

              <div class="col-6 col-md-4">
                <div data-micromodal-trigger="modal-portfolio" class="portfolio-body__item portfolio-item">
                  <div class="portfolio-item__picture lazy">
                    <img data-src="img/single/portfolio/3.jpg" alt="" class="portfolio-item__image image image--cover lazy__item">
                    <img src="img/misc/preloader.svg" alt="" class="preloader">
                  </div>
                  <!-- /.portfolio-item__picture -->

                  <div class="portfolio-item__content">
                    <h3 class="portfolio-item__title">Оклейка «Авто ПЭК»</h3>
                    <div class="portfolio-item__wrapper">
                      <div class="portfolio-item__info">
                        Срок исполнения:
                        <span>15 дней</span>
                      </div>
                      <!-- /.portfolio-item__info -->

                      <img class="portfolio-item__dots" src="img/single/portfolio/dots.svg" alt="">
                    </div>
                    <!-- /.portfolio-item__wrapper -->
                  </div>
                  <!-- /.portfolio-item__content -->
                </div>
                <!-- /.portfolio-body__item -->
              </div>
              <!-- /.col-4 -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.portfolio-body__portfolio -->

          <div class="portfolio-body__action">
            <button data-loading="Загрузка" class="portfolio-body__button button button-primary button-loader button-loader--progress">
              Загрузка
              <img src="img/misc/preloader--white.svg" alt="" class="preloader preloader--button">
            </button>
          </div>
          <!-- /.portfolio-body__action -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.portfolio__body portfolio-body -->
    </div>
    <!-- /.single-portfolio -->

  </section>
  <?php include_once('layout/partials/modal/portfolio.php') ?>

  <?php include_once('layout/block/callback.php') ?>

</main>

<?php include_once('layout/partials/footer.php') ?>