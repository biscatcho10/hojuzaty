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
                            <tr>
                                <th width="200">@lang('destinations::destinations.attributes.description')</th>
                                <td>{{ $destination->description }}</td>
                            </tr>
                            <tr>
                                <th width="200">@lang('destinations::destinations.attributes.image')</th>
                                <td>
                                    <img src="{{ $destination->getImage() }}" class="img img-size-64" alt="{{ $destination->name }}">
                                </td>
                            </tr>
                            <tr>
                                <th width="200">@lang('destinations::destinations.attributes.cover')</th>
                                <td>
                                    <img src="{{ $destination->getCover() }}" class="img img-size-64"
                                        alt="{{ $destination->name }}">
                                </td>
                            </tr>
                            <tr>
                                <th width="200">@lang('destinations::destinations.attributes.gallery')</th>
                                <td>
                                    <div class="row">
                                        @foreach ($destination->galleries as $media)
                                            <div class="col-4">
                                                <img src="{{ $media->getUrl() }}" class="img img-size-64"
                                                    alt="{{ $destination->name }}">
                                            </div>
                                        @endforeach
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    @slot('footer')
                        @include('destinations::destinations.partials.actions.edit')
                        @include('destinations::destinations.partials.actions.delete')
                    @endslot
                @endcomponent
            </div>
            <div class="col-md-6">
                @component('dashboard::layouts.components.box-link')
                    @slot('bodyClass', 'p-0')
                    @slot('title', __('destinations::places.plural'))
                    @slot('link')
                        <a href="{{ route('dashboard.places.index', $destination) }}" class="btn btn-outline-success btn-sm">
                            <i class="fas fa-umbrella-beach"></i>
                            {{ $destination->places->count() }}
                        </a>
                    @endslot

                    <ul class="list-group list-group-flush">
                        @foreach ($destination->places as $place)
                            <li class="list-group-item">
                                <a href="{{ route('dashboard.places.show', [$destination, $place]) }}">
                                    <img src="{{ $place->getImage() }}" class="img img-size-32 rounded-circle" height="32"
                                        alt="{{ $place->name }}">
                                    {{ $place->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endcomponent
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @component('dashboard::layouts.components.box')
                    @slot('title', __('destinations::bookings.plural'))

                    <div class="table-responsive">
                        <table class="table table-middle">
                            <thead>
                                <tr>
                                    <th>@lang('destinations::bookings.attributes.name')</th>
                                    <th>@lang('destinations::bookings.attributes.phone')</th>
                                    <th>@lang('destinations::bookings.attributes.email')</th>
                                    <th>@lang('destinations::bookings.attributes.check_in')</th>
                                    <th>@lang('destinations::bookings.attributes.check_out')</th>
                                    <th>@lang('destinations::bookings.attributes.created_at')</th>
                                    <th>...</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($destination->bookings as $booking)
                                    <tr>
                                        <td>{{ $booking->first_name . ' ' . $booking->second_name }}</td>
                                        <td>{{ $booking->phone }}</td>
                                        <td>{{ $booking->email }}</td>
                                        <td>{{ $booking->check_in }}</td>
                                        <td>{{ $booking->check_out }}</td>
                                        <td>{{ Carbon\Carbon::parse($booking->created_at)->format('Y-m-d') }}</td>
                                        <td>
                                            @include('destinations::destinations.partials.actions.show-booking')
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endcomponent
            </div>
        </div>
    @endcomponent
@endsection
