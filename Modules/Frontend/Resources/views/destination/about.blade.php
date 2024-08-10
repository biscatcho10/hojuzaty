<section id="about">
    <div class="container">
        <div class="row mt-4 position-relative">
            <div class="col-lg-6">
                <!-- start title -->
                <div class="title mb-1">
                    <h2>@lang('About Destination')</h2>
                    <p class="mb-0">
                        @if ($lang == 'en')
                            “Discover {{ $destination->name }} !”
                        @else
                            "اكتشف {{ $destination->name }} !"
                        @endif
                    </p>
                    <!-- start text -->
                    <div class="about-text">
                        <p class="py-4">
                            {!! $destination->description !!}
                        </p>
                        {{-- <button class="btn-primary about-btn">Book A Tour</button> --}}
                        <a href="{{ route('inquiry', $destination) }}" class="btn-primary about-btn">
                            @lang('Book A Tour')
                        </a>
                    </div>
                </div>
            </div>

            <!-- start img -->
            <div class="col-lg-6 position-relative">
                <div class="img-container">
                    <img class="_line" src="{{ asset('frontend/images/contact-line.svg') }}" alt="contact-line" />
                    <img src="{{ $destination->getImage() }}" class="ratio ratio-1x1 mt-lg-4" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
