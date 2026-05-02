<section id="core-expertise" class="section-container">

    <div class="container container-full bg-image-container">

        <div class="title-block">
            <h2>CORE EXPERTISE</h2>
            <p>PRECISION ENGINEERED</p>
        </div>

        <div class="content">

            <div class="place-for-slider">
                
                <div class="swiper ce-swiper">
                    <div class="swiper-wrapper">


                        <?php for($i=0; $i<5; $i++) : ?>
                        <div class="swiper-slide">
                            <div class="card-service">

                                <div class="layer layer-0">
                                    <div class="reck reck-0"></div>
                                </div>
                                <div class="layer layer-1">
                                    <div class="reck reck-1"></div>
                                </div>
                                <div class="layer layer-2">
                                    <div class="reck reck-2"></div>
                                </div>

                                <div class="card-content layer layer-3">
                                    <div class="card-icon">
                                        <svg width="32" height="32">
                                            <use href="#calendar"></use>
                                        </svg>
                                    </div>
                                    <h3>Web Development</h3>
                                    <p>High-performance scalable ecosystems & enterprise solutions</p>
                                    <div class="tags">
                                        <span class="tag">Learn More</span>
                                        <span class="tag">See More</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endfor; ?>


                    </div>
                </div>

                <div class="place-for-pagination">
                    <div class="swiper-pagination ce-pagination"></div>
                </div>

            </div>

        </div>
    </div>
</section>
<script src="../assets/scripts/ce-sliders.js"></script>