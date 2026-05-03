const aboutUsSwiper = new Swiper(".about-us-swiper", {
    slidesPerView: "auto",
    spaceBetween: 60,
    pagination: {
        el: ".about-us-pagination",
    },
    navigation: {
        nextEl: ".about-swiper-button-next",
        prevEl: ".about-swiper-button-prev",
        
    },
});