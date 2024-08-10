@if (in_array($page, ['home', 'about', 'inquiry', 'blogs', 'blog', 'destinations', 'destination']))

    @if ($lang == 'ar')
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.rtl.css') }}" />

        <!-- start global css -->
        <link rel="stylesheet" href="{{ asset('frontend/css/swiper.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />

        <!-- start css ar -->
        <link rel="stylesheet" href="{{ asset('frontend/css/style-ar.css') }}" />

        <!-- start fonts ar -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&family=Cairo:wght@200..1000&display=swap"
            rel="stylesheet" />
    @else
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/css/swiper.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
    @endif
@else
@endif
