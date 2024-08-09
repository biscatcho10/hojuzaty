{{ BsForm::resource('inquiries::inquiries')->get(url()->current()) }}
@component('dashboard::layouts.components.accordion')
    @slot('title', trans('inquiries::inquiries.actions.filter'))

    <div class="row">
        <div class="col-md-4">
            {{ BsForm::text('name')->value(request('name')) }}
        </div>
        <div class="col-md-4">
            {{ BsForm::select('destination_id')->options($destinations)->placeholder(__('Select one')) }}
        </div>
        <div class="col-md-4">
            {{ BsForm::text('email')->value(request('email')) }}
        </div>
        <div class="col-md-4">
            {{ BsForm::text('phone')->value(request('phone')) }}
        </div>
        <div class="col-md-4">
            {{ BsForm::date('check_in')->value(request('check_in')) }}
        </div>
        <div class="col-md-4">
            {{ BsForm::date('check_out')->value(request('check_out')) }}
        </div>
        <div class="col-md-4">
            {{ BsForm::number('perPage')->value(request('perPage', 15))->min(1)->label(trans('inquiries::inquiries.perPage')) }}
        </div>
    </div>

    @slot('footer')
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fas fa fa-fw fa-filter"></i>
            @lang('inquiries::inquiries.actions.filter')
        </button>
    @endslot
@endcomponent
{{ BsForm::close() }}
