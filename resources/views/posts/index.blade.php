@extends('layouts.main')

@section('content')
    @if(session('success'))
    <div>
        <p>
          {{ session('success') }}
        </p>
    </div>
    @endif
    <div>
        @foreach($posts as $post)
            <a href="{{ route('posts.show', $post->id) }}"><h1 style="text-align: center">{{ $post->title }}</h1></a>
            <div>
                <a href="{{ route('posts.edit', $post->id) }}"><p>edit</p></a>
                <p>
                    {{ $post->content }}
                </p>
            </div>
            <hr>
        @endforeach
    </div>
@endsection
