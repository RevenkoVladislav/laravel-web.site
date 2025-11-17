@props([
    'title' => 'default',
    'main_page' => 'BLOG',
    'main_link' => 'posts.index'
])

    <!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible">
    <title>{{ $title }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<div class="p-2">
    <a href="{{ route('index') }}">Go home</a>
    <a href="{{ route('posts.index') }}">Posts</a>
    <a href="{{ route('posts.create') }}">Create</a>
    <a href="{{ route('magazine.index') }}">Check price</a>
    <a href="{{ route('school.form', 2) }}">SchoolCourses</a>
    <a href="{{ route('price', 1) }}">Price for course - 1</a>
</div>

<div class="p-2">
    @guest
        <a href="{{ route('auth.login') }}">Войти в аккаунт</a>
    @endguest
    @auth()
            <a href="{{ route('admin.dashboard') }}">Админка</a>
    @endauth
</div>
<body>
<a href="{{ route($main_link) }}"><h1 style="text-align: center">{{ $main_page }}</h1></a>
<hr>
<div class="p-2">
    @if(session('success'))
        <div>
            <p>
                {{ session('success') }}
            </p>
        </div>
    @endif
    {{ $slot }}
</div>
</body>
</html>
