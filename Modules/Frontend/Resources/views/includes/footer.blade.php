<footer>
    <div class="container">
        <!-- start content -->
        <div class="row py-5 position-relative z-2 justify-content-center">
            <div class="col-sm-5 col-md-3">
                <h3 class="m-w-w">
                    <img src="{{ asset('frontend/images/logo-text.svg') }}" alt="logo-text" />
                    <div class="border-bottom border-2 border-secondary border-opacity-50 w-75 mt-3 mb-5"></div>
                </h3>

                <div class="contact-footer">
                    <div class="item">
                        <img src="{{ asset('frontend/images/icons/whats-app.svg') }}" alt="whats-app" />
                        <div>
                            <p>@lang('Whatsapp')</p>
                            <a href="https://wa.me/{{ settings::get('whats_app') }}">{{ settings::get('whats_app') }}</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('frontend/images/icons/sms-3.svg') }}" alt="sms-3" />
                        <div>
                            <p>@lang('Email')</p>
                            <a href="mailto:Hojuzaty@support.com">{{ Settings::get('email') }}</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('frontend/images/icons/call-calling-2.svg') }}" alt="call-calling-2" />
                        <div>
                            <p>@lang('Call Center')</p>
                            <a href="tel:+201553760719">{{ Settings::get('phone') }}</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-3 col-md-3">
                <h3 class="m-w-w">@lang('Company')</h3>
                <ul>
                    <li>
                        <a href="{{ route('about') }}">@lang('About Us')</a>
                    </li>
                    <li>
                        <a href="{{ route('blogs') }}">@lang('Blogs')</a>
                    </li>
                </ul>
            </div>

            <div class="col-6 col-sm-3 col-md-3">
                <h3 class="m-w-w">@lang('Destinations')</h3>
                <div class="d-lg-flex">
                    <!-- loop on ul every 4 li -->
                    @for ($i = 0; $i < count($destinations); $i++)
                        @if ($i % 4 == 0)
                            <ul>
                                @for ($j = $i; $j < $i + 4 && $j < count($destinations); $j++)
                                    <li>
                                        <a href="{{ route('destination.details', $destinations[$j]->id) }}">{{ $destinations[$j]->name }}</a>
                                    </li>
                                @endfor
                            </ul>
                        @endif
                    @endfor
                </div>
            </div>

            <div class="col-sm-12 col-md-3">
                <h3 class="m-w-w">@lang('Location')</h3>
                <div class="location-footer">
                    <div class="d-flex gap-2">
                        <img src="{{ asset('frontend/images/icons/location-1.svg') }}" alt="location-1" />
                        @lang('Location')
                    </div>
                    <iframe class="h-100 rounded-3 mt-4" src="https://maps.google.com/maps?q={{ Settings::get('latitude1') . ',' .Settings::get('longitude1') }}&z=15&output=embed" width="100%" height="270" style="border: 0" allowfullscreen=""></iframe>

                    <h3 class="my-2">@lang('Follow Us')</h3>
                    <div class="d-flex gap-2 icons">
                        <div class="single-icon">
                            <a href="{{ Settings::get('instagram') }}">
                                <img src="{{ asset('frontend/images/icons/instagram.svg') }}" alt="instagram" />
                            </a>
                        </div>
                        <div class="single-icon">
                            <a href="{{ Settings::get('youtube') }}">
                                <img src="{{ asset('frontend/images/icons/youtube.svg') }}" alt="youtube" />
                            </a>
                        </div>
                        <div class="single-icon">
                            <a href="{{ Settings::get('facebook') }}">
                                <img src="{{ asset('frontend/images/icons/facebook.svg') }}" alt="facebook" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- start copyright -->
    <div class="copyright">
        {{-- <div class="pe-3 me-3 border-end">
            <img src="{{ asset('frontend/images/icons/clock.svg') }}" alt="clock" />
            @lang('Working Time')
        </div> --}}
        <div>@lang('2024 Hojuzaty. All Rights Reserved')</div>
    </div>
</footer>
