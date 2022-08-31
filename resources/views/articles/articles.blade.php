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
    <button>Dodaj użytkownika do DB</button>
</a>
<table border="1">
    @foreach($arts as $art)
        <a href="/articles"/>
        <tr>

            <td>{{$art->id}}</td>
            <td>{{$art->title}}</td>
            <td>{{$art->summary}}</td>
            <td>{{$art->content}}</td>
            <td><a href={{"edit/".$art['id']}}>Update</a></td>
            @csrf
            @method("GET")
            <td><a href={{"delete/".$art['id']}}>Delete</a></td>

    @endforeach
        </tr>
</table>
</body>
</html>
