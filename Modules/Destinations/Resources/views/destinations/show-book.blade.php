@extends('dashboard::layouts.default')

@section('title')
    {{ $booking->name }}
@endsection
@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', $booking->name)
        @slot('breadcrumbs', ['dashboard.bookings.show', [$destination, $booking]])

        <div class="row">
            <div class="col-md-12">
                @component('dashboard::layouts.components.box')
                    @slot('bodyClass', 'p-0')

                    <table class="table table-middle">
                        <tbody>
                            <tr>
                                <th width="200">@lang('destinations::bookings.attributes.name')</th>
                                <td>{{ $booking->name }}</td>
                            </tr>
                            <tr>
                                <th width="200">@lang('destinations::bookings.attributes.email')</th>
                                <td>{{ $booking->email }}</td>
                            </tr>
                            <tr>
                                <th width="200">@lang('destinations::bookings.attributes.phone')</th>
                                <td>{{ $booking->phone }}</td>
                            </tr>
                            <tr>
                                <th width="200">@lang('destinations::destinations.singular')</th>
                                <td>{{ $booking->destination->name }}</td>
                            </tr>
                            <tr>
                                <th width="200">@lang('destinations::bookings.attributes.check_in')</th>
                                <td>{{ $booking->check_in }}</td>
                            </tr>
                            <tr>
                                <th width="200">@lang('destinations::bookings.attributes.check_out')</th>
                                <td>{{ $booking->check_out }}</td>
                            </tr>
                            <tr>
                                <th width="200">@lang('destinations::bookings.attributes.message')</th>
                                <td>{{ $booking->message }}</td>
                            </tr>
                        </tbody>
                    </table>

                    @slot('footer')
                    @endslot
                @endcomponent
            </div>
        </div>
    @endcomponent
@endsection
