@if(auth()->user()->hasPermission('delete_bookings'))
    <a href="#country-{{ $inquiry->id }}-delete-model" class="btn btn-outline-danger waves-effect waves-light btn-sm"
       data-toggle="modal">
        <i class="fas fa-trash-alt fa fa-fw"></i>
    </a>

    <!-- Modal -->
    <div class="modal fade" id="country-{{ $inquiry->id }}-delete-model" tabindex="-1" role="dialog"
         aria-labelledby="modal-title-{{ $inquiry->id }}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"
                        id="modal-title-{{ $inquiry->id }}">@lang('inquiries::inquiries.dialogs.delete.title')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @lang('inquiries::inquiries.dialogs.delete.info')
                </div>
                <div class="modal-footer">
                    {{ BsForm::delete(route('dashboard.inquiries.destroy', $inquiry)) }}
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        @lang('inquiries::inquiries.dialogs.delete.cancel')
                    </button>
                    <button type="submit" class="btn btn-danger">
                        @lang('inquiries::inquiries.dialogs.delete.confirm')
                    </button>
                    {{ BsForm::close() }}
                </div>
            </div>
        </div>
    </div>
@else
    <button
        type="button"
        disabled
        class="btn btn-outline-danger waves-effect waves-light btn-sm">
        <i class="fas fa-trash-alt fa fa-fw"></i>
    </button>
@endcan
