<div>
    <div class="row mb-2">
        <div class="col-4"><img src="{{ asset('storage/image/' . $article->image) }}" class="img-fluid w-100"
                alt="Responsive image"></div>
        <div class="col-8">
            <div class="mb-3">
                <a href="#" class="btn btn-primary btn-sm">{{ $article->category->title }}</a>
            </div>
            <a href="" class="text-decoration-none font-weight-bold text-dark">
                <h3 class="h5">{{ $article->title }}</h3>
            </a>
            @if ($desc == 'true')
                <div>
                    {{ Str::limit($article->content, 100, '...') }}
                </div>
            @endif

            <div class="mb-3">
                <div class=" d-flex justify-content-start gap-5">

                    <a href=""
                        class="text-decoration-none text-secondary">{{ $article->created_at->isoFormat('MMMM D, YYYY') }}</a>
                    <div>
                        {{ $article->views }}
                        <a href="" class="text-decoration-none text-secondary">Views</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
