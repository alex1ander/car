<?php $slidsCount = 6; ?>

<section class="scroll-snap-section">
    <div class="our-servises-wrapper protection-wrapper">   
        <div class="bg-slider">
            <div class="swiper contentSlider">
                <div class="swiper-wrapper">
                    <?php for($i = 1;$i<= $slidsCount;$i++ ): ?>
                    <div class="swiper-slide">
                        <div class="image-place">
                            <img class="full-cover" src="/assets/images/protektion.png" alt="">
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
                    <div class="services-table-wrapper desktop-only">
                        <table class="services-table">
                            <tr>
                                <td colspan="2"><span class="table-title">Защита от</span></td>
                            </tr>
                        </table>
                    </div>
                    <div class="services-table-wrapper desktop-only">
                        <table class="services-table additional-table shield-service-table">
                              <tr class="col-2">
                                <td>
                                    <div class="schield-block hover-light text-information-wrapper">
                                        <svg height="24" width="24" class="icon">
                                            <use href="#rock"></use>
                                        </svg>
                                        <p class="text">Камни</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="schield-block hover-light text-information-wrapper">
                                        <svg height="24" width="24" class="icon">
                                            <use href="#scratch"></use>
                                        </svg>
                                        <p class="text">Царапины на парковке</p>
                                    </div>
                                </td>
                            </tr> 
                            <tr class="col-2">
                                <td>
                                    <div class="schield-block hover-light text-information-wrapper">
                                        <svg height="24" width="24" class="icon">
                                            <use href="#rear"></use>
                                        </svg>
                                        <p class="text">Бампер о бордюр</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="schield-block hover-light text-information-wrapper">
                                        <svg height="24" width="24" class="icon">
                                            <use href="#smoke"></use>
                                        </svg>
                                        <p class="text">Химия от дорог</p>
                                    </div>
                                </td>
                            </tr>
                            <tr class="col-2">
                                <td>
                                    <div class="schield-block hover-light text-information-wrapper">
                                        <svg height="24" width="24" class="icon">
                                            <use href="#beetle"></use>
                                        </svg>
                                        <p class="text">Птичий помет и жуки</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="schield-block hover-light text-information-wrapper">
                                        <svg height="24" width="24" class="icon">
                                            <use href="#uv"></use>
                                        </svg>
                                        <p class="text">UV защита</p>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="services-table-wrapper mobile-only">
                        <table class="services-table">
                            <tr>
                                <td>
                                    <span class="table-title">Защита от</span>
                                </td>
                            </tr>
                        </table>
                    </div>



                    <div class="services-table-wrapper mobile-only">
  <div class="shield-service-slider swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="schield-block hover-light text-information-wrapper">
          <svg height="24" width="24" class="icon"><use href="#rock"></use></svg>
          <p class="text">Камни</p>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="schield-block hover-light text-information-wrapper">
          <svg height="24" width="24" class="icon"><use href="#scratch"></use></svg>
          <p class="text">Царапины на парковке</p>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="schield-block hover-light text-information-wrapper">
          <svg height="24" width="24" class="icon"><use href="#rear"></use></svg>
          <p class="text">Бампер о бордюр</p>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="schield-block hover-light text-information-wrapper">
          <svg height="24" width="24" class="icon"><use href="#smoke"></use></svg>
          <p class="text">Химия от дорог</p>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="schield-block hover-light text-information-wrapper">
          <svg height="24" width="24" class="icon"><use href="#beetle"></use></svg>
          <p class="text">Птичий помет и жуки</p>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="schield-block hover-light text-information-wrapper">
          <svg height="24" width="24" class="icon"><use href="#uv"></use></svg>
          <p class="text">UV защита</p>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
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
            formatFractionTotal: (n) => String(n).padStart(2, '0'),
        },
    });

    const titleSlider = new Swiper('.protection-wrapper .titleSlider', {
        loop: true,
        slidesPerView: 1,
    });

    contentSlider.controller.control = titleSlider;
    titleSlider.controller.control = contentSlider;

    // Mobile слайдер для карточек
    const mobileSlider = new Swiper('.shield-service-slider', {
        slidesPerView: 1,
        loop: true,
    });

    // Функция обновления active
    function updateActiveBlock(slideIndex) {
        const allBlocks = document.querySelectorAll('.shield-service-table .schield-block, .shield-service-slider .schield-block');
        const total = 6; // или можно allBlocks.length / 2, если уверены что desktop + mobile одинаково
        const realIndex = slideIndex % total;

        allBlocks.forEach((block, i) => {
            block.classList.toggle('active', i % total === realIndex);
        });

        // Переключаем мобильный слайдер на нужный элемент
        mobileSlider.slideToLoop(realIndex, 0);
    }

    contentSlider.on('slideChange', () => updateActiveBlock(contentSlider.realIndex));

    // Инициализация
    updateActiveBlock(contentSlider.realIndex);
})();
</script>