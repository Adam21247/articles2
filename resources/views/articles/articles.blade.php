<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Articles List</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body>
<h2>Panel Admina - artykuły</h2>
<ul>
    @foreach ($arts as $art)
            <a href="/articles/{{ $art->id }}"/>
            <li> {{ $art->title }}</li>
            <li> {{ $art->summary }}</li>
            <li> {{ $art->content }}</li>
    @endforeach
</ul>
</body>
</html>
