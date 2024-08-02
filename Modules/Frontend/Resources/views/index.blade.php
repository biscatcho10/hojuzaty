<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>hougzaty</title>
    <!-- start SEO -->
    @include('frontend::includes.seo', ['page' => 'home'])
    <!-- end SEO -->

    <!-- start css -->
    @include('frontend::includes.styles', ['page' => 'home'])
    <!-- end css -->
</head>

<body>
    <!-- start nav -->
    @include('frontend::includes.nav')
    <!-- end nav -->

    <!-- start header -->
    @include('frontend::home.header')
    <!-- end header -->

    <!-- start destinations -->
    @include('frontend::home.destinations')
    <!-- end destinations -->

    <!-- start blogs -->
    @include('frontend::home.blogs')
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

@include('frontend::includes.scripts', ['page' => 'home'])
</html>
