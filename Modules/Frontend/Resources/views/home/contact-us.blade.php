<section id="contact">
    <div class="container">
        <div class="row">
            <!-- start title -->
            <div class="col-12">
                <div class="title">
                    <h2>@lang('Contact Us')</h2>
                    @if ($lang == 'en')
                        <p>&quot;Start Your Adventure with Us – Reach Out Today!&quot;</p>
                    @else
                        <p>&quot;ابدأ مغامرتك معنا - تواصل اليوم!&quot;</p>
                    @endif 
                </div>
            </div>

            <!-- start content -->
            <div class="col">
                <div class="content-contact">
                    <p>
                        {!! Settings::locale($lang)->get('contact_us_desc') !!}
                    </p>
                    <div class="app-grid mt-2 mt-md-5">
                        <div class="card-contact">
                            <h4>&quot; @lang('Get In Touch') &quot;</h4>
                            <form action="{{ route('contact.post') }}" method="POST">
                                @csrf
                                <div class="contact-form">
                                    <div class="input-group">
                                        <input type="text" name="first_name" placeholder="{{__('First Name')}}" />
                                        <img src="{{ asset('frontend/images/icons/profile.svg') }}" alt="" />
                                    </div>
                                    <div class="input-group">
                                        <input type="text" name="second_name" placeholder="{{__('Second Name')}}" />
                                        <img src="{{ asset('frontend/images/icons/profile.svg') }}" alt="" />
                                    </div>
                                    <div class="input-group">
                                        <input type="text" name="phone" placeholder="{{__('Phone')}}" />
                                        <img src="{{ asset('frontend/images/icons/smartphone.svg') }}" alt="" />
                                    </div>
                                    <div class="input-group">
                                        <input type="text" name="email" placeholder="{{ __("Email") }}" />
                                        <img src="{{ asset('frontend/images/icons/sms.svg') }}" alt="" />
                                    </div>
                                    <textarea name="message" id="" placeholder="{{ __('Your Message') }}"></textarea>
                                    <button type="submit" class="btn-primary mt-3 ms-auto">@lang('Send')</button>
                                </div>
                            </form>
                        </div>
                        <div class="contact-info">
                            <img class="contact-line" src="{{ asset('frontend/images/contact-line.svg') }}"
                                alt="contact-line" />
                            <img class="contact-img" src="{{ asset('frontend/images/contact-img.jpeg') }}"
                                alt="contact-img" />
                            <div class="contact-details ps-md-5">
                                <h5>@lang('Reach Us On')</h5>
                                <div class="item">
                                    <img src="{{ asset('frontend/images/icons/calls.svg') }}" alt="" />
                                    <div>
                                        <p>@lang('Call Center')</p>
                                        <p>{{ Settings::get('phone') }}</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('frontend/images/icons/sms-two') }}.svg" alt="" />
                                    <div>
                                        <p>@lang('Email')</p>
                                        <p>{{ Settings::get('email') }}</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('frontend/images/icons/location.svg') }}" alt="" />
                                    <div>
                                        <p>@lang('Address')</p>
                                        <p>{{ Settings::get('address') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
