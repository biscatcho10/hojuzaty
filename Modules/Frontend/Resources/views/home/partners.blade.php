<section id="partners" class="pt-0">
    <div class="container">
        <div class="row">
            <!-- start title -->
            <div class="col-12">
                <div class="title">
                    <h2>Our Partners</h2>
                    <p>
                        &quot;Join Forces with the Best: Our Trusted Travel
                        Partners&quot;
                    </p>
                </div>
            </div>

            <!-- start content -->
            <div class="col">
                <div class="content-partners">
                    <!-- start img slider -->
                    <div class="partners-slider">
                        <div class="slider swiper swiper-css-common">
                            <div class="swiper-wrapper">
                                @forelse ($partners as $partner)
                                    <!-- singl slide -->
                                    <div class="swiper-slide border-end rounded-0">
                                        <img src="{{ $partner->getImage() }}" alt="partner" />
                                    </div>
                                @empty
                                @endforelse
                            </div>
                        </div>
                        <div class="swiper-button-group justify-content-end">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
