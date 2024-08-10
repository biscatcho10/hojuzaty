<div class="top-page">
    <!-- start top nav -->
    <div class="top-nav">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="top-nav-content d-flex gap-5 justify-content-end align-items-center pt-2">
                        <div class="calls">
                            <a href="tel:+{{ Settings::get('phone') }}" class="d-flex gap-1 font-vazirmatn">
                                <img src="{{ asset('frontend/images/icons/call') }}-calling.svg" alt="call-icon" />
                                @lang('Call Us Now')
                            </a>
                        </div>
                        <div class="lang-circle">
                            @if (app()->getLocale() == 'ar')
                                <a href="{{ route('frontend.locale', 'en') }}">EN</a>
                            @else
                                <a href="{{ route('frontend.locale', 'ar') }}">AR</a>
                            @endif
                        </div>
                        {{-- <form action="/contact.html" class="search-form">
                            <img src="{{ asset('frontend/images/icons/search') }}-normal.svg" alt="search-icon"
                                class="search-icon" />
                            <div class="search-input">
                                <input type="text" />
                                <button type="submit" class="bg-transparent border-0">
                                    <img src="{{ asset('frontend/images/icons/search') }}-normal.svg"
                                        alt="search-icon" />
                                </button>
                            </div>
                        </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end top nav -->

    <!-- start navbar -->
    <nav>
        <div class="container">
            <div class="row">
                <div class="col-5 d-lg-none">
                    <img class="logo" src="{{ asset('frontend/images/logo.svg') }}" alt="" />
                </div>
                <div class="col-7 col-lg-12">
                    <div class="d-lg-none w-100 h-100 d-flex justify-content-end align-items-center">
                        <div class="hamburger-menu">
                            <div class="line"></div>
                            <div class="line"></div>
                            <div class="line"></div>
                        </div>
                    </div>
                    <div class="nav-links">
                        <div class="bg-before"></div>
                        <ul class="nav-content">
                            <li><a href="{{ route('home') }}" class="{{ request()->routeIS('home') ? 'active' : '' }}">@lang('Home')</a></li>
                            <li>
                                <div>@lang('Destinations')</div>
                                <ul class="sub-links">
                                    @forelse ($destinations as $destination)
                                        <li>
                                            <a href="{{ route('destination.details', $destination) }}">{{ $destination->name }}</a>
                                            <img src="{{ asset('frontend/images/icons/arrow-right.svg') }}" alt="arrow" />
                                        </li>
                                    @empty
                                    @endforelse
                                </ul>
                            </li>
                            <li class="nav-logo d-none d-lg-block">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('frontend/images/logo.svg') }}" alt="logo" />
                                </a>
                            </li>
                            <li><a href="{{ route('blogs') }}" class="{{ request()->routeIS('blogs') ? 'active' : '' }}">@lang('Blogs')</a></li>
                            <li><a href="{{ route('about') }}" class="{{ request()->routeIS('about') ? 'active' : '' }}">@lang('About Us')</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar -->
</div>
