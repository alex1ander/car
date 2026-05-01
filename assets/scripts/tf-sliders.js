    var swiper = new Swiper(".tf-swiper", {
        spaceBetween: 60,
        effect: 'slide',
        loop: true,
        freeMode: true,
        slidesPerView: "auto",
        speed: 5000,
        autoplay: {
            delay: 1,
            pauseOnMouseEnter: true,
            disableOnInteraction: false,
            waitForTransition: true,
            stopOnLastSlide: false,

        }
    });