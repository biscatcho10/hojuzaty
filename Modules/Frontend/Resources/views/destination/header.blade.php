<header style="background-image: url('{{ $destination->getCover() }}')" class="header-mini">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-12 d-flex flex-column h-100">
                <!-- start brodcuramb -->
                <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"></a>@lang('Home')</li>
                        <li class="breadcrumb-item"><a href="{{ route('destinations') }}">@lang('Destinations')</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $destination->name }}</li>
                    </ol>
                </nav>

                <!-- start title page -->
                <h1
                    class="custom-h1 text-center mt-0 flex-grow-1 d-flex align-items-center justify-content-center pb-lg-5">
                    {{ $destination->name }}
                </h1>
            </div>
        </div>
    </div>
</header>
