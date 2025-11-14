<x-layout.main title="show">
<div class="p-2">
        <h2 style="text-align: center">{{ $post->title }}</h2>

        <div>
            <p>{{ $post->content }}</p>
        </div>

        Category:<p class="text-bg-info"> {{ $post->category->name }}</p>
        <a href="{{ route('posts.edit', $post->id) }}">edit</a>

    <br>
    Tags:
    @foreach($post->tags as $tag)
        <div class="card-body p-0">
            <div class="text-bg-primary">{{ $tag->name }}</div>
        </div>
    @endforeach

        <form method="POST" action="{{ route('posts.destroy', $post) }}">
            @method('DELETE')
            @csrf
            <br><button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</x-layout.main>
