@extends('dashboard::layouts.default')

@section('title')
    @lang('destinations::places.actions.create')
@endsection

@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', trans('destinations::places.plural'))
        @slot('breadcrumbs', ['dashboard.places.create', $destination])

        {{ BsForm::post(route('dashboard.places.store', $destination), ['files' => true,'data-parsley-validate']) }}
        @component('dashboard::layouts.components.box')
            @slot('title', trans('destinations::places.actions.create'))

            @include('destinations::places.partials.form')

            @slot('footer')
                {{ BsForm::submit()->label(trans('destinations::places.actions.save')) }}
            @endslot
        @endcomponent
        {{ BsForm::close() }}

    @endcomponent
@endsection
