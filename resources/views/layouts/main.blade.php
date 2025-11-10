<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible">
    <title>Index</title>
    @vite(['resources/css/style.css', 'resources/js/app.js'])
</head>
<div>
    <a href="{{ route('index') }}">Go home</a>
    <a href="{{ route('posts.index') }}">Posts</a>
    <a href="{{ route('posts.create') }}">Create</a>
</div>
<body>
<a href="{{ route('posts.index') }}"><h1 style="text-align: center">BLOG</h1></a>
<hr>
@yield('content')
</body>
</html>
