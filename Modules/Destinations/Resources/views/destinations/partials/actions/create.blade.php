@if(auth()->user()->hasPermission('create_destinations'))
    <a href="{{ route('dashboard.destinations.create') }}"
       class="btn btn-primary font-weight-bolder">
        <i class="fas fa fa-fw fa-plus"></i>
        @lang('destinations::destinations.actions.create')
    </a>
@else
    <button
        type="button"
        disabled
        class="btn btn-primary font-weight-bolder">
        <i class="fas fa fa-fw fa-plus"></i>
        @lang('destinations::destinations.actions.create')
    </button>
@endif
