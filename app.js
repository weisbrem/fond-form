const totalSum = document.querySelector('.slider__total-sum');
const sum = totalSum.textContent.replace(/[^\d]/g, '');

/** Миллисекунд в сутках */
const MILLISEC_IN_DAY = 86_400_000;

setInterval(() => {
  Procent = Math.floor((Number(sum) / 100) * 0.1);

  result = Number(sum) + Procent;

  totalSum.textContent = `${result.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ' ')} ₽`;
}, MILLISEC_IN_DAY);

const swiper = new Swiper('.swiper', {
  slidesPerView: 1,
  centeredSlides: true,
  navigation: {
    nextEl: '.next',
    prevEl: '.prev',
  },
});
