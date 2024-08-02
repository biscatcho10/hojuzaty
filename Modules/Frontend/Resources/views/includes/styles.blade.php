@if (in_array($page, ['home', 'about', 'inquiry', 'blogs', 'blog', 'destinations', 'destination']))
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
@else
@endif
