const mainSwiper = new Swiper(".bs-swiper", {
    loop: true,
    speed: 800,

    navigation: {
        nextEl: ".bs-swiper-button-next",
        prevEl: ".bs-swiper-button-prev",
        
    },
    pagination: {
        el: ".bs-pagination",
      },
});

const textSwiper = new Swiper(".bs-text-swiper", {
    loop: true,
    speed: 800,
    allowTouchMove: false,

    direction: "vertical",

    // 👉 ключевое
    reverseDirection: true,
});

const textSwiperMobile = new Swiper(".bs-text-swiper-mobile", {
    loop: true,
    speed: 800,
    allowTouchMove: false,
});

// 🔗 связываем все между собой
mainSwiper.controller.control = [textSwiper, textSwiperMobile];
textSwiper.controller.control = mainSwiper;
textSwiperMobile.controller.control = mainSwiper;