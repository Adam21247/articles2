@extends('.articles.layout')

    <title>Articles List</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->


</head>
<body>
<h2 style="text-align: center">Admin panel - articles</h2>
{{--<a href="{{'/articles'}}?perPage=25">25</a>--}}
<a href="{{'/articles/add'}}">
    <button>Add new article</button>
</a>

    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>SUMMARY</th>
            <th>CONTENT</th>
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

            <td><a href={{"articles/edit/".$article['id']}}>Edit</a></td>
{{--            <td><i class="fa fa-pencil" aria-hidden="true"></i></td>--}}
            @csrf
            @method("GET")
            <td><a href={{"articles/delete/".$article['id']}}>Delete</a></td>
            <td><a href={{"articles/".$article['id']}}>Show Article</a></td>

    @endforeach
        </tr>
</table>

</body>

