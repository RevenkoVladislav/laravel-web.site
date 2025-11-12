<x-layout.main title="edit">
    <div class="p-2">
    <form method="post" action="{{ route('posts.update', $post->id) }}">
        @method('Patch')
        @csrf
        <x-forms.input name="title" label="label title" :value="$post->title" />
        <x-forms.textarea name="content" label="label content" :value="$post->content"/>
        <x-forms.select name="category_id" :array-options="$categories" label="label for categories" :value="$post->category_id" />
        <br>
        <input type="submit" name="sub" value="submit" class="btn btn-success">
    </form>
    </div>
</x-layout.main>
