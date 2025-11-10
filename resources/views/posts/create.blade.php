@extends('layouts.main')

@section('content')
    <form action="{{ route('posts.store') }}">
        @csrf
        <input type="text" name="title" value="{{ old('title') }}">
        <input type="text" name="content" value="{{ old('content') }}">
    </form>
@endsection
