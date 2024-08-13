<section id="gallery">
    <!-- start text slider -->
    <div class="gallery-slider-bg w-100 h-100 position-absolute">
        <div class="slider swiper w-100">
            <div class="swiper-wrapper">
                @forelse ($places as $place)
                    <!-- singl slide -->
                    <div class="swiper-slide">
                        <img src="{{ $place->getImage() }}" alt="{{ $place->name }}" class="w-100 h-100 cover" />
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <!-- start title -->
            <div class="col-12">
                <div class="title">
                    <h2>Gallery</h2>
                    <p>
                        @if ($lang == 'en')
                            "Capture {{ $destination->name }}'s Magic Through Our Stunning Gallery."
                        @else
                            "احتفظ بسحر {{ $destination->name }} من خلال معرضنا الرائع."
                        @endif
                    </p>
                </div>
            </div>

            <!-- start content -->
            <div class="col">
                <div class="content-gallery">
                    <!-- start img slider -->
                    <div class="gallery-slider-img">
                        <div class="slider swiper swiper-css-common">
                            <div class="swiper-wrapper">
                                @forelse ($galleries as $gallery)
                                    <!-- singl slide -->
                                    <div class="swiper-slide ratio ratio-4x3">
                                        <img src="{{ $gallery['url'] }}" class="cover" alt="gallery" />
                                    </div>
                                @empty
                                @endforelse
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
