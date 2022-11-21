@extends('.articles.layout')

    <title>Articles List</title>


    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


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
            <th>ID
                <select name="sort" onchange="location = this.value">
                    <option value=""></option>
                    <option value="{{'/articles'}}?sort=asc&perPage={{request('perPage')}}">Ascending</option>
                    <option value="{{'/articles'}}?sort=desc&perPage={{request('perPage')}}">Descending</option>
                </select>
            </th>
            <th>TITLE</th>
            <th>SUMMARY</th>
            <th>CONTENT</th>
            <th>CREATED AT</th>
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

            <td><a href={{"articles/edit/".$article['id']}}>Edit</a></td>

            @csrf
            @method("GET")
            <td><a href={{"articles/delete/".$article['id']}}>Delete</a></td>
            <td><a href={{"articles/".$article['id']}}>Show Article</a></td>

    @endforeach
        </tr>

</table>

{{ $articles->appends(request()->query())->links() }}
</body>

