@extends('dashboard::layouts.default')

@section('title')
    {{ $inquiry->title }}
@endsection
@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', $inquiry->title)
        @slot('breadcrumbs', ['dashboard.inquiries.show', $inquiry])

        <div class="row">
            <div class="col-md-8">
                @component('dashboard::layouts.components.box')
                    @slot('bodyClass', 'p-0')

                    <table class="table table-middle">
                        <tbody>
                            <tr>
                                <th>@lang('inquiries::inquiries.attributes.name')</th>
                                <td>{{ $inquiry->name }}</td>
                            </tr>
                            <tr>
                                <th>@lang('inquiries::inquiries.attributes.email')</th>
                                <td>{{ $inquiry->email }}</td>
                            </tr>
                            <tr>
                                <th>@lang('inquiries::inquiries.attributes.phone')</th>
                                <td>{{ $inquiry->phone }}</td>
                            </tr>
                            <tr>
                                <th>@lang('inquiries::inquiries.attributes.check_in')</th>
                                <td>{{ $inquiry->check_in }}</td>
                            </tr>
                            <tr>
                                <th>@lang('inquiries::inquiries.attributes.check_out')</th>
                                <td>{{ $inquiry->check_out }}</td>
                            </tr>
                            <tr>
                                <th>@lang('inquiries::inquiries.attributes.message')</th>
                                <td>{{ $inquiry->message }}</td>
                            </tr>
                        </tbody>
                    </table>

                    @slot('footer')
                        @include('inquiries::inquiries.partials.actions.delete')
                    @endslot
                @endcomponent
            </div>
        </div>
    @endcomponent
@endsection
