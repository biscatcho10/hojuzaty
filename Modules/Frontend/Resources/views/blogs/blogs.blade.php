<section id="blogs" class="bg-transparent">
    <div class="container">
        <div class="row">
            <!-- start title -->
            <div class="col-12">
                <div class="title">
                    <h2>@lang('Our Blogs')</h2>
                    <p>
                        @if ($lang == 'en')
                            &quot;Explore Travel Tips and Hidden Gems&quot;
                        @else
                            &quot;استكشف نصائح السفر والجواهر الخفية&quot;
                        @endif
                    </p>
                </div>
            </div>
        </div>

        <!-- start blogs card -->
        <div class="row">
            @forelse ($blogs as $blog)
                <div class="col-md-6 mb-3">
                    <a href="{{ route('blog.details', $blog) }}" class="card" style="border: none">
                        <div class="card-one">
                            <div class="badg">Article</div>
                            <img src="{{ $blog->getImage() }}" alt="blog" />
                            <h3>{{ $blog->title }}</h3>
                            <p>
                                {{ Str::limit($blog->content, 100) }}
                            </p>
                            <small>{{ $blog->created_at->diffForHumans() }}</small>
                        </div>
                    </a>
                </div>
            @empty
            @endforelse
        </div>
    </div>
</section>
