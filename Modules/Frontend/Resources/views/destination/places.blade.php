<section id="tours">
    <div class="container">
        <div class="row">
            <!-- start title -->
            <div class="col-12">
                <div class="title">
                    <h2>Tours</h2>
                    <p>
                        @if ($lang == 'en')
                            “{{ $destination->name }}: Unveil Paradise with our Extraordinary Tours.”
                        @else
                            " {{ $destination->name }}: كشف عن الجنة مع جولاتنا الاستثنائية."
                        @endif
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <!-- start content -->
                <div class="tours-content">
                    @forelse ($places as $i => $place)
                        @if ($i % 2 == 0)
                            <!-- start single row -->
                            <div class="single-row">
                                <div class="tours-img">
                                    <div class="ratio ratio-4x3 rounded-3 overflow-hidden">
                                        <img src="{{ $place->getImage() }}" alt="{{ $place->name }}"
                                            class="w-100 h-100 cover" />
                                    </div>
                                </div>
                                <div class="border-line-y"></div>
                                <div class="tours-text">
                                    <h3>{{ $place->name }}</h3>
                                    <p class="mb-4">
                                        {!! $place->description !!}
                                    </p>
                                </div>
                                <div class="border-line-x"></div>
                            </div>
                        @else
                            <!-- start single row -->
                            <div class="single-row">
                                <div class="tours-text">
                                    <h3>{{ $place->name }}</h3>
                                    <p class="mb-4">
                                        {!! $place->description !!}
                                    </p>
                                </div>
                                <div class="border-line-y"></div>
                                <div class="tours-img">
                                    <div class="ratio ratio-4x3 rounded-3 overflow-hidden">
                                        <img src="{{ $place->getImage() }}" alt="{{ $place->name }}"
                                            class="w-100 h-100 cover" />
                                    </div>
                                </div>
                                <div class="border-line-x"></div>
                            </div>
                        @endif
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
