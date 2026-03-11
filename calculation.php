<?php $slidsCount = 6; ?>

<section class="scroll-snap-section">
    <div class="our-servises-wrapper calculation-wrapper">   
        <div class="bg-slider">
            <div class="swiper contentSlider">
                <div class="swiper-wrapper">
                    <?php for($i = 1;$i<= $slidsCount;$i++ ): ?>
                    <div class="swiper-slide">
                        <div class="image-place side-image">
                            <img class="full-cover" src="/assets/images/bg-car.png" alt="">
                        </div>
                    </div>
                    <?php endfor; ?> 
                </div>
            </div>
        </div>
        <div class="container">
            <div class="services-grid calculation-preset">
                <div class="title-place">
                    <h2>НАШИ УСЛУГИ</h2>
                </div>
                <div class="slider-place">


                    
                </div>
                <div class="slider-pagination-place">
                    <div class="glass-wrapper glass-pagination">
                        <div class="swiper-glass-pagination"></div>
                    </div>

                </div>

                <div class="slider-title-place">
                    <div class="swiper titleSlider">
                        <div class="swiper-wrapper">
                            <?php for($i = 1;$i<= $slidsCount;$i++ ): ?>
                            <div class="swiper-slide">
                                <div class="service-element-name">
                                    <h3 class="title">PPF</h3>
                                    <div class="description">Paint Protection Film</div>
                                </div>
                             </div>
                            <?php endfor; ?> 
                        </div>
                    </div>
                </div>
                <div class="service-menu-place">

                    <div class="calculation-grid">
                        <div class="text-place">
                            <p class="text">Ни единой царапины. PPF — это <span>больше чем просто пленка, это</span> максимальная защита <span>вашей</span> инвестиции <span>и вашего</span> спокойствия</p>
                        </div>


                        <div class="logo-place">
                            <object type="image/svg+xml" data="/assets/images/LOGO.svg"></object>
                        </div>


                        <div class="button-place">
                            <div class="glass-wrapper">
                                <button class="glass-button">Получить расчет</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<script>
(function() {
    const contentSlider = new Swiper('.calculation-wrapper .contentSlider', {
        loop: true,
        slidesPerView: 1,
        pagination: {
            el: '.calculation-wrapper .swiper-glass-pagination',
            clickable: true,
            type: 'fraction',
            formatFractionCurrent: (n) => String(n).padStart(2, '0'),
            formatFractionTotal:   (n) => String(n).padStart(2, '0'),
        },
    });

    const titleSlider = new Swiper('.calculation-wrapper .titleSlider', {
        loop: true,
        slidesPerView: 1,
    });

    contentSlider.controller.control = titleSlider;
    titleSlider.controller.control = contentSlider;
})();
</script>