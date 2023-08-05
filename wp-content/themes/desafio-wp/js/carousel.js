function carousel(num){
  let slider = document.querySelector(".slider"+num);
  slider.parentElement = new Swiper('.swiper', {
    slidesPerView: 5,
    navigation: {
      nextEl: '#right-arrow',
      prevEl: '#left-arrow',
    },
    breakpoints: {
      // when window width is >= 320px
      1: {
        slidesPerView: 2,
        spaceBetween: 10
      },
      // when window width is >= 320px
      600: {
        slidesPerView: 2,
        spaceBetween: 30
      },
      // when window width is >= 320px
      880: {
        slidesPerView: 3,
        spaceBetween: 30
      },
      // when window width is >= 1040px
      1040: {
        slidesPerView: 4,
        spaceBetween: 20
      }
    }
  });
}

document.addEventListener("DOMContentLoaded", () => {
  carousel('1');
  carousel('2');
  carousel('3');
});