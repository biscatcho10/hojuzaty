@if(auth()->user()->hasPermission('show_bookings'))
    <a href="{{ route('dashboard.inquiries.show', $inquiry) }}"
       class="btn btn-outline-warning waves-effect waves-light btn-sm">
        <i class="fas fa fa-fw fa-eye"></i>
    </a>
@else
    <button
        type="button"
        disabled
        class="btn btn-outline-warning waves-effect waves-light btn-sm">
        <i class="fas fa fa-fw fa-eye"></i>
    </button>
@endcan
