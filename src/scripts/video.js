const motion = document.querySelectorAll('.motion[data-safari]');

if (motion && isSafari) {
  _.forEach(motion, (item) => {
    const laptop = item.getAttribute('data-safari');
    const mobile = item.getAttribute('data-safari-mobile');

    let source = "";

    if (mobile) source = isMobile ? mobile : laptop;
    else source = laptop;

    item.innerHTML = `<img class="motion__item" src="${source}"/>`;
  });
}