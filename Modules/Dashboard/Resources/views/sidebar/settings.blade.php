@component('dashboard::layouts.components.sidebarItem')
    @slot('can', [
        'permission' => 'read_settings',
        'read_countries',
        'read_roles',
        'read_users',
        ])
        @slot('name', trans('settings::settings.plural'))
        @slot('isActive', request()->routeIs('*settings*') || request()->routeIs('*operative-history*') ||
            request()->routeIs('*roles*') ||
            request()->routeIs('*roles*') || request()->routeIs('*labs*') || request()->routeIs('*branches*') ||
            request()->routeIs('*rooms*') || request()->routeIs('*users*') || request()->routeIs('*usertypes*'))
            @slot('icon', 'fas fa-cogs')
            @php(
    $trees = [
        // settings main
        [
            'name' => trans('settings::settings.tabs.main'),
            'url' => route('dashboard.settings.index', ['tab' => 'main']),
            'can' => ['permission' => 'read_settings'],
            'isActive' => request()->routeIs('*settings*') && request('tab') == 'main',
            'module' => 'Settings',
            'icon' => 'fas fa-cog',
        ],
             // settings contacts
        [
            'name' => trans('settings::settings.tabs.contacts'),
            'url' => route('dashboard.settings.index', ['tab' => 'contacts']),
            'can' => ['permission' => 'read_settings'],
            'isActive' => request()->routeIs('*settings*') && request('tab') == 'contacts',
            'module' => 'Settings',
            'icon' => 'fas fa-address-card',
        ],
        // settings social
        [
            'name' => trans('settings::settings.tabs.social'),
            'url' => route('dashboard.settings.index', ['tab' => 'social']),
            'can' => ['permission' => 'read_settings'],
            'isActive' => request()->routeIs('*settings*') && request('tab') == 'social',
            'module' => 'Settings',
            'icon' => 'fab fa-facebook',
        ],
        // settings seo
        [
            'name' => trans('settings::settings.tabs.seo'),
            'url' => route('dashboard.settings.index', ['tab' => 'seo']),
            'can' => ['permission' => 'read_settings'],
            'isActive' => request()->routeIs('*settings*') && request('tab') == 'seo',
            'module' => 'Settings',
            'icon' => 'fas fa-search',
        ],
          // Google Analytics and Facebook Pixel
        [
            'name' => trans('Google Analytics and Facebook Pixel'),
            'url' => route('dashboard.settings.index', ['tab' => 'pixel']),
            'can' => ['permission' => 'read_settings'],
            'isActive' => request()->routeIs('*settings*') && request('tab') == 'pixel',
            'module' => 'Settings',
            'icon' => 'fas fa-chart-line',
        ]
    ]
)
            @slot('tree', $trees)
        @endcomponent
