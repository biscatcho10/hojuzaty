<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>hougzaty / destinations / details</title>

    <!-- start SEO -->
    @include('frontend::includes.seo', ['page' => 'destination'])
    <!-- end SEO -->

    <!-- start css -->
    @include('frontend::includes.styles', ['page' => 'destination'])
    <!-- end css -->
</head>

<body>
    <!-- start nav -->
    @include('frontend::includes.nav')
    <!-- end nav -->

    <!-- start header -->
    @include('frontend::destination.header')
    <!-- end header -->

    <!-- start about -->
    @include('frontend::destination.about')
    <!-- end about -->

    <!-- start tours -->
    @include('frontend::destination.places')
    <!-- end tours -->

    <!-- start gallery -->
    @include('frontend::destination.gallery')
    <!-- start end -->

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

@include('frontend::includes.scripts', ['page' => 'destination'])

</html>
