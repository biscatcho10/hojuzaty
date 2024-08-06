@component('dashboard::layouts.components.sidebarItem')
    @slot('can', ['permission' => 'read_destinations'])
    @slot('url', route('dashboard.destinations.index'))
    @slot('name', trans('destinations::destinations.plural'))
    @slot('isActive', request()->routeIs('*destinations*'))
    @slot('icon', 'fas fa-globe')
    @slot('tree', [
        [
            'name' => trans('destinations::destinations.actions.list'),
            'url' => route('dashboard.destinations.index'),
            'can' => ['permission' => 'read_destinations'],
            'isActive' => request()->routeIs('*destinations.index'),
            'module' => 'Destinations',
        ],
        [
            'name' => trans('destinations::destinations.actions.create'),
            'url' => route('dashboard.destinations.create'),
            'can' => ['permission' => 'create_destinations'],
            'isActive' => request()->routeIs('*destinations.create'),
            'module' => 'Destinations',
        ],
    ])
@endcomponent
