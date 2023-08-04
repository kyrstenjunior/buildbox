function carousel(num){
  let slider = document.querySelector(".slider"+num);
  slider.parentElement = new Swiper('.swiper', {
    slidesPerView: 5,
    grabCursor: true,
    navigation: {
      nextEl: '#right-arrow',
      prevEl: '#left-arrow',
    },
    breakpoints: {
      // when window width is >= 320px
      // 320: {
      //   slidesPerView: 2,
      //   spaceBetween: 20
      // },
      // when window width is >= 480px
      // 480: {
      //   slidesPerView: 3,
      //   spaceBetween: 30
      // },
      // when window width is >= 640px
      // 640: {
      //   slidesPerView: 4,
      //   spaceBetween: 40
      // }
    }
  });
}

document.addEventListener("DOMContentLoaded", () => {
  carousel('1');
  carousel('2');
  carousel('3');
});