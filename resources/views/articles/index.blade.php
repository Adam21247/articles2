@extends('.articles.layout')

<title>@lang('articles.title')</title>


<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">


<body>

<h2 style="text-align: center">@lang('articles.admin.panel.articles')</h2>

<a href="{{'/articles/add'}}">
    <button>@lang('common.add')</button>
</a>

<div>

    <select name="perPage" onchange="location = this.value">
        <option value=""></option>
        <option value="{{'/articles'}}?perPage=3&sort={{request('sort')}}">3</option>
        <option value="{{'/articles'}}?perPage=5&sort={{request('sort')}}">5</option>
        <option value="{{'/articles'}}?perPage=10&sort={{request('sort')}}">10</option>
        <option value="{{'/articles'}}?perPage=25&sort={{request('sort')}}">25</option>
        <option value="{{'/articles'}}?perPage=50&sort={{request('sort')}}">50</option>
        <option value="{{'/articles'}}?perPage=100&sort={{request('sort')}}">100</option>
    </select>
</div>


<table>
    <thead>
    <tr>
        <th>


            @if(request('sort') === 'desc')
                <a href="{{'/articles'}}?sort=asc&perPage={{request('perPage')}}">@lang('common.id')<i
                        class="fa-solid fa-circle-chevron-down"></i></a>
            @else
                <a href="{{'/articles'}}?sort=desc&perPage={{request('perPage')}}">@lang('common.id')<i
                        class="fa-solid fa-circle-chevron-up"></i></a>
            @endif

        </th>
        <th>@lang('common.title-article')</th>
        <th>@lang('common.summary-article')</th>
        <th>@lang('common.content-article')</th>
        <th>@lang('articles.created_at-article')</th>
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
                <td>{{$article->summary}}</td>
                <td>{{$article->content}}</td>
                <td>{{$article->created_at}}</td>

                <td><a href={{"articles/edit/".$article['id']}}>@lang('common.edit')</a></td>

                @csrf
                @method("GET")
                <td><a href={{"articles/delete/".$article['id']}}>@lang('common.delete')</a></td>
                <td><a href={{"articles/".$article['id']}}>@lang('common.show-article')</a></td>

                @endforeach
            </tr>

</table>

{{ $articles->appends(request()->query())->links() }}
</body>

