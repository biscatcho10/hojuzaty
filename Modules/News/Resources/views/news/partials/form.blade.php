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
{{ BsForm::text('title')->required()->attribute(['data-parsley-maxlength' => '191','data-parsley-minlength' => '3']) }}
{{ BsForm::textarea('content')->attribute('class','form-control textarea')->required()->rows(4) }}
@endBsMultilangualFormTabs


<label>{{ __('news::news.attributes.image') }}</label>
@isset($news)
    @include('dashboard::layouts.apps.file1', [
        'file' => $news->getFirstMediaUrl('images'),
        'name' => 'image'
    ])
@else
    @include('dashboard::layouts.apps.file1', ['name' => 'image'])
@endisset
