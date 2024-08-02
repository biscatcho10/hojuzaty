@if (in_array($page, ['home', 'about', 'inquiry', 'blogs', 'blog', 'destinations', 'destination']))
    <script src="{{ asset('frontend/js/swiper.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
@else
@endif
