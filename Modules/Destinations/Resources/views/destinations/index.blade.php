@extends('dashboard::layouts.default')

@section('title')
    @lang('destinations::destinations.plural')
@endsection

@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', trans('destinations::destinations.plural'))
        @slot('breadcrumbs', ['dashboard.destinations.index'])

        @include('destinations::destinations.partials.filter')

        @component('dashboard::layouts.components.table-box')
            @slot('title', trans('destinations::destinations.actions.list'))
            @slot('tools')
                @include('destinations::destinations.partials.actions.create')
            @endslot

            <thead>
                <tr>
                    <th>@lang('destinations::destinations.attributes.image')</th>
                    <th>@lang('destinations::destinations.attributes.name')</th>
                    <th style="width: 160px">...</th>
                </tr>
            </thead>
            <tbody>
                @forelse($destinations as $destination)
                    <tr>
                        <td>
                            <img src="{{ $destination->getFirstMediaUrl('image') }}"
                                 alt="{{ $destination->name }}"
                                 class="img-circle img-size-32 mr-2 rounded">
                        </td>
                        <td class="d-none d-md-table-cell">
                            {{ $destination->name }}
                        </td>

                        <td style="width: 160px">
                            @include('destinations::destinations.partials.actions.show')
                            @include('destinations::destinations.partials.actions.edit')
                            @include('destinations::destinations.partials.actions.delete')
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="100" class="text-center">@lang('destinations::destinations.empty')</td>
                    </tr>
                @endforelse
            </tbody>
            @if ($destinations->hasPages())
                @slot('footer')
                    {{ $destinations->links() }}
                @endslot
            @endif
        @endcomponent
    @endcomponent
@endsection
