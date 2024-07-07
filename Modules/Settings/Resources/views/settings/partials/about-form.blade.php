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
    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        @lang('settings::settings.attributes.why_chosse_us')
                    </button>
                </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            @bsMultilangualFormTabs
                                {{ BsForm::textarea('why_chosse_us')->required()->attribute('class', 'form-control textarea')->rows(4)->value(Settings::locale($locale->code)->get('why_chosse_us'))->attribute(['data-parsley-minlength' => '3'])->label(__('settings::settings.attributes.why_chosse_us')) }}
                            @endBsMultilangualFormTabs
                        </div>
                        <div class="col-md-12">
                            <label>{{ __('Why Choose Us Cover') }}</label>
                            @include('dashboard::layouts.apps.file', [
                                'file' => optional(Settings::instance('why_choose_us_cover'))->getFirstMediaUrl(
                                    'why_choose_us_cover'),
                                'name' => 'why_choose_us_cover',
                            ])
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        @lang('settings::settings.attributes.our_vision')
                    </button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            @bsMultilangualFormTabs
                                {{ BsForm::textarea('our_vision')->required()->attribute('class', 'form-control textarea')->rows(4)->value(Settings::locale($locale->code)->get('our_vision'))->attribute(['data-parsley-minlength' => '3'])->label(__('settings::settings.attributes.our_vision')) }}
                            @endBsMultilangualFormTabs
                        </div>
                        <div class="col-md-12">
                            <label>{{ __('Vision Cover') }}</label>
                            @include('dashboard::layouts.apps.file1', [
                                'file' => optional(Settings::instance('vision_cover'))->getFirstMediaUrl(
                                    'vision_cover'),
                                'name' => 'vision_cover',
                            ])
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        @lang('settings::settings.attributes.our_mission')
                    </button>
                </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            @bsMultilangualFormTabs
                                {{ BsForm::textarea('our_mission')->required()->attribute('class', 'form-control textarea')->rows(4)->value(Settings::locale($locale->code)->get('our_mission'))->attribute(['data-parsley-minlength' => '3'])->label(__('settings::settings.attributes.our_mission')) }}
                            @endBsMultilangualFormTabs
                        </div>
                        <div class="col-md-12">
                            <label>{{ __('Mission Cover') }}</label>
                            @include('dashboard::layouts.apps.file1', [
                                'file' => optional(Settings::instance('mission_cover'))->getFirstMediaUrl(
                                    'mission_cover'),
                                'name' => 'mission_cover',
                            ])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
