<section id="blog" class="section-container">

    <div class="container container-full">

        <div class="title-block">
            <h2>BLOG</h2>
            <p>DEEP DIVES INTO COMPLEX SOFTWARE SOLUTIONS</p>
        </div>

        <div class="content">
            <div class="place-for-slider">
                
                <div class="swiper blog-swiper">
                    <div class="swiper-wrapper">

                        <?php for($i=0; $i< 15; $i++): ?>
                        <div class="swiper-slide">

                            <div class="blog-card-wrapper">
                                <div class="blog-card">

                                    <img src="/assets/images/blog1.jpg" alt="">
                                    
                                    <div class="content-card">
                                        <h4>ARCHITECTING FOR 1M+ USERS</h4>
                                        <p>
                                            Stress-testing and scaling Ruby/Go backends for global systems.
                                            Additional content here with more details about architecture,
                                            performance and scaling strategies.
                                            Stress-testing and scaling Ruby/Go backends for global systems.
                                            Additional content here with more details about architecture.
                                            Stress-testing and scaling Ruby/Go backends for global systems.
                                            Additional content here with more details about architecture.
                                            Stress-testing and scaling Ruby/Go backends for global systems.
                                            Additional content here with more details about architecture.
                                            Stress-testing and scaling Ruby/Go backends for global systems.
                                            Additional content here with more details about architecture.12
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endfor; ?>

                    </div>
                </div>

            </div>

            <div class="place-for-pagination">
                    <div class="bs-swiper-button-prev cp glass-effect">
                        <svg width="24" height="24">
                            <use href="#arrow-right"></use>
                        </svg>
                    </div>
                    <div class="swiper-pagination blog-pagination"></div>
                    <div class="bs-swiper-button-next cp glass-effect next-button">
                        <svg width="24" height="24">
                            <use href="#arrow-right"></use>
                        </svg>
                    </div>
            </div>
        </div>
    </div>

</section>
<script src="/assets/scripts/blog.js"></script>