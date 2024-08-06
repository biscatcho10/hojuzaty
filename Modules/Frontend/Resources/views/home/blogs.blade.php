<section id="blogs">
    <div class="container">
        <div class="row">
            <!-- start title -->
            <div class="col-12">
                <div class="title">
                    <h2>blogs</h2>
                    <p>&quot;Explore Travel Tips and Hidden Gems&quot;</p>
                </div>
            </div>

            <!-- start content -->
            <div class="col">
                <div class="content-blogs">
                    <!-- start img slider -->
                    <div class="blogs-slider">
                        <div class="slider swiper swiper-css-common">
                            <div class="swiper-wrapper">
                                @forelse ($news as $blog)
                                    <!-- singl slide -->
                                    <div class="swiper-slide">
                                        <div class="card-one">
                                            <div class="badg">Article</div>
                                            <img src="{{ $blog->getImage() }}" alt="blog" />
                                            <h3>{{ $blog->title }}</h3>
                                            <p>
                                                {{ $blog->content }}
                                            </p>
                                        </div>
                                    </div>
                                @empty
                                @endforelse
                            </div>
                        </div>
                        <div class="swiper-button-group justify-content-end">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
