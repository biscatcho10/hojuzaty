@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- {{ BsForm::text('name')->attribute(['data-parsley-maxlength' => '191', 'data-parsley-minlength' => '3']) }} --}}

{{-- {{ BsForm::text('link')->attribute(['data-parsley-maxlength' => '191', 'data-parsley-minlength' => '3']) }} --}}

{{-- @if (\Module::collections()->has('Exhibitions'))
    <select2 name="exhibition_id" label="@lang('exhibitions::exhibitions.singular')"
            remote-url="{{ route('exhibitions.select') }}"
            @isset($partner)
            value="{{ $partner->exhibition->id ?? old('exhibition_id') }}"
            @endisset
            :required="true"
    ></select2>
@endif --}}


<label>{{ __('partners::partners.attributes.image') }}</label>
@isset($partner)
    @include('dashboard::layouts.apps.file', [
        'file' => $partner->getFirstMediaUrl('images'),
        'name' => 'image',
    ])
@else
    @include('dashboard::layouts.apps.file', ['name' => 'image'])
@endisset
