<section id="destinations">
    <div class="container">
        <div class="row">
            <!-- start title -->
            <div class="col-12">
                <div class="title">
                    <h2>Top Destinations</h2>
                    <p>&quot;Explore the Best Destinations on Earth!&quot;</p>
                </div>
            </div>

            <!-- start content -->
            <div class="col">
                <div class="content-destinations">
                    <!-- start text slider -->
                    <div class="destinations-slider-text">
                        <div class="slider swiper w-100">
                            <div class="swiper-wrapper">

                                @forelse ($destinations as $destination)
                                    <!-- singl slide -->
                                    <div class="swiper-slide">
                                        <div class="position-relative overflow-hidden">
                                            <h3 data-swiper-parallax-y="-100">{{ $destination->name }}</h3>
                                        </div>
                                        <p>
                                            {{ $destination->description }}
                                        </p>
                                        <a href="{{ route('inquiry') }}" class="btn-primary">Explore Now</a>
                                    </div>
                                @empty
                                @endforelse

                            </div>
                        </div>
                    </div>

                    <!-- start img slider -->
                    <div class="destinations-slider-img">
                        <div class="slider swiper swiper-css-common">
                            <div class="swiper-wrapper">

                                @forelse ($destinations as $destination)
                                    <!-- singl slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ $destination->getImage() }}" alt="destination" />
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
