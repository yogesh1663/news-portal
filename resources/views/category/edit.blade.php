<x-back-layout>
    <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-2">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title"
                value="{{ $category->title }}">
        </div>
        <div class="mb-2">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{ $category->slug }}">
        </div>
        <div class="mb-2">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{ $category->description }}</textarea>
        </div>
        <div class="mb-2">
            <label for="formFile" class="form-label">Image</label>
            <input class="form-control" type="file" id="formFile" name="image" value="{{ $category->image }}">
        </div>
        <div class="mb-2">
            <img src="{{ asset('storage/image/' . $category->image) }}" alt="{{ $category->title }}" height="100">

        </div>

        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</x-back-layout>
