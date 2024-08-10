<section id="destination-contact">
    <div class="container">
        <!-- start brodcuramb -->
        <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">@lang('Home')</a></li>
                <li class="breadcrumb-item"><a href="{{ route('destinations') }}">@lang('Destinations')</a></li>
                <li class="breadcrumb-item"><a href="{{ route('destination.details', $destination) }}">{{ $destination->name }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    @lang('Contact Us')
                </li>
            </ol>
        </nav>

        <!-- start title -->
        <div class="row">
            <div class="col-12">
                <h2>@lang('Let’s Talk')</h2>
            </div>
        </div>

        <!-- start form -->
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <div class="contact-form">
                    <h3 class="my-4">“@lang('Inquiry')”</h3>
                    <form action="{{ route('inquiry.post', $destination) }}" method="POST">
                        @csrf
                        <div class="input-group">
                            <input type="text" name="first_name" placeholder="{{ __('First Name') }}" />
                            <img src="{{ asset('frontend/images/icons/profile.svg') }}" alt="" />
                        </div>
                        <div class="input-group">
                            <input type="text" name="second_name" placeholder="{{ __('Second Name') }}" />
                            <img src="{{ asset('frontend/images/icons/profile.svg') }}" alt="" />
                        </div>
                        <div class="input-group">
                            <input type="tel" name="phone" placeholder="{{ __('Phone') }}" />
                            <img src="{{ asset('frontend/images/icons/smartphone.svg') }}" alt="" />
                        </div>
                        <div class="input-group">
                            <input type="email" name="email" placeholder="{{ __('Email') }}" />
                            <img src="{{ asset('frontend/images/icons/sms.svg') }}" alt="" />
                        </div>
                        <div class="input-group">
                            <input type="date" name="check_in" />
                            {{-- <img src="{{ asset('frontend/images/icons/calendar-1.svg') }}" alt="" /> --}}
                        </div>
                        <div class="input-group">
                            <input type="number" name="days" placeholder="{{ __('Number Of Days') }}" />
                        </div>
                        <textarea name="message" placeholder="{{ __('Message') }}"></textarea>

                        <label class="checkbox-item">
                            <input type="checkbox" name="checkbox-checked" />
                            @lang('I’m happy for you to contact me using the above details')
                        </label>

                        <button class="btn-outline-primary mt-3 ms-auto mb-4">
                            @lang('Submit')
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
