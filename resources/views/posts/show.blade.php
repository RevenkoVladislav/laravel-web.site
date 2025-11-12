<x-layout.main title="show">
<div class="p-2">
        <h2 style="text-align: center">{{ $post->title }}</h2>

        <div>
            <p>{{ $post->content }}</p>
        </div>

        <p>Category: {{ $post->category->name }}</p>
        <a href="{{ route('posts.edit', $post->id) }}">edit</a>
        <form method="POST" action="{{ route('posts.destroy', $post) }}">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</x-layout.main>
