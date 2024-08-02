@extends('dashboard::layouts.default')

@section('title')
    {{ $destination->name }}
@endsection

@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', $destination->name)
        @slot('breadcrumbs', ['dashboard.destinations.edit', $destination])

        {{ BsForm::resource('destinations::destinations')->putModel($destination, route('dashboard.destinations.update', $destination), ['files' => true,'data-parsley-validate']) }}
        @component('dashboard::layouts.components.box')
            @slot('title', trans('destinations::destinations.actions.edit'))

            @include('destinations::destinations.partials.form')

            @slot('footer')
                {{ BsForm::submit()->label(trans('destinations::destinations.actions.save')) }}
            @endslot
        @endcomponent
        {{ BsForm::close() }}

    @endcomponent
@endsection
