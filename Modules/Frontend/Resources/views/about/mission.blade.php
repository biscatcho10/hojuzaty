<section id="mission-vision"
    style="
        background: url('{{ asset('frontend/images/vision.jpeg') }}') center;
        background-size: cover;
      ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card py-4">
                    <!-- start title -->
                    <h2 class="border-red">“Our Mission + Vision”</h2>
                    <p>
                        {!! Settings::locale($lang)->get('our_mission') !!}
                    </p>
                    <p class="border-red">
                        • Cultivate collaborative relationships of mutual benefit and
                        respect between travel designers and clients.
                    </p>
                    <p>
                        {!! Settings::locale($lang)->get('our_vision') !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
