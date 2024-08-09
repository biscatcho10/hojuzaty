<div class="dropdown d-inline-block">
    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 45px">
        <i class="mdi mdi-bell-outline"></i>
        @if (auth()->user()->unreadNotifications->count() > 0)
            <span class="badge badge-danger badge-pill">{{ auth()->user()->unreadNotifications->count() }}</span>
        @endif
    </button>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0 notification-drop"
        aria-labelledby="page-header-notifications-dropdown">
        <div class="p-3">
            <div class="row align-items-center">
                <div class="col">
                    <h6 class="m-0"> {{ __('Notifications') }} </h6>
                </div>
                <div class="col-auto">
                    <a href="{{ route('dashboard.notifications.index') }}" class="small"> {{ __('View All') }}</a>
                </div>
            </div>
        </div>
        <div data-simplebar style="max-height: 230px;">
            @foreach (auth()->user()->unreadNotifications as $notification)
                @if(isExist($notification->data['target_type'], $notification->data['target_id']))
                    <a href="{{ $notification->data['url']}}"
                        class="text-reset notification-item">
                        <div class="media">
                            <img src="{{ $notification->data['sender_image'] ?? "https://www.gravatar.com/avatar/454141dab8fba2c55bc2d81247a629a4?d=mm" }}" class="mr-3 rounded-circle avatar-xs"
                                alt="user-pic">
                            <div class="media-body">
                                <h6 class="mt-0 mb-1">{{ $notification->data['title'][app()->getLocale()] }}</h6>
                                <div class="font-size-12 text-muted">
                                    <p class="mb-1">{{ Str::limit($notification->data['message'][app()->getLocale()], 30, '...') }}</p>
                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i>
                                        {{ $notification->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endif
            @endforeach
        </div>
        <div class="p-2 border-top">
            <a class="btn btn-sm btn-link font-size-14 btn-block text-center"
                href="{{ route('dashboard.notifications.index') }}">
                <i class="mdi mdi-arrow-right-circle mr-1"></i> {{ __('View More ..') }}
            </a>
        </div>
    </div>
</div>