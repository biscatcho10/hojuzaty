<section id="contact">
    <div class="container">
        <div class="row">
            <!-- start title -->
            <div class="col-12">
                <div class="title">
                    <h2>Contact Us</h2>
                    <p>&quot;Start Your Adventure with Us – Reach Out Today!&quot;</p>
                </div>
            </div>

            <!-- start content -->
            <div class="col">
                <div class="content-contact">
                    <p>
                        <a href="Hoguzaty.com">Hoguzaty.com</a> Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum
                        has been the industry's standard dummy text ever since the
                        1500s, when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book. It has survived not
                        only five centuries,.
                    </p>
                    <div class="app-grid mt-2 mt-md-5">
                        <div class="card-contact">
                            <h4>&quot;Be Inspired&quot;</h4>
                            <form action="{{ route('contact.post') }}" method="POST">
                                @csrf
                                <div class="contact-form">
                                    <div class="input-group">
                                        <input type="text" name="first_name" placeholder="First Name" />
                                        <img src="{{ asset('frontend/images/icons/profile.svg') }}" alt="" />
                                    </div>
                                    <div class="input-group">
                                        <input type="text" name="second_name" placeholder="Second Name" />
                                        <img src="{{ asset('frontend/images/icons/profile.svg') }}" alt="" />
                                    </div>
                                    <div class="input-group">
                                        <input type="tel" name="phone" placeholder="Phone" />
                                        <img src="{{ asset('frontend/images/icons/smartphone.svg') }}" alt="" />
                                    </div>
                                    <div class="input-group">
                                        <input type="email" name="email" placeholder="Email" />
                                        <img src="{{ asset('frontend/images/icons/sms.svg') }}" alt="" />
                                    </div>
                                    <textarea name="message" id="" placeholder="Your Message"></textarea>
                                    <button class="btn-primary mt-3 ms-auto">Send</button>
                                </div>
                            </form>
                        </div>
                        <div class="contact-info">
                            <img class="contact-line" src="{{ asset('frontend/images/contact-line.svg') }}" alt="contact-line" />
                            <img class="contact-img" src="{{ asset('frontend/images/contact-img.jpeg') }}" alt="contact-img" />
                            <div class="contact-details ps-md-5">
                                <h5>Reach Us On</h5>
                                <div class="item">
                                    <img src="{{ asset('frontend/images/icons/calls.svg') }}" alt="" />
                                    <div>
                                        <p>Call Center</p>
                                        <p>{{ Settings::get('phone') }}</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('frontend/images/icons/sms-two') }}.svg" alt="" />
                                    <div>
                                        <p>Email</p>
                                        <p>{{ Settings::get('email') }}</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('frontend/images/icons/location.svg') }}" alt="" />
                                    <div>
                                        <p>Location</p>
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
