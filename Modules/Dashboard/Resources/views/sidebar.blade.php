@component('dashboard::layouts.components.sidebarItem')
    @slot('url', route('dashboard.home'))
    @slot('name', trans('dashboard::dashboard.home'))
    @slot('icon', 'fas fa-layer-group')
    @slot('routeActive', 'dashboard.home')
@endcomponent
<!-- Admins -->
@include('accounts::admins.sidebar')
<!-- categories -->
@include('categories::categories.sidebar')
<!-- Partners -->
@include('partners::partners.sidebar')
<!-- Contact Us -->
@include('settings::contact-us.sidebar')
<!-- About Us -->
@include('settings::about-sidebar')
<!-- settings -->
@include('dashboard::sidebar.settings')


