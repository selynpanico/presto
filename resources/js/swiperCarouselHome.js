

var swiper = new Swiper(".swiperAnnouncements", {
  slidesPerView: 1,
  spaceBetween: 3,

  centeredSlides: true,
  centeredSlidesBounds: true,
    // Responsive breakpoints
  breakpoints: {
    // // when window width is >= 320px
    // 320: {
    //   slidesPerView: 2,
    //   spaceBetween: 20
    // },
    // // when window width is >= 480px
    // 480: {
    //   slidesPerView: 3,
    //   spaceBetween: 30
    // },
    // when window width is >= 640px
    640: {
    slidesPerGroup: 3,
      slidesPerView: 3,
      spaceBetween: 40
    },
    769:{
      slidesPerGroup: 3,
      slidesPerView: 3,
      spaceBetween: 20,
    }
  },
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    },
    centeredSlides: true,
    spaceBetween: 30,
    grabCursor: true,
    // pagination: {
    //   el: ".swiper-pagination",
    //   clickable: true,
    // },
  });