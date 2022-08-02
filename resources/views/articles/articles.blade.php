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
        tbody {
            font-family: 'Nunito', sans-serif;
            cursor: pointer;
        }
        a{
            text-decoration: none;
            color: black;
        }
        a:hover{
            text-decoration: underline;
        }

th{
    background-color: #333333;
    color: #ffffff;
}
        th, td{
            padding: .8rem;
            font-size: 1rem;
        }
tbody{
    background-color: #eeeeee;
    color: black;
}
        table{
            font-family: sans-serif;
            border-collapse: collapse;
        }
    </style>
</head>

<h2 align="center">Panel Admina - artykuły</h2>
<table>
<thead align="center" style="display: table-header-group">
<tr>
    <th>ID:</th>
    <th>Title:</th>
    <th>Summary:</th>
    <th>Content:</th>
</tr>
</thead>
    <tbody>

    @foreach ($arts as $art)



        <tr>
            <td><a href="/articles/{{ $art->id }}"/>{{$art->id}}</td>
            <td><a href="/articles/{{ $art->title }}"/>{{$art->title}}</td>
            <td><a href="/articles/{{ $art->summary }}"/>{{$art->summary}}</td>
            <td><a href="/articles/{{ $art->content }}"/>{{$art->content}}</td>
        </tr>

    @endforeach

</tbody>
</table>

</html>


