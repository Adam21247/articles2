@extends('.articles.layout')

<title>@lang('articles.title')</title>


<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">


<body>

<h2 style="text-align: center">@lang('articles.admin.panel.articles')</h2>

<a href="{{'/articles/add'}}">
    <button>@lang('common.add')</button>
</a>
<table>
    <thead>
    <tr>
        <th>
                <a class="header">@lang('common.id')</a>
        </th>
        <th>
                <a class="header"> @lang('common.title-article')   </a>
        </th>

        <th>
                <a class="header">@lang('common.content-article') </a>
        </th>
        <th>
                <a class="header">@lang('articles.created_at-article')</a>

            </th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    @foreach($articles as $article)

        <a href="{{'/articles/'}}">
            <tr>

                <td>{{$article->id}}</td>
                <td>{{$article->title}}</td>
                <td>{{$article->content}}</td>
                <td>{{$article->created_at}}</td>

                <td><a href={{"articles/edit/".$article['id']}}>@lang('common.edit')</a></td>
                <td></td>
                <td></td>

                @endforeach
            </tr>

</table>

{{ $articles->appends(request()->query())->links() }}
</body>


