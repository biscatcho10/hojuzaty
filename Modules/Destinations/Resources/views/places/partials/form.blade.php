@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@bsMultilangualFormTabs
    {{ BsForm::text('name')->label(__('destinations::places.attributes.name'))->attribute(['data-parsley-maxlength' => '191', 'data-parsley-minlength' => '3']) }}

    {{ BsForm::textarea('description')->label(__('destinations::places.attributes.description'))->attribute(['rows' => 3]) }}
@endBsMultilangualFormTabs

<label>{{ __('destinations::places.attributes.image') }}</label>
@isset($place)
    @include('dashboard::layouts.apps.file', [
        'file' => $place->getImage(),
        'name' => 'image',
    ])
@else
    @include('dashboard::layouts.apps.file', ['name' => 'image'])
@endisset
