<header>
    <!-- start slider bg -->
    <div class="header-slider-bg">
        <div class="slider swiper w-100">
            <div class="swiper-wrapper">
                @forelse ($sliders as $slider)
                    <div class="swiper-slide">
                        <img src="{{ $slider->getImage() }}" alt="logo" />
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="content-header">
                    <!-- start slider text -->
                    <div class="header-slider-text">
                        <div class="slider swiper w-100">
                            <div class="swiper-wrapper">
                                @forelse ($sliders as $slider)
                                    <!-- singl slide -->
                                    <div class="swiper-slide">
                                        <div class="position-relative overflow-hidden">
                                            <h1 data-swiper-parallax-y="-100">{{ $slider->title }}</h1>
                                        </div>
                                        <p>{!! $slider->content !!}</p>
                                        {{-- <a href="{{ route('destination.details', $slider) }}"
                                            class="btn-primary">@lang('Explore Now')</a> --}}
                                    </div>
                                @empty
                                @endforelse
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <!-- start slider img -->
                    <div class="header-slider-img">
                        <div class="slider swiper swiper-css-common">
                            <div class="swiper-wrapper">
                                @forelse ($sliders as $slider)
                                    <!-- singl slide -->
                                    <div class="swiper-slide">
                                        <img src="{{ $slider->getImage() }}" alt="{{ $slider->title }}"/>
                                    </div>
                                @empty
                                @endforelse
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
