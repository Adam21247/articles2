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
<a href="{{'/articles/add'}}">
    <button>Dodaj Nowy Artykul</button>
</a>
<table border="1">
    @foreach($articles as $article)
        <a href="/articles"/>
        <tr>

            <td>{{$article->id}}</td>
            <td>{{$article->title}}</td>
            <td>{{$article->summary}}</td>
            <td>{{$article->content}}</td>
            <td><a href={{"edit/".$article['id']}}>Edit</a></td>
            @csrf
            @method("GET")
            <td><a href={{"delete/".$article['id']}}>Delete</a></td>
            <td><a href={{"show/".$article['id']}}>Show Article</a></td>

    @endforeach
        </tr>
</table>
</body>
</html>
