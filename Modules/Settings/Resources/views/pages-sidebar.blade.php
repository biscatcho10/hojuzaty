@component('dashboard::layouts.components.sidebarItem')
    @slot('can', ['permission' => 'read_settings'])
    @slot('url', route('dashboard.settings.index'))
    @slot('name', trans('Pages'))
    @slot('isActive', (request()->routeIs('*pages*') || request()->routeIs('*about-us*')))
    @slot('icon', 'fas fa-file-alt')
    @php($trees = [
        [
            'name' => trans('Home Page'),
            'url' => route('dashboard.pages'),
            'can' => ['permission' => 'read_settings'],
            'isActive' => request()->routeIs('*settings*') && request('tab') == 'titles',
            'module' => 'Settings',
        ],
        // [
        //     'name' => trans('About Us'),
        //     'url' => route('dashboard.about-us'),
        //     'can' => ['permission' => 'read_settings'],
        //     'isActive' => request()->routeIs('dashboard.about-us'),
        //     'module' => 'Settings',
        // ],
        // [
        //     'name' => trans('Map'),
        //     'url' => route('dashboard.map1'),
        //     'can' => ['permission' => 'read_settings'],
        //     'isActive' => request()->routeIs('dashboard.map1'),
        //     'module' => 'Settings',
        // ],
    ])
    @slot('tree', $trees)
@endcomponent
