<section class="scroll-snap-section">
    <div class="our-servises-wrapper protection-wrapper">   
        <div class="bg-slider">
            <div class="swiper contentSlider">
                <div class="swiper-wrapper">
                    <?php for($i = 1;$i<= 3;$i++ ): ?>
                    <div class="swiper-slide">
                        <div class="image-place">
                            <img src="/assets/images/protektion.png" alt="">
                        </div>
                    </div>
                    <?php endfor; ?> 
                </div>
            </div>
        </div>
        <div class="container">
            <div class="services-grid">
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
                            <?php for($i = 1;$i<= 3;$i++ ): ?>
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
                    <div class="services-table-wrapper">
                        <table class="services-table">
                            <tr>
                                <td colspan="2"><span class="table-title">Бренды мы используем</span></td>
                            </tr>
                            <tr class="col-2">
                                <td><div class="brand-block hover-light"><object type="image/svg+xml" data="/assets/images/xpel.svg"></object></div></td>
                                <td><div class="brand-block hover-light"><object type="image/svg+xml" data="/assets/images/suntek.svg"></object></div></td>
                            </tr>
                            <tr>
                                <td><div class="brand-block hover-light"><object type="image/svg+xml" data="/assets/images/stek.svg"></object></div></td>
                                <td><div class="brand-block hover-light"><object type="image/svg+xml" data="/assets/images/carlas.svg"></object></div></td>
                            </tr>
                            <tr class="col-2">
                                <td><div class="brand-block hover-light"><object type="image/svg+xml" data="/assets/images/p.svg"></object></div></td>
                                <td><div class="brand-block hover-light text-information-wrapper">
                                        <div class="text-information">   
                                            <object type="image/svg+xml" data="/assets/images/shield.svg"></object>
                                            <p>Вы можете привезти Ваш материал, но гарантия не распространяется</p>
                                        </div> 
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<script>
(function() {
    const contentSlider = new Swiper('.protection-wrapper .contentSlider', {
        loop: true,
        slidesPerView: 1,
        pagination: {
            el: '.protection-wrapper .swiper-glass-pagination',
            clickable: true,
            type: 'fraction',
            formatFractionCurrent: (n) => String(n).padStart(2, '0'),
            formatFractionTotal:   (n) => String(n).padStart(2, '0'),
        },
    });

    const titleSlider = new Swiper('.protection-wrapper .titleSlider', {
        loop: true,
        slidesPerView: 1,
    });

    contentSlider.controller.control = titleSlider;
    titleSlider.controller.control = contentSlider;
})();
</script>