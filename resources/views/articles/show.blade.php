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

<form action="{{route('comment.store')}}" method="POST">
    @csrf
<table border="1">
    <a href={{"/articles"}}>
    <button><a href="{{"/articles"}}">Back</a></button>
    <tr>

        <td>{{$article->id}}</td>
        <td>{{$article->title}}</td>
        <td>{{$article->summary}}</td>
        <td>{{$article->content}}</td>

    </tr>
</table>

    @foreach($article->comments as $comment)

        <ul>
            <li><i>Add comment: {{$comment->created_at}}</i></li>
            <li><b>Comment: {{$comment->comment_content}}</b></li>

            <td><a href={{ route('comment.delete', $comment['id']) }}>Delete</a></td>

        </ul>
    @endforeach


<h1>Comment article</h1>
    <input type="hidden" name="id" value="{{$article->id}}">
<textarea name="comment_content" cols="50" rows="10">Please, write here your comment...</textarea>
<input type="submit" value="Send form">
</form>
</body>
</html>

