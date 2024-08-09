@component('dashboard::layouts.components.sidebarItem')
    @slot('can', ['permission' => 'read_bookings'])
    @slot('url', route('dashboard.inquiries.index'))
    @slot('name', trans('inquiries::inquiries.plural'))
    @slot('isActive', request()->routeIs('*inquiries*'))
    @slot('icon', 'far fa-envelope')
@endcomponent
