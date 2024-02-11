<x-back-layout>
    <form action="{{ route('article.update', $articles->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-2">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title"
                value="{{ old('title') ?? $articles->title }}">
            @error('title')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-2">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug"
                value="{{ old('slug') ?? $articles->slug }}">
            @error('slug')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-2">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content">{{ old('content') ?? $articles->content }}</textarea>
            @error('content')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-2">
            <label for="formFile" class="form-label">Image</label>
            <input class="form-control" type="file" id="formFile" name="image">
            @error('image')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-2">
            <img src="{{ asset('storage/image/' . $articles->image) }}" alt="{{ $articles->title }}" height="100">

        </div>
        <div class="mb-2">
            <label for="radio" class="form-label">Status:</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio1" value="active" name="status"
                    {{ $articles->status === 'active' ? 'checked' : '' }} />
                <label class="form-check-label" for="inlineRadio1">Active</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio2" value="inactive" name="status"
                    {{ $articles->status === 'inactive' ? 'checked' : '' }} />
                <label class="form-check-label" for="inlineRadio2">Inactive</label>
            </div>
        </div>

        <x-base.back.article-category :id='$articles->category_id' />



        <button type="submit" class="btn btn-success"> Update Article</u></button>
    </form>
</x-back-layout>
