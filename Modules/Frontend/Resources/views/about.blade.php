<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>hougzaty / about</title>
    <link rel="icon" href="{{ app_favicon() }}" type="image/x-icon" />
    <!-- start SEO -->
    @include('frontend::includes.seo', ['page' => 'about'])
    <!-- end SEO -->

    <!-- start css -->
    @include('frontend::includes.styles', ['page' => 'about'])
    <!-- end css -->
</head>

<body dir="{{ $lang == 'ar' ? 'rtl' : 'ltr' }}">
    <!-- start nav -->
    @include('frontend::includes.nav')
    <!-- end nav -->

    <!-- start header -->
    @include('frontend::about.header')
    <!-- end header -->

    <!-- start about -->
    @include('frontend::about.about')
    <!-- end about -->

    <!-- start mission vision -->
    @include('frontend::about.mission')
    <!-- end about -->

    <!-- start contact -->
    @include('frontend::home.contact-us')
    <!-- end contact -->

    <!-- start partners -->
    @include('frontend::home.partners')
    <!-- end partners -->

    <!-- start footer -->
    @include('frontend::includes.footer')
    <!-- end footer -->
</body>

@include('frontend::includes.scripts', ['page' => 'about'])

</html>
