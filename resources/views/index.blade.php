@extends('layouts.main')

@section('content')

<p>привет, index</p>
    @foreach($messages as $message)
        <p>title: {{ $message->title }}</p>
        <a href="{{ route('messages.show', $message->id) }}">Подробнее</a>
        <p>date: {{ $message->dt }}</p>
        <hr>
    @endforeach
@endsection
