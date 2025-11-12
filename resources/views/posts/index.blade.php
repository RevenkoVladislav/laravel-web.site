<x-layout.main title="Index">
    @if(session('success'))
    <div>
        <p>
          {{ session('success') }}
        </p>
    </div>
    @endif
    <div class="row">
        @foreach($posts as $post)
            <a href="{{ route('posts.show', $post->id) }}"><h1 style="text-align: center">{{ $post->title }}</h1></a>
            <div>
                <a href="{{ route('posts.edit', $post->id) }}"><p>edit</p></a>
                <p>
                    {{ $post->content }}
                </p>
                <p>Category: {{ $post->category->name }}</p>
            </div>
            <hr>
        @endforeach
    </div>
</x-layout.main>
