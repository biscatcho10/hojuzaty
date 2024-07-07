@extends('dashboard::layouts.default')

@section('title')
    @lang('sliders::sliders.plural')
@endsection

@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', trans('sliders::sliders.plural'))
        @slot('breadcrumbs', ['dashboard.sliders.index'])

        @include('sliders::sliders.partials.filter')

        @component('dashboard::layouts.components.table-box')
            @slot('title', trans('sliders::sliders.actions.list'))
            @slot('tools')
                @include('sliders::sliders.partials.actions.create')
            @endslot

            <thead>
                <tr>
                    <th>@lang('sliders::sliders.attributes.image')</th>
                    <th>@lang('sliders::sliders.attributes.title')</th>
                    <th>...</th>
                </tr>
            </thead>
            <tbody>
                @forelse($data as $sliders)
                    <tr>
                        <td class="d-none d-md-table-cell">
                            <img src="{{ $slider->getImage() }}" alt="Product 1" class="img-size-64 mr-2" style="height: 64;">
                        </td>
                        <td class="d-none d-md-table-cell">
                            {{ $slider->title }}
                        </td>
                        <td>
                            @include('sliders::sliders.partials.actions.show')
                            @include('sliders::sliders.partials.actions.edit')
                            @include('sliders::sliders.partials.actions.delete')
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="100" class="text-center">@lang('sliders::sliders.empty')</td>
                    </tr>
                @endforelse
            </tbody>
            @if ($data->hasPages())
                @slot('footer')
                    {{ $data->links() }}
                @endslot
            @endif
        @endcomponent
    @endcomponent
@endsection
