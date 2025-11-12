<x-layout.main title="edit">
    <div class="p-2">
    <form method="post" action="{{ route('posts.update', $post->id) }}">
        @method('Patch')
        @csrf
        <x-forms.input name="title" label="label title" :value="$post->title" />
        <x-forms.textarea name="content" label="label content" :value="$post->content"/>

        <p>Category: </p>
        <select name="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}"
                    {{ $category->id == old('category_id', $post->category_id) ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        <br>
        <x-error-link name="category_id" />
        <br>
        <input type="submit" name="sub" value="submit">
    </form>
    </div>
</x-layout.main>
