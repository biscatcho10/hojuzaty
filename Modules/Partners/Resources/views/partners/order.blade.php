@extends('dashboard::layouts.default')

@section('title')
    @lang('partners::partners.actions.order')
@endsection

@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', trans('partners::partners.actions.order'))
        @slot('breadcrumbs', ['dashboard.partners.order'])

        {{ BsForm::resource('partners::partners')->post(route('dashboard.order.partners')) }}
        @component('dashboard::layouts.components.box')
            @slot('title')
                <i class="fas fa-sort-amount-up-alt"></i>
                {{ __('Drag And Drop To Reoder The partners') }}
            @endslot

            <table class="grid table table-striped- table-bordered table-hover table-checkable text-center" id="sortFixed">
                <tbody>
                    <thead>
                        <tr>
                            <th>{{ __('ID') }}</th>
                            <th>{{ __('partners::partners.attributes.name') }}</th>
                        </tr>
                    </thead>
                    @foreach ($partners as $item)
                        <tr style="cursor: pointer;">
                            <input type="hidden" name='partners[]' value="{{ $item->id }}" class="form-controldrag">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>
                                <img src="{{ $item->getImage() }}" alt="Product 1" class="img-circle img-size-32 mr-2"
                                    style="height: 32px;">
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            @slot('footer')
                {{ BsForm::submit()->label(trans('order')) }}
            @endslot
        @endcomponent
        {{ BsForm::close() }}

    @endcomponent
@endsection

@push('js')
    @include('dashboard::layouts.apps.rank')
@endpush
