<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>hougzaty - destinations</title>

    <!-- start SEO -->
    @include('frontend::includes.seo', ['page' => 'destinations'])
    <!-- end SEO -->

    <!-- start css -->
    @include('frontend::includes.styles', ['page' => 'destinations'])
    <!-- end css -->
</head>

<body dir="{{ $lang == 'ar' ? 'rtl' : 'ltr' }}">
    <!-- start nav -->
    @include('frontend::includes.nav')
    <!-- end nav -->
    <!-- start header -->
    @include('frontend::destinations.header')
    <!-- end header -->

    <!-- start destinations -->
    @include('frontend::destinations.destinations')
    <!-- end destinations -->

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

@include('frontend::includes.scripts', ['page' => 'destinations'])

</html>
