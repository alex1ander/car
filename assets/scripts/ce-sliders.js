const ceSwiper = new Swiper(".ce-swiper", {
    slidesPerView: 1.8,
    spaceBetween: 60,
    pagination: {
        el: ".ce-pagination",
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