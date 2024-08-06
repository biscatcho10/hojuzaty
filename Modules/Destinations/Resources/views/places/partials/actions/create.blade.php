@if(auth()->user()->hasPermission('create_places'))
    <a href="{{ route('dashboard.places.create', $destination) }}"
       class="btn btn-primary font-weight-bolder">
        <i class="fas fa fa-fw fa-plus"></i>
        @lang('destinations::places.actions.create')
    </a>
@else
    <button
        type="button"
        disabled
        class="btn btn-primary font-weight-bolder">
        <i class="fas fa fa-fw fa-plus"></i>
        @lang('destinations::places.actions.create')
    </button>
@endif
