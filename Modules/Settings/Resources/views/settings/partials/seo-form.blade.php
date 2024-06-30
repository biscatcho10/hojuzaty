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

    {{-- <div class="card">
        <div class="card-header" id="heading1">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                    data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                    # {{ __('Google analytics and Facebook pixel') }}
                </button>
            </h2>
        </div>

        <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordionExample">
            <div class="card-body">

                <div class="row mt-2">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">@lang('settings::settings.attributes.facebook_pixel')</label>
                            <textarea type="text" name="facebook_pixel" class="form-control" rows="3"> {{ Settings::get('facebook_pixel') }} </textarea>
                        </div>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">@lang('settings::settings.attributes.google_id_header')</label>
                            <textarea type="text" name="google_id_head" class="form-control" rows="3"> {{ Settings::get('google_id_head') }} </textarea>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">@lang('settings::settings.attributes.google_id_footer')</label>
                            <textarea type="text" name="google_id_footer" class="form-control" rows="3"> {{ Settings::get('google_id_footer') }} </textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">@lang('settings::settings.attributes.track_code')</label>
                            <textarea type="text" name="track_code" class="form-control" rows="3"> {{ Settings::get('track_code') }} </textarea>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">@lang('settings::settings.attributes.google_analects')</label>
                            <textarea type="text" name="google_analects" class="form-control" rows="3"> {{ Settings::get('google_analects') }} </textarea>
                        </div>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">@lang('settings::settings.attributes.btn_track_code')</label>
                            <textarea type="text" name="btn_track_code" class="form-control" rows="3"> {{ Settings::get('btn_track_code') }} </textarea>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">@lang('settings::settings.attributes.btn_google_id_footer')</label>
                            <textarea type="text" name="btn_google_id_footer" class="form-control" rows="3"> {{ Settings::get('btn_google_id_footer') }} </textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">@lang('settings::settings.attributes.transfer_line')</label>
                            <textarea type="text" name="transfer_line" class="form-control" rows="3"> {{ Settings::get('transfer_line') }} </textarea>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div> --}}

    <div class="card">
        <div class="card-header" id="heading2">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                    data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                    # {{ __('Home Page') }}
                </button>
            </h2>
        </div>

        <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionExample">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        {{ BsForm::text('home_seo_title')->value(Settings::get('home_seo_title'))->label(__('Home SEO Title')) }}
                    </div>
                    <div class="col-6">
                        {{ BsForm::text('home_seo_keywords')->value(Settings::get('home_seo_keywords'))->label(__('Home SEO Keywords')) }}
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        {{ BsForm::textarea('home_seo_description')->value(Settings::get('home_seo_description'))->rows(3)->label(__('Home SEO Description')) }}
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
                    # {{ __('Services Page') }}
                </button>
            </h2>
        </div>

        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample">
            <div class="card-body">

                <div class="row">
                    <div class="col-6">
                        {{ BsForm::text('services_seo_title')->value(Settings::get('services_seo_title'))->label(__('Services SEO Title')) }}
                    </div>
                    <div class="col-6">
                        {{ BsForm::text('services_seo_keywords')->value(Settings::get('services_seo_keywords'))->label(__('Services SEO Keywords')) }}
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        {{ BsForm::textarea('services_seo_description')->value(Settings::get('services_seo_description'))->rows(3)->label(__('Services SEO Description')) }}
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- <div class="card">
        <div class="card-header" id="heading4">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                    data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                    # {{ __('Project Page') }}
                </button>
            </h2>
        </div>

        <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
            <div class="card-body">

                <div class="row">
                    <div class="col-6">
                        {{ BsForm::text('project_seo_title')->value(Settings::get('project_seo_title'))->label(__('project SEO Title')) }}
                    </div>
                    <div class="col-6">
                        {{ BsForm::text('project_seo_keywords')->value(Settings::get('project_seo_keywords'))->label(__('project SEO Keywords')) }}
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        {{ BsForm::textarea('project_seo_description')->value(Settings::get('project_seo_description'))->rows(3)->label(__('project SEO Description')) }}
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
