const clientsSwiper = new Swiper('.clients-swiper', {
  loop: true,
  spaceBetween: 20,
  centeredSlides: true,
  speed: 7000,
  autoplay: {
    delay: 10,
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
    },
    700: {
      slidesPerView: 3,
    },
    992: {
      slidesPerView: 4,
    },
  },
})

const testimonialsSwiper = new Swiper('.swiper', {
  slidesPerView: 3,
  spaceBetween: 20,
  navigation: {
    nextEl: '.testimonial-nav-next',
    prevEl: '.testimonial-nav-prev',
  },
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
    },
    700: {
      slidesPerView: 2,
    },
    992: {
      slidesPerView: 3,
    },
  },
})
