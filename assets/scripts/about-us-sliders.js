const aboutUsSwiper = new Swiper(".about-us-swiper", {
    slidesPerView: 1.8,
    pagination: {
        el: ".about-us-pagination",
    },

    breakpoints: {
        0: {
            slidesPerView: 1.1,
        },
        768: {
            slidesPerView: 1.8,
        }
    }
});