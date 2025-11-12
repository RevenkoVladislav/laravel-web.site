<x-layout.main title="Create">
    <div class="row">
    <form method="post" action="{{ route('posts.store') }}">
        @csrf
        <x-forms.input name="title" label="label title" />
        <p>Content:</p>
        <textarea name="content" cols="30" rows="10">{{ old('content') }}</textarea> <br>
        <x-error-link name="content" />
        <p>Category: </p>
        <select name="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}"
                {{ $category->id == old('category_id') ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        <br>
        <x-error-link name="category_id" />
        <br>
        <input type="submit" name="sub" value="submit" class="btn btn-success">
    </form>
    </div>
</x-layout.main>
