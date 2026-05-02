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
                        <div class="swiper-slide" data-theme="<?php echo $i % 5; ?>">
                        <div class="card-service">

                            <div class="layer layer-0">
                                <div class="reck reck-0 backdrop">
                                    <div class="shape one"></div>
                                    <div class="shape two"></div>
                                    <div class="shape three"></div>
                                    <div class="shape four"></div>
                                    <div class="shape five"></div>
                                    <div class="shape six"></div>
                                    <div class="shape seven"></div>
                                </div>
                            </div>

                            <div class="layer layer-1">
                                <div class="reck reck-1 backdrop">
                                    <div class="shape one"></div>
                                    <div class="shape two"></div>
                                    <div class="shape three"></div>
                                    <div class="shape four"></div>
                                    <div class="shape five"></div>
                                    <div class="shape six"></div>
                                    <div class="shape seven"></div>
                                </div>
                            </div>

                            <div class="layer layer-2">
                                <div class="reck reck-2 backdrop">
                                    <div class="shape one"></div>
                                    <div class="shape two"></div>
                                    <div class="shape three"></div>
                                    <div class="shape four"></div>
                                    <div class="shape five"></div>
                                    <div class="shape six"></div>
                                    <div class="shape seven"></div>
                                </div>
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