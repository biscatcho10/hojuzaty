<section id="single-blog">
    <div class="container">
        <div class="row">
            <!-- start title -->
            <div class="col-12">
                <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb" class="bg-transparent">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">@lang('Home')</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('about') }}">@lang('Blogs')</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            {{ $blog->title }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- start blogs card -->
        <div class="row">
            <div class="col-12">
                <img src="{{ asset('frontend/images/test/blog-1.jpg') }}" alt="" class="ratio ratio-16x9 blog-img" />
                <h2> {{ $blog->title }}</h2>
            </div>
        </div>
    </div>
</section>
