<div class="mb-3">
    <h4 class="bg-black text-white p-2">Categories</h4>
    <div class="d-flex flex-wrap gap-2">
        @foreach ($categories as $category)
            <div class="card bg-dark text-white">
                <a href="#">
                    <img src="{{ asset('storage/image/' . $category->image) }}" class="card-img"
                        alt="{{ $category->title }}"height="100" width="100" style="opacity: 0.2;">
                </a>
                <div class="card-img-overlay d-flex justify-content-center align-items-center flex-column">
                    <h5 class="card-title fw-bolder">({{ $category->articles->count() }})</h5>
                    <p class="card-title">{{ $category->title }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
