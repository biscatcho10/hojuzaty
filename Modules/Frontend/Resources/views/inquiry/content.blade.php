<section id="destination-contact">
    <div class="container">
        <!-- start brodcuramb -->
        <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Destinations</a></li>
                <li class="breadcrumb-item"><a href="#">Bali</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Contact Us
                </li>
            </ol>
        </nav>

        <!-- start title -->
        <div class="row">
            <div class="col-12">
                <h2>Let’s Talk</h2>
            </div>
        </div>

        <!-- start form -->
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <div class="contact-form">
                    <h3 class="my-4">“Inquiry”</h3>
                    <form action="">
                        <div class="input-group">
                            <input type="text" placeholder="First Name" />
                            <img src="{{ asset('frontend/images/icons/profile.svg') }}" alt="" />
                        </div>
                        <div class="input-group">
                            <input type="text" placeholder="Second Name" />
                            <img src="{{ asset('frontend/images/icons/profile.svg') }}" alt="" />
                        </div>
                        <div class="input-group">
                            <input type="text" placeholder="Phone Number" />
                            <img src="{{ asset('frontend/images/icons/smartphone.svg') }}" alt="" />
                        </div>
                        <div class="input-group">
                            <input type="text" placeholder="Email" />
                            <img src="{{ asset('frontend/images/icons/sms.svg') }}" alt="" />
                        </div>
                        <div class="input-group">
                            <input type="text" placeholder="Location" />
                            <img src="{{ asset('frontend/images/icons/location-1.svg') }}" alt="" />
                        </div>
                        <div class="input-group">
                            <input type="text" placeholder="Location" />
                            <img src="{{ asset('frontend/images/icons/calendar-1.svg') }}" alt="" />
                        </div>
                        <textarea name="" id="" placeholder="Your Message"></textarea>

                        <label class="checkbox-item">
                            <input type="checkbox" name="checkbox-checked" />
                            I’m happy for you to contact me using the above details
                        </label>

                        <button class="btn-outline-primary mt-3 ms-auto mb-4">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
