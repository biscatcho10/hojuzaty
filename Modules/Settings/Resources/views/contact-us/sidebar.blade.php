@component('dashboard::layouts.components.sidebarItem')
    @slot('can', ['permission' => 'read_contactus'])
    @slot('url', route('dashboard.contact-us.index'))
    @slot('name', trans('settings::contactus.plural'))
    @slot('isActive', request()->routeIs('*contact-us*'))
    @slot('icon', 'fas fa-envelope')
@endcomponent
