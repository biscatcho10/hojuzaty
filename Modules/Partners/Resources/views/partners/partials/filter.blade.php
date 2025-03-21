{{ BsForm::resource('partners::partners')->get(url()->current()) }}
@component('dashboard::layouts.components.accordion')
    @slot('title', trans('partners::partners.actions.filter'))

    <div class="row">
        {{-- <div class="col-md-3">
            {{ BsForm::text('name')->value(request('name')) }}
        </div> --}}
        <div class="col-md-3">
            {{ BsForm::number('perPage')->value(request('perPage', 15))->min(1)->label(trans('partners::partners.perPage')) }}
        </div>

        {{-- <div class="col-md-3">
            {{ BsForm::select('exhibition')->options($exhibition)->placeholder('Select the exhibition') }}
        </div> --}}
    </div>

    @slot('footer')
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fas fa fa-fw fa-filter"></i>
            @lang('partners::partners.actions.filter')
        </button>
    @endslot
@endcomponent
{{ BsForm::close() }}
