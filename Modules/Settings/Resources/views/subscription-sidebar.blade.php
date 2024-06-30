@component('dashboard::layouts.components.sidebarItem')
    @slot('can', ['permission' => 'read_settings'])
    @slot('url', route('dashboard.settings.index'))
    @slot('name', trans('Contact Us'))
    @slot('isActive', request()->routeIs('*contact-us*'))
@endcomponent
