{{ BsForm::resource('sliders::sliders')->get(url()->current()) }}
@component('dashboard::layouts.components.accordion')
    @slot('title', trans('sliders::sliders.actions.filter'))

    <div class="row">
        <div class="col-md-4">
            {{ BsForm::text('title')->value(request('title')) }}
        </div>
        <div class="col-md-4">
            {{ BsForm::text('content')->value(request('content')) }}
        </div>
        <div class="col-md-4">
            {{ BsForm::number('perPage')
                ->value(request('perPage', 15))
                ->min(1)
                ->label(trans('sliders::sliders.perPage')) }}
        </div>
    </div>

    @slot('footer')
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fas fa fa-fw fa-filter"></i>
            @lang('sliders::sliders.actions.filter')
        </button>
    @endslot
@endcomponent
{{ BsForm::close() }}
