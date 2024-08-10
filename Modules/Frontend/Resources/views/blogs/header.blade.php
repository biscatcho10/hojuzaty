<header style="background-image: url('{{ asset('frontend/images/blogs-bg.jpg') }}')" class="header-mini">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- start brodcuramb -->
                <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">@lang('Home')</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            @lang('Blogs')
                        </li>
                    </ol>
                </nav>

                <!-- start title page -->
                <h1>@lang('Our Blogs')</h1>
            </div>
        </div>
    </div>
</header>
