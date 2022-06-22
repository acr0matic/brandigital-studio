const service = document.getElementById('service');
if (service) {
  const wrapper = service.querySelector('.service__items');
  const cards = wrapper.querySelectorAll('.service-card');

  if (cards.length === 5) wrapper.classList.add('service__items--five')
  else if (cards.length === 6) wrapper.classList.add('service__items--six')
}