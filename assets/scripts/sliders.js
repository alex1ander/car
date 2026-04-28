const swiper = new Swiper(".mySwiper", {
    loop: true,
    speed: 800,

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    }
});