@extends('layouts.main')

@section('content')
    <p>show state: {{ $message['title'] }}</p>
    <p>show id: {{ $message['id'] }}</p>
    <p>show date: {{ $message['dt'] }}</p>
    <p>show content: {{ $message['content'] }}</p>
@endsection
