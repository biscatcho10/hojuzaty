<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>hougzaty / blogs</title>

    <!-- start SEO -->
    @include('frontend::includes.seo', ['page' => 'blogs'])
    <!-- end SEO -->

    <!-- start css -->
    @include('frontend::includes.styles', ['page' => 'blogs'])
    <!-- end css -->
</head>

<body dir="{{ $lang == 'ar' ? 'rtl' : 'ltr' }}">
    <!-- start nav -->
    @include('frontend::includes.nav')
    <!-- end nav -->

    <!-- start header -->
    @include('frontend::blogs.header')
    <!-- end header -->

    <!-- start blogs -->
    @include('frontend::blogs.blogs')
    <!-- end blogs -->

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

@include('frontend::includes.scripts', ['page' => 'blogs'])

</html>
