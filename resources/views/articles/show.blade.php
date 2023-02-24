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
            <th>@lang('common.id')</th>
            <th>@lang('common.title-article')</th>
            <th>@lang('common.author-article')</th>
            <th>@lang('common.content-article')</th>

        </tr>
        </thead>

    <tr>

        <td>{{$article->id}}</td>
        <td>{{$article->title}}</td>
        <td>{{$article->author}}</td>
        <td>{{$article->content}}</td>

    </tr>
</table>

    <h3>@lang('comment.comment-article')</h3>
    <input type="hidden" name="id" value="{{$article->id}}">
    <textarea name="comment_content" cols="50" rows="10">@lang('comment.write.comment')</textarea>
    <input type="submit" value="Send comment">


    @foreach($article->comments as $comment)
        <div>

        <ul>

            <li>@lang('comment.comment') {{$comment->comment_content}}</li>
            <li>@lang('comment.comment.add') {{$comment->created_at}}</li>
            <li><a href={{ route('comment.delete', $comment['id']) }}>@lang('common.delete')</a></li>

        </ul>
        </div>
    @endforeach


</form>
</body>


