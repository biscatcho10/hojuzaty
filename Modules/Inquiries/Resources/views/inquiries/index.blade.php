@extends('dashboard::layouts.default')

@section('title')
    @lang('inquiries::inquiries.plural')
@endsection

@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', trans('inquiries::inquiries.plural'))
        @slot('breadcrumbs', ['dashboard.inquiries.index'])

        @include('inquiries::inquiries.partials.filter')

        @component('dashboard::layouts.components.table-box')
            @slot('title', trans('inquiries::inquiries.actions.list'))
            @slot('tools')
            @endslot

            <thead>
                <tr>
                    <th>@lang('inquiries::inquiries.attributes.name')</th>
                    <th>@lang('inquiries::inquiries.attributes.destination_id')</th>
                    <th>@lang('inquiries::inquiries.attributes.email')</th>
                    <th>@lang('inquiries::inquiries.attributes.phone')</th>
                    <th>@lang('inquiries::inquiries.attributes.check_in')</th>
                    <th>@lang('inquiries::inquiries.attributes.check_out')</th>
                    <th>...</th>
                </tr>
            </thead>
            <tbody>
                @forelse($data as $inquiry)
                    <tr>
                        <td class="d-none d-md-table-cell">
                            {{ $inquiry->name }}
                        </td>
                        <td class="d-none d-md-table-cell">
                            <a href="{{ route('dashboard.destinations.show', $inquiry->destination) }}" target="_blank">{{ $inquiry->destination->name }}</a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            {{ $inquiry->email }}
                        </td>
                        <td class="d-none d-md-table-cell">
                            {{ $inquiry->phone }}
                        </td>
                        <td class="d-none d-md-table-cell">
                            {{ $inquiry->check_in }}
                        </td>
                        <td class="d-none d-md-table-cell">
                            {{ $inquiry->check_out }}
                        </td>
                        <td>
                            @include('inquiries::inquiries.partials.actions.show')
                            @include('inquiries::inquiries.partials.actions.delete')
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="100" class="text-center">@lang('inquiries::inquiries.empty')</td>
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
