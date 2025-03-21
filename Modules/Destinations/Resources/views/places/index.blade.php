@extends('dashboard::layouts.default')

@section('title')
    @lang('destinations::places.plural')
@endsection

@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', trans('destinations::places.plural'))
        @slot('breadcrumbs', ['dashboard.places.index', $destination])

        @include('destinations::places.partials.filter')

        @component('dashboard::layouts.components.table-box')
            @slot('title', trans('destinations::places.actions.list'))
            @slot('tools')
                @include('destinations::places.partials.actions.create')
            @endslot

            <thead>
                <tr>
                    <th>@lang('destinations::places.attributes.image')</th>
                    <th>@lang('destinations::places.attributes.name')</th>
                    <th style="width: 160px">...</th>
                </tr>
            </thead>
            <tbody>
                @forelse($places as $place)
                    <tr>
                        <td>
                            <img src="{{ $place->getImage() }}" alt="{{ $place->name }}"
                                class="img-circle img-size-32 mr-2 rounded">
                        </td>
                        <td class="d-none d-md-table-cell">
                            {{ $place->name }}
                        </td>

                        <td style="width: 160px">
                            @include('destinations::places.partials.actions.show')
                            @include('destinations::places.partials.actions.edit')
                            @include('destinations::places.partials.actions.delete')
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="100" class="text-center">@lang('destinations::places.empty')</td>
                    </tr>
                @endforelse
            </tbody>
            @if ($places->hasPages())
                @slot('footer')
                    {{ $places->links() }}
                @endslot
            @endif
        @endcomponent
    @endcomponent
@endsection
