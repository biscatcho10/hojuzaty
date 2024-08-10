<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>hougzaty / inquiry</title>

    <!-- start SEO -->
    @include('frontend::includes.seo', ['page' => 'inquiry'])
    <!-- end SEO -->

    <!-- start css -->
    @include('frontend::includes.styles', ['page' => 'inquiry'])
    <!-- end css -->
</head>

<body class="single-page" dir="{{ $lang == 'ar' ? 'rtl' : 'ltr' }}">

    <!-- start nav -->
    @include('frontend::blog.nav')
    <!-- end nav -->

    <!-- start destination contact -->
    @include('frontend::inquiry.content')
    <!-- end destination contact -->

    <!-- start partners -->
    @include('frontend::home.partners')
    <!-- end partners -->

    <!-- start footer -->
    @include('frontend::includes.footer')
    <!-- end footer -->
</body>

@include('frontend::includes.scripts', ['page' => 'inquiry'])

</html>
