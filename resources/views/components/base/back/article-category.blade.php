<div class="mb-2">
    <select class="form-select" aria-label="Default select example" name="category">
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ $id === $category->id ? 'selected' : '' }}>{{ $category->title }}
            </option>
        @endforeach
    </select>
</div>
