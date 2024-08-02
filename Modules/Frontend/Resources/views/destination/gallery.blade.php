<section id="gallery">
    <!-- start text slider -->
    <div class="gallery-slider-bg w-100 h-100 position-absolute">
        <div class="slider swiper w-100">
            <div class="swiper-wrapper">
                <!-- singl slide -->
                <div class="swiper-slide">
                    <img src="{{ asset('frontend/images/destinations-bg.jpg') }}" alt="" class="w-100 h-100 cover" />
                </div>
                <!-- singl slide -->
                <div class="swiper-slide">
                    <img src="{{ asset('frontend/images/test/1-s-bg.jpg') }}" alt="" class="w-100 h-100 cover" />
                </div>
                <!-- singl slide -->
                <div class="swiper-slide">
                    <img src="{{ asset('frontend/images/test/2-s-bg.jpg') }}" alt="" class="w-100 h-100 cover" />
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <!-- start title -->
            <div class="col-12">
                <div class="title">
                    <h2>Gallery</h2>
                    <p>"Capture Bali's Magic Through Our Stunning Gallery."</p>
                </div>
            </div>

            <!-- start content -->
            <div class="col">
                <div class="content-gallery">
                    <!-- start img slider -->
                    <div class="gallery-slider-img">
                        <div class="slider swiper swiper-css-common">
                            <div class="swiper-wrapper">
                                <!-- singl slide -->
                                <div class="swiper-slide ratio ratio-4x3">
                                    <img src="{{ asset('frontend/images/test/1-s.png') }}" class="cover" alt=""/>
                                </div>
                                <!-- singl slide -->
                                <div class="swiper-slide ratio ratio-4x3">
                                    <img src="{{ asset('frontend/images/test/1-s-bg.jpg') }}" class="cover" alt=""/>
                                </div>
                                <!-- singl slide -->
                                <div class="swiper-slide ratio ratio-4x3">
                                    <img src="{{ asset('frontend/images/test/2-s-bg.jpg') }}" class="cover" alt=""/>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-group">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
