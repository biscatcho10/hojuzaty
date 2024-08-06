@extends('dashboard::layouts.default')

@section('title')
    {{ $place->name }}
@endsection
@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', $place->name)
        @slot('breadcrumbs', ['dashboard.places.show', [$destination, $place]])

        <div class="row">
            <div class="col-md-6">
                @component('dashboard::layouts.components.box')
                    @slot('bodyClass', 'p-0')

                    <table class="table table-middle">
                        <tbody>
                        <tr>
                            <th width="200">@lang('destinations::places.attributes.name')</th>
                            <td>{{ $place->name }}</td>
                        </tr>
                        <tr>
                            <th width="200">@lang('destinations::places.attributes.description')</th>
                            <td>{{ $place->description }}</td>
                        </tr>
                        <tr>
                            <th width="200">@lang('destinations::places.attributes.image')</th>
                            <td>
                                <img src="{{ $place->getImage() }}"
                                     class="img img-size-64"
                                     alt="{{ $place->name }}">
                            </td>
                        </tbody>
                    </table>

                    @slot('footer')
                        @include('destinations::places.partials.actions.edit')
                        @include('destinations::places.partials.actions.delete')
                    @endslot
                @endcomponent
            </div>
        </div>
    @endcomponent
@endsection
