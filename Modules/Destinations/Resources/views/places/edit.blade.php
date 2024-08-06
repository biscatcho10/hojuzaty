@extends('dashboard::layouts.default')

@section('title')
    {{ $place->name }}
@endsection

@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', $place->name)
        @slot('breadcrumbs', ['dashboard.places.edit', [$destination, $place]])

        {{ BsForm::putModel($place, route('dashboard.places.update', [$destination, $place]), ['files' => true,'data-parsley-validate']) }}
        @component('dashboard::layouts.components.box')
            @slot('title', trans('destinations::places.actions.edit'))

            @include('destinations::places.partials.form')

            @slot('footer')
                {{ BsForm::submit()->label(trans('destinations::places.actions.save')) }}
            @endslot
        @endcomponent
        {{ BsForm::close() }}

    @endcomponent
@endsection
