@extends('layouts.main')

@section('content')
    <div>
        <h2 style="text-align: center">{{ $post->title }}</h2>

        <div>
            <p>{{ $post->content }}</p>
        </div>

        <p>Category: {{ $post->category->name }}</p>
        <a href="{{ route('posts.edit', $post->id) }}"><p>edit</p></a>
        <form method="POST" action="{{ route('posts.destroy', $post) }}">
            @method('DELETE')
            @csrf
            <button type="submit">Delete</button>
        </form>
    </div>
@endsection
