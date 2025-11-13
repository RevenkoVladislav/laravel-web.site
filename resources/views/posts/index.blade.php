<x-layout.main title="Index">
    <div class="row">
        @foreach($posts as $post)
            <a href="{{ route('posts.show', $post->id) }}"><h1 style="text-align: center">{{ $post->title }}</h1></a>
            <div>
                <a href="{{ route('posts.edit', $post->id) }}"><p>edit</p></a>
                <p>
                    {{ $post->content }}
                </p>
                Category:<p class="text-bg-info"> {{ $post->category->name }}</p>

                Tags:
            @foreach($post->tags as $tag)
            <div class="card-body p-0">
                <div class="text-bg-primary">{{ $tag->name }}</div>
            </div>
            @endforeach
            <hr>
            </div>
        @endforeach
    </div>
</x-layout.main>
