<section id="about">
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-6">
                <!-- start title -->
                <div class="title mb-1">
                    <h2>About Us</h2>
                    <p class="mb-0">“Why Choose Us?”</p>
                    <!-- start text -->
                    <div class="about-text">
                        <p>
                            {!! Settings::locale($lang)->get('why_chosse_us') !!}
                        </p>
                    </div>
                </div>
            </div>

            <!-- start img -->
            <div class="col-lg-6 position-relative">
                <div class="img-container">
                    <img class="_line" src="{{ asset('frontend/images/contact-line.svg') }}" alt="contact-line" />
                    <img src="{{ asset('frontend/images/about.jpg') }}" class="ratio ratio-1x1 mt-lg-4" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
