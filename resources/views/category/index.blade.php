<x-back-layout>
    <x-alert-message />
    <a href="{{ route('category.create') }}" class="btn btn-primary btn-sm">Add Category</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
                <th scope="col">Articles</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $category->title }}</td>
                    <td>{{ $category->slug }}</td>
                    <td>{{ $category->articles_count }}</td>
                    <td>{{ $category->description }}</td>
                    <td>
                        @if ($category->image)
                            <img src="{{ asset('storage/image/' . $category->image) }}" alt="category image"
                                height="80">
                        @else
                            <span class="text-danger">No image found</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-success btn-sm">Edit</a>
                        <form action="{{ route('category.destroy', $category->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="sumbit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $categories->links() }}
</x-back-layout>
