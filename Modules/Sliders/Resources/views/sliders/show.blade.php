@extends('dashboard::layouts.default')

@section('title')
    {{ $slider->title }}
@endsection
@section('content')
    @component('dashboard::layouts.components.page')
        @slot('title', $slider->title)
        @slot('breadcrumbs', ['dashboard.sliders.show', $slider])

        <div class="row">
            <div class="col-md-8">
                @component('dashboard::layouts.components.box')
                    @slot('bodyClass', 'p-0')

                    <table class="table table-middle">
                        <tbody>
                            <tr>
                                <th>@lang('sliders::sliders.attributes.title')</th>
                                <td>{{ $slider->title }}</td>
                            </tr>
                            <tr>
                                <th>@lang('sliders::sliders.attributes.content')</th>
                                <td>{!! $slider->content !!}</td>
                            </tr>
                            <tr>
                                <th>@lang('sliders::sliders.attributes.image')</th>
                                <td>
                                    <img src="{{ $slider->getImage() }}" class="img img-size-" alt="{{ $slider->title }}" width="300px">
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    @slot('footer')
                        @include('sliders::sliders.partials.actions.edit')
                        @include('sliders::sliders.partials.actions.delete')
                    @endslot
                @endcomponent
            </div>
        </div>
    @endcomponent
@endsection
