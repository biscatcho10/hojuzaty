@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="card-body">
    {{ BsForm::text('address')->required()->attribute('class', 'form-control')->value(Settings::get('address'))->attribute(['data-parsley-minlength' => '3'])->label(__('settings::settings.attributes.address')) }}

    {{ BsForm::text('office_address')->required()->attribute('class', 'form-control')->value(Settings::get('office_address'))->attribute(['data-parsley-minlength' => '3'])->label(__('Office Address')) }}

    {{-- {{ BsForm::text('about_us_title')->required()->attribute('class', 'form-control')->value(Settings::get('about_us_title'))->label(__('settings::settings.attributes.about_us_title')) }} --}}

    {{ BsForm::textarea('about_us_desc')->required()->attribute('class','form-control textarea')->rows(4)->value(Settings::get('about_us_desc'))->attribute(['data-parsley-minlength' => '3'])->label(__('settings::settings.attributes.about_us_desc')) }}

    {{-- {{ BsForm::textarea('our_vision')->required()->rows(3)->attribute('class', 'form-control')->value(Settings::get('our_vision'))->attribute(['data-parsley-minlength' => '3'])->label(__('settings::settings.attributes.our_vision')) }}

    {{ BsForm::textarea('our_mission')->required()->rows(3)->attribute('class', 'form-control')->value(Settings::get('our_mission'))->attribute(['data-parsley-minlength' => '3'])->label(__('settings::settings.attributes.our_mission')) }} --}}

    <div class="row">
        <div class="col-md-12">
            {{ BsForm::textarea('our_vision')->required()->attribute('class','form-control textarea')->rows(4)->value(Settings::get('our_vision'))->attribute(['data-parsley-minlength' => '3'])->label(__('settings::settings.attributes.our_vision')) }}
        </div>
        <div class="col-md-12">
            <label>{{ __('Vision Cover') }}</label>
            @include('dashboard::layouts.apps.file1', [
                'file' => optional(Settings::instance('vision_cover'))->getFirstMediaUrl('vision_cover'),
                'name' => 'vision_cover',
            ])
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            {{ BsForm::textarea('our_mission')->required()->attribute('class','form-control textarea')->rows(4)->value(Settings::get('our_mission'))->attribute(['data-parsley-minlength' => '3'])->label(__('settings::settings.attributes.our_mission')) }}
        </div>
        <div class="col-md-12">
            <label>{{ __('Mission Cover') }}</label>
            @include('dashboard::layouts.apps.file1', [
                'file' => optional(Settings::instance('mission_cover'))->getFirstMediaUrl('mission_cover'),
                'name' => 'mission_cover',
            ])
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
                {{ BsForm::text('founder_words_title')->required()->attribute('class', 'form-control')->value(Settings::get('founder_words_title'))->attribute(['data-parsley-minlength' => '3'])->label(__('Founder Words Title')) }}
        </div>
        <div class="col-md-12">
                {{ BsForm::textarea('founder_words')->required()->attribute('class','form-control textarea')->rows(4)->value(Settings::get('founder_words'))->attribute(['data-parsley-minlength' => '3'])->label(__('Founder Words')) }}
        </div>

        <div class="col-md-12">
            <label>{{ __('Founder Words Image') }}</label>
            @include('dashboard::layouts.apps.file1', [
                'file' => optional(Settings::instance('owner'))->getFirstMediaUrl('owner'),
                'name' => 'owner',
            ])
        </div>
    </div>

</div>
