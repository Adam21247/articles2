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


    </style>

</head>
<body>


<table border="1">

    <a href="/showarticle"/>
    <button><a href="{{"/articles"}}">Back</a></button>
    <tr>

        <td>{{$arts->id}}</td>
        <td>{{$arts->title}}</td>
        <td>{{$arts->summary}}</td>
        <td>{{$arts->content}}</td>


    </tr>
</table>

<h1>Skomentuj artykuł</h1>
<textarea name="comment" cols="50" rows="10">Proszę, wpisz tutaj jakiś komentarz...</textarea>
<input type="submit" value="Wyślij formularz">
</body>
</html>

