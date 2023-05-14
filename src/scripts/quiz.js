const quiz = document.getElementById('quiz');

if (quiz) {
  const startButton = quiz.querySelector('.quiz__action .button');

  const quizSlider = new Swiper('.slider-quiz', {
    simulateTouch: false,
    allowTouchMove: false,
    autoHeight: true,

    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },

    navigation: {
      nextEl: '.slider-quiz .swiper-control .button-primary',
      prevEl: '.slider-quiz .swiper-control .button-outline',
    },

    on: {
      slideChange(instance) {
        const control = instance.el.querySelector('.swiper-control');

        if (instance.isEnd) {
          ChangePicture('end');
        }

        else if (instance.realIndex > 0) {
          ChangePicture('start');
          control.classList.remove('hidden');
        }

        else {
          ChangePicture('begin');
          control.classList.add('hidden');
        }
      }
    }
  });

  function ChangePicture(state) {
    const picture = quiz.querySelectorAll('.quiz__background');
    if (state === 'begin' || state === 'end') {
      picture[0].classList.remove('hidden')
      picture[1].classList.add('hidden')
    }

    else {
      picture[0].classList.add('hidden')
      picture[1].classList.remove('hidden')
    }
  }

  startButton.addEventListener('click', () => {
    quizSlider.slideTo(1);
  });
}

