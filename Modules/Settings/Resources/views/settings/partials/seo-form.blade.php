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
                    # {{ __('About Page') }}
                </button>
            </h2>
        </div>

        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample">
            <div class="card-body">

                <div class="row">
                    <div class="col-6">
                        {{ BsForm::text('about_seo_title')->value(Settings::get('about_seo_title'))->label(__('About SEO Title')) }}
                    </div>
                    <div class="col-6">
                        {{ BsForm::text('about_seo_keywords')->value(Settings::get('about_seo_keywords'))->label(__('About SEO Keywords')) }}
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        {{ BsForm::textarea('about_seo_description')->value(Settings::get('about_seo_description'))->rows(3)->label(__('About SEO Description')) }}
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
                    # {{ __('Blogs Page') }}
                </button>
            </h2>
        </div>

        <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
            <div class="card-body">

                <div class="row">
                    <div class="col-6">
                        {{ BsForm::text('blogs_seo_title')->value(Settings::get('blogs_seo_title'))->label(__('Blogs SEO Title')) }}
                    </div>
                    <div class="col-6">
                        {{ BsForm::text('blogs_seo_keywords')->value(Settings::get('blogs_seo_keywords'))->label(__('Blogs SEO Keywords')) }}
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        {{ BsForm::textarea('blogs_seo_description')->value(Settings::get('blogs_seo_description'))->rows(3)->label(__('Blogs SEO Description')) }}
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
                    # {{ __('Destinations Page') }}
                </button>
            </h2>
        </div>

        <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
            <div class="card-body">

                <div class="row">
                    <div class="col-6">
                        {{ BsForm::text('destinations_seo_title')->value(Settings::get('destinations_seo_title'))->label(__('Destinations SEO Title')) }}
                    </div>
                    <div class="col-6">
                        {{ BsForm::text('destinations_seo_keywords')->value(Settings::get('destinations_seo_keywords'))->label(__('Destinations SEO Keywords')) }}
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        {{ BsForm::textarea('destinations_seo_description')->value(Settings::get('destinations_seo_description'))->rows(3)->label(__('Destinations SEO Description')) }}
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
                    # {{ __('Inquiry Page') }}
                </button>
            </h2>
        </div>

        <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionExample">
            <div class="card-body">

                <div class="row">
                    <div class="col-6">
                        {{ BsForm::text('inquiry_seo_title')->value(Settings::get('inquiry_seo_title'))->label(__('Inquiry SEO Title')) }}
                    </div>
                    <div class="col-6">
                        {{ BsForm::text('inquiry_seo_keywords')->value(Settings::get('inquiry_seo_keywords'))->label(__('Inquiry SEO Keywords')) }}
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        {{ BsForm::textarea('inquiry_seo_description')->value(Settings::get('inquiry_seo_description'))->rows(3)->label(__('Inquiry SEO Description')) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
