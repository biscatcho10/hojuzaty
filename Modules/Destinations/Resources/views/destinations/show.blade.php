@extends('dashboard::layouts.default')

@section('title')
    {{ $destination->name }}
@endsection
@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', $destination->name)
        @slot('breadcrumbs', ['dashboard.destinations.show', $destination])

        <div class="row">
            <div class="col-md-6">
                @component('dashboard::layouts.components.box')
                    @slot('bodyClass', 'p-0')

                    <table class="table table-middle">
                        <tbody>
                        <tr>
                            <th width="200">@lang('destinations::destinations.attributes.name')</th>
                            <td>{{ $destination->name }}</td>
                        </tr>
                        </tbody>
                    </table>

                    @slot('footer')
                        @include('destinations::destinations.partials.actions.edit')
                        @include('destinations::destinations.partials.actions.delete')
                    @endslot
                @endcomponent
            </div>
        </div>

    @endcomponent
@endsection
