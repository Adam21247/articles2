@extends('.articles.layout')


    <title>@lang('Articles List')</title>

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
            <th>@lang('ID')</th>
            <th>@lang('TITLE')</th>
            <th>@lang('SUMMARY')</th>
            <th>@lang('CONTENT')</th>

        </tr>
        </thead>

    <tr>

        <td>{{$article->id}}</td>
        <td>{{$article->title}}</td>
        <td>{{$article->summary}}</td>
        <td>{{$article->content}}</td>

    </tr>
</table>

    <h3>@lang('Comment article')</h3>
    <input type="hidden" name="id" value="{{$article->id}}">
    <textarea name="comment_content" cols="50" rows="10">@lang('Please, write here your comment...')</textarea>
    <input type="submit" value="Send comment">


    @foreach($article->comments as $comment)
        <div>

        <ul>

            <li>@lang('Comment:') {{$comment->comment_content}}</li>
            <li>@lang('Comment added:') {{$comment->created_at}}</li>
            <li><a href={{ route('comment.delete', $comment['id']) }}>@lang('Delete')</a></li>

        </ul>
        </div>
    @endforeach


</form>
</body>


