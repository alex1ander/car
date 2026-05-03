var swiper = new Swiper(".blog-swiper", {
    slidesPerView: "auto",
    spaceBetween: 40,
    pagination: {
        el: ".blog-pagination",
    },
    navigation: {
        nextEl: ".blog-swiper-button-next",
        prevEl: ".blog-swiper-button-prev",
        
    },
});