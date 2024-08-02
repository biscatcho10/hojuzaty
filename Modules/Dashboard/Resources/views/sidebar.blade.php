@component('dashboard::layouts.components.sidebarItem')
    @slot('url', route('dashboard.home'))
    @slot('name', trans('dashboard::dashboard.home'))
    @slot('icon', 'fas fa-layer-group')
    @slot('routeActive', 'dashboard.home')
@endcomponent
<!-- Admins -->
@include('accounts::admins.sidebar')
<!-- destinations -->
@include('destinations::destinations.sidebar')
<!-- Partners -->
@include('partners::partners.sidebar')
<!-- News -->
@include('news::news.sidebar')
<!-- Sliders -->
@include('sliders::sliders.sidebar')
<!-- Contact Us -->
@include('settings::contact-us.sidebar')
<!-- About Us -->
@include('settings::about-sidebar')
<!-- settings -->
@include('dashboard::sidebar.settings')


