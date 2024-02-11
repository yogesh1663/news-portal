<div class="mb-5">
    <div class="mb-3">
        <img src="{{ asset('storage/image/' . $article->image) }}" class="img-fluid w-100" alt="Responsive image">
    </div>
    <div class="mb-3">
        <h1 class="text-justify font-weight-bolder" style="text-align: justify;
        text-justify: inter-word;">
            {{ $article->title }}</h1>
    </div>
    <div class="mb-3">
        <div class=" d-flex justify-content-start gap-5">
            <a href="" class="text-decoration-none text-secondary">{{ $article->category->title }}</a>
            <a href=""
                class="text-decoration-none text-secondary">{{ $article->created_at->isoFormat('MMMM D, YYYY') }}</a>
            <div>
                {{ $article->views }}
                <a href="" class="text-decoration-none text-secondary">Views</a>
            </div>
        </div>
    </div>
</div>
