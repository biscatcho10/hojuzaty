@extends('dashboard::layouts.default')

@section('title')
    @lang('destinations::destinations.actions.create')
@endsection

@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', trans('destinations::destinations.plural'))
        @slot('breadcrumbs', ['dashboard.destinations.create'])

        {{ BsForm::resource('destinations::destinations')->post(route('dashboard.destinations.store'), ['files' => true,'data-parsley-validate']) }}
        @component('dashboard::layouts.components.box')
            @slot('title', trans('destinations::destinations.actions.create'))

            @include('destinations::destinations.partials.form')

            @slot('footer')
                {{ BsForm::submit()->label(trans('destinations::destinations.actions.save')) }}
            @endslot
        @endcomponent
        {{ BsForm::close() }}

    @endcomponent
@endsection
