@extends('.articles.layout')


    <title>Articles List</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->



<body>
<a href="{{"/articles"}}"><button>Back</button></a>

<form action="{{route('comment.store')}}" method="POST">
    @csrf
<table>


        <thead>
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>SUMMARY</th>
            <th>CONTENT</th>

        </tr>
        </thead>

    <tr>

        <td>{{$article->id}}</td>
        <td>{{$article->title}}</td>
        <td>{{$article->summary}}</td>
        <td>{{$article->content}}</td>

    </tr>
</table>

    <h3>Comment article</h3>
    <input type="hidden" name="id" value="{{$article->id}}">
    <textarea name="comment_content" cols="50" rows="10">Please, write here your comment...</textarea>
    <input type="submit" value="Send comment">


    @foreach($article->comments as $comment)
        <div>

        <ul>

            <li>Comment: {{$comment->comment_content}}</li>
            <li>Comment added: {{$comment->created_at}}</li>
            <li><a href={{ route('comment.delete', $comment['id']) }}>Delete</a></li>

        </ul>
        </div>
    @endforeach


</form>
</body>


