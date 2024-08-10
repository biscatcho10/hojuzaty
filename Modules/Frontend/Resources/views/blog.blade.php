<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>hougzaty / blogs</title>

    <!-- start SEO -->
    @include('frontend::includes.seo', ['page' => 'blog'])
    <!-- end SEO -->

    <!-- start css -->
    @include('frontend::includes.styles', ['page' => 'blog'])
    <!-- end css -->
</head>

<body class="single-page" dir="{{ $lang == 'ar' ? 'rtl' : 'ltr' }}">

    <!-- start nav -->
    @include('frontend::blog.nav')
    <!-- end nav -->


    <!-- start single blog -->
    @include('frontend::blog.single')
    <!-- end single blog -->

    <!-- start text blogs -->
    @include('frontend::blog.content')
    <!-- end text blogs -->

    <!-- start blogs -->
    @include('frontend::blog.related')
    <!-- end blogs -->

    <!-- start partners -->
    @include('frontend::home.partners')
    <!-- end partners -->

    <!-- start footer -->
    @include('frontend::includes.footer')
    <!-- end footer -->
</body>

@include('frontend::includes.scripts', ['page' => 'blog'])

</html>
