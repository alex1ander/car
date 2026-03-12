<?php $slidsCount = 8; ?>

<section class="scroll-snap-section">
    <div class="our-servises-wrapper car-wrapper">

        <div class="container">
            <div class="services-grid">
                <div class="title-place">
                    <h2>НАШИ УСЛУГИ</h2>
                </div>
                <div class="slider-place light">


                    <div class="swiper contentSlider carSlider">
                        <div class="swiper-wrapper">
                            <?php for($i = 1;$i<= $slidsCount;$i++ ): ?>
                            <div class="swiper-slide">
                                <div class="image-place">
                                    <img src="./assets/images/car-<?= $i?>.png" alt="">
                                </div>
                            </div>
                            <?php endfor; ?> 
                        </div>
                    </div>

                    
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
                    <div class="services-table-wrapper">
                        <table class="services-table">
                            <tr>
                                <td colspan="2"><span class="table-title">Бренды мы используем</span></td>
                            </tr>
                            <tr class="col-2">
                                <td><div class="brand-block hover-light"><object type="image/svg+xml" data="./assets/images/xpel.svg"></object></div></td>
                                <td><div class="brand-block hover-light"><object type="image/svg+xml" data="./assets/images/suntek.svg"></object></div></td>
                            </tr>
                            <tr>
                                <td><div class="brand-block hover-light"><object type="image/svg+xml" data="./assets/images/stek.svg"></object></div></td>
                                <td><div class="brand-block hover-light"><object type="image/svg+xml" data="./assets/images/carlas.svg"></object></div></td>
                            </tr>
                            <tr class="col-2">
                                <td><div class="brand-block hover-light"><object type="image/svg+xml" data="./assets/images/p.svg"></object></div></td>
                                <td><div class="brand-block hover-light text-information-wrapper">
                                        <div class="text-information">   
                                            <object type="image/svg+xml" data="./assets/images/shield.svg"></object>
                                            <p>Вы можете привезти Ваш материал, но гарантия не распространяется</p>
                                        </div> 
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="services-table-wrapper">
                        <table class="services-table additional-table">
                            <tr>
                                <td colspan="3"  class="scroll-cell"><span class="table-title">Варианты пленок</span></td>
                            </tr>
                        </table>
                    </div>
                    <div class="services-table-wrapper">
                        <table class="services-table additional-table">
                            <tr class="col-3">
                                <td>
                                    <div class="color-block hover-light">
                                        <div class="glass-wrapper glass-color gloss"></div>
                                        <span class="text">Прозрачный глянец</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="color-block hover-light">
                                        <div class="glass-wrapper glass-color matte"></div>
                                        <span class="text">Прозрачная матовая</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="color-block hover-light">
                                        <div class="glass-wrapper glass-color any"></div>
                                        <span class="text">Любой цвет любой финиш</span>
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
    const contentSlider = new Swiper('.car-wrapper .contentSlider', {
        loop: true,
        slidesPerView: 1,
        pagination: {
            el: '.car-wrapper .swiper-glass-pagination',
            clickable: true,
            type: 'fraction',
            formatFractionCurrent: (n) => String(n).padStart(2, '0'),
            formatFractionTotal:   (n) => String(n).padStart(2, '0'),
        },
    });

    const titleSlider = new Swiper('.car-wrapper .titleSlider', {
        loop: true,
        slidesPerView: 1,
    });

    contentSlider.controller.control = titleSlider;
    titleSlider.controller.control = contentSlider;
})();
</script>