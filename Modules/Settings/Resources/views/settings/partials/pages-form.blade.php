@if ($errors
    ->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors
                ->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="accordion" id="accordionExample">

    <div class="card">
        <div class="card-header" id="heading1">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                    data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                    # {{ __('Slider Section') }}
                </button>
            </h2>
        </div>

        <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordionExample">
            <div class="card-body">

                <div class="row">
                    <div class="col-12">
                        {{ BsForm::text('slider_text')
                            ->value(Settings::get('slider_text'))
                            ->label(__('Slider Text')) }}
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="">{{ __('settings::settings.attributes.video_type') }}</label>
                            <select class="form-control video_type" name="video_type" id="video_type">
                                <option>{{ __('Select one') }}</option>
                                <option value="upload" {{ Settings::get('video_type') === 'upload' ? 'selected' : '' }}>
                                    {{ __('Upload') }}</option>
                                <option value="url" {{ Settings::get('video_type') === 'url' ? 'selected' : '' }}>
                                    {{ __('Link') }}</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12">
                        <div @if (Settings::get('video_type') == 'upload') style="display: none" @endif
                            class="link-wrapper hide_div">
                            {{ BsForm::text('slider_url')
                                ->attribute('class', 'form-control')
                                ->label(__('settings::settings.attributes.video_link'))
                                ->attribute('id', 'url-link')
                                ->attribute('placeholder', 'www.example.com')
                                ->attribute('data-parsley-type', 'url')
                                ->attribute('data-parsley-type-message', __('input data must be url'))
                                ->attribute('data-parsley-trigger', 'keyup')
                                ->attribute('data-parsley-required-message', __('link is required'))
                                ->value(Settings::get('slider_url'))
                                ->note(__('link must be embed')) }}
                        </div>

                        <div @if (Settings::get('video_type') == 'url') style="display: none" @endif
                            class="upload-wrapper hide_div">
                            <div class="form-group">
                                <label
                                    for="category-image ml-5 mt-2">{{ __('settings::settings.attributes.video') }}</label>
                                @include('dashboard::layouts.apps.video', [
                                    'file' => optional(Settings::instance('slider_video'))->getFirstMediaUrl('slider_video'),
                                    'name' => 'slider_video',
                                ])
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="heading2">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                    data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                    # {{ __('About Section') }}
                </button>
            </h2>
        </div>

        <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionExample">
            <div class="card-body">

                <div class="row">
                    <div class="col-12">
                        {{ BsForm::text('about_title')->value(Settings::get('about_title'))->label(__('About Us Section Title')) }}
                    </div>

                    <div class="col-12">
                        {{ BsForm::textarea('about_desc')->rows(3)->attribute('class','form-control textarea')->value(Settings::get('about_desc'))->label(__('About Us Section Description')) }}
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="">{{ __('settings::settings.attributes.video_type') }}</label>
                            <select class="form-control about_video_type" name="about_video_type" id="about_video_type">
                                <option>{{ __('Select one') }}</option>
                                <option value="upload" {{ Settings::get('about_video_type') === 'upload' ? 'selected' : '' }}>
                                    {{ __('Upload') }}</option>
                                <option value="url" {{ Settings::get('about_video_type') === 'url' ? 'selected' : '' }}>
                                    {{ __('Link') }}</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12">
                        <div @if (Settings::get('about_video_type') == 'upload') style="display: none" @endif
                            class="about-link-wrapper hide_div">
                            {{ BsForm::text('about_url')
                                ->attribute('class', 'form-control')
                                ->label(__('settings::settings.attributes.video_link'))
                                ->attribute('id', 'about-url-link')
                                ->attribute('placeholder', 'www.example.com')
                                ->attribute('data-parsley-type', 'url')
                                ->attribute('data-parsley-type-message', __('input data must be url'))
                                ->attribute('data-parsley-trigger', 'keyup')
                                ->attribute('data-parsley-required-message', __('link is required'))
                                ->value(Settings::get('about_url'))
                                ->note(__('link must be embed')) }}
                        </div>

                        <div @if (Settings::get('about_video_type') == 'url') style="display: none" @endif
                            class="about-upload-wrapper hide_div">
                            <div class="form-group">
                                <label for="category-image ml-5 mt-2">{{ __('settings::settings.attributes.video') }}</label>
                                @include('dashboard::layouts.apps.video', [
                                    'file' => optional(Settings::instance('about_video'))->getFirstMediaUrl('about_video'),
                                    'name' => 'about_video',
                                ])
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="heading3">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                    data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                    # {{ __('Our Philosophy Section') }}
                </button>
            </h2>
        </div>

        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample">
            <div class="card-body">

                <div class="row">
                    <div class="col-12">
                        {{ BsForm::text('our_philosophy_title')->value(Settings::get('our_philosophy_title'))->label(__('Our Philosophy Section Title')) }}
                    </div>

                    <div class="col-12">
                        {{ BsForm::textarea('our_philosophy_desc')->rows(3)->attribute('class','form-control textarea')->value(Settings::get('our_philosophy_desc'))->label(__('Our Philosophy Section Description')) }}
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="heading4">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                    data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                    # {{ __('Our Clients Section') }}
                </button>
            </h2>
        </div>

        <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
            <div class="card-body">

                <div class="row">
                    <div class="col-12">
                        {{ BsForm::text('our_clients_title')->value(Settings::get('our_clients_title'))->label(__('Our Clients Section Title')) }}
                    </div>

                    <div class="col-12">
                        {{ BsForm::textarea('our_clients_desc')->rows(3)->attribute('class','form-control textarea')->value(Settings::get('our_clients_desc'))->label(__('Our Clients Section Description')) }}
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="heading5">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                    data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                    # {{ __('Our Services Section') }}
                </button>
            </h2>
        </div>

        <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
            <div class="card-body">

                <div class="row">
                    <div class="col-12">
                        {{ BsForm::text('our_services_title')->value(Settings::get('our_services_title'))->label(__('Our Services Section Title')) }}
                    </div>

                    <div class="col-12">
                        {{ BsForm::textarea('our_services_desc')->rows(3)->attribute('class','form-control textarea')->value(Settings::get('our_services_desc'))->label(__('Our Services Section Description')) }}
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="heading6">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                    data-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
                    # {{ __('Let\'s talk Section') }}
                </button>
            </h2>
        </div>

        <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionExample">
            <div class="card-body">

                <div class="row">
                    <div class="col-12">
                        {{ BsForm::text('talk_title')->value(Settings::get('talk_title'))->label(__('Let\'s talk Section Title')) }}
                    </div>

                    <div class="col-12">
                        {{ BsForm::text('talk_link')
                        ->attribute('pattern','https://.*')
                        ->value(Settings::get('talk_link'))
                        ->label(__('Let\'s talk Section Link')) }}
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="heading7">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                    data-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
                    # {{ __('Navbar') }}
                </button>
            </h2>
        </div>

        <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionExample">
            <div class="card-body">

                <div class="row">
                    <div class="col-12">
                        {{ BsForm::textarea('version_desc')->rows(3)->attribute('class','form-control')->value(Settings::get('version_desc'))->label(__('Version Description')) }}
                    </div>

                    <div class="col-12">
                        {{ BsForm::text('version_link')
                        ->attribute('pattern','https://.*')
                        ->value(Settings::get('version_link'))
                        ->label(__('Version Link')) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="heading8">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                    data-target="#collapse8" aria-expanded="true" aria-controls="collapse8">
                    # {{ __('Sidebar') }}
                </button>
            </h2>
        </div>

        <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordionExample">
            <div class="card-body">

                <div class="row">
                    <div class="col-12">
                        {{ BsForm::textarea('sidebar_desc')->rows(3)->attribute('class','form-control')->value(Settings::get('sidebar_desc'))->label(__('Sidebar Description')) }}
                    </div>

                    <div class="col-12">
                        {{ BsForm::text('sidebar_link')
                        ->attribute('pattern','https://.*')
                        ->value(Settings::get('sidebar_link'))
                        ->label(__('Sidebar Link')) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@push('js')
    @include('settings::settings.includes.scripts')
@endpush
