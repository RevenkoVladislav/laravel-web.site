@extends('layouts.main')

@section('content')
    <div>
        @foreach($posts as $post)
            <h1 style="text-align: center">{{ $post->title }}</h1>
            <div>
                <p>
                    {{ $post->content }}
                </p>
            </div>
            <hr>
        @endforeach
    </div>
@endsection
