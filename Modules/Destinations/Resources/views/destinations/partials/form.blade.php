@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="accordion" id="accordionExample">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    @lang('Main Info')
                </button>
            </h2>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                @bsMultilangualFormTabs
                    {{ BsForm::text('name')->attribute(['data-parsley-maxlength' => '191', 'data-parsley-minlength' => '3']) }}

                    {{ BsForm::textarea('description')->attribute(['rows' => 3]) }}
                @endBsMultilangualFormTabs
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    @lang('Media and Images')
                </button>
            </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">

                <label>{{ __('destinations::destinations.attributes.image') }}</label>
                @isset($destination)
                    @include('dashboard::layouts.apps.file', [
                        'file' => $destination->getFirstMediaUrl('images'),
                        'name' => 'image',
                    ])
                @else
                    @include('dashboard::layouts.apps.file', ['name' => 'image'])
                @endisset


                <label>{{ __('destinations::destinations.attributes.cover') }}</label>
                @isset($destination)
                    @include('dashboard::layouts.apps.file', [
                        'file' => $destination->getFirstMediaUrl('covers'),
                        'name' => 'cover',
                    ])
                @else
                    @include('dashboard::layouts.apps.file', ['name' => 'cover'])
                @endisset

                <label>{{ __('destinations::destinations.attributes.gallery') }}</label>
                @isset($destination)
                    @include('dashboard::layouts.apps.multi', [
                        'name' => 'galleries[]',
                        'images' => $destination->galleries,
                    ])
                @else
                    @include('dashboard::layouts.apps.multi', ['name' => 'galleries[]'])
                @endisset


            </div>
        </div>
    </div>
</div>
