<x-back-layout>
    <x-alert-message />
    <a href="{{ route('article.create') }}" class="btn btn-primary btn-sm">Add Article</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Status</th>
                <th scope="col">Category</th>
                <th scope="col">Views </th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->slug }}</td>
                    <td>{{ $article->content }}</td>
                    <td>
                        @if ($article->image)
                            <img src="{{ asset('storage/image/' . $article->image) }}" alt="category image"
                                height="80">
                        @else
                            <span class="text-danger">No image found</span>
                        @endif
                    </td>
                    <td>{{ $article->status }}</td>
                    <td>{{ $article->category->title }}</td>
                    <td>{{ $article->views }}</td>
                    <td>
                        <a href="{{ route('article.edit', $article->id) }}" class="btn btn-success btn-sm">Edit</a>
                        <form action="{{ route('article.destroy', $article->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="sumbit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-back-layout>
