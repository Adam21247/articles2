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

        button {
             border: none;
             color: white;
            background-color: #1a202c;
             padding: 15px 32px;
             text-align: center;
             text-decoration: none;
             display: inline-block;
             font-size: 16px;
             margin: 4px 2px;
             cursor: pointer;
         }


    </style>

</head>
<body>
<h2 style="text-align: center">Panel Admina - artykuły</h2>
<button>Dodaj użytkownika do DB</button>
{{--<ul>--}}
{{--    @foreach ($arts as $art)--}}
{{--            <a href="/articles/{{ $art->id }}"/>--}}
{{--            <li> {{ $art->title }}</li>--}}
{{--            <li> {{ $art->summary }}</li>--}}
{{--            <li> {{ $art->content }}</li>--}}
{{--    @endforeach--}}
{{--</ul>--}}

<table border="1">
    @foreach($arts as $art)
        <a href="/articles"/>
    <tr>

        <th>{{$art->id}}</th>
        <th>{{$art->title}}</th>
        <th>{{$art->summary}}</th>
        <th>{{$art->content}}</th>
        @endforeach
    </tr>
</table>
</body>
</html>
