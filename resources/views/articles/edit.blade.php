<h1>Update data</h1>
<form action="{{route('articles.update')}}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$article['id']}}">
    <input type="text" name="title" value="{{$article['title']}}"><br>
    <input type="text" name="summary" value="{{$article['summary']}}"><br>
    <input type="text" name="content" value="{{$article['content']}}"><br>
    <button type="submit">Update</button>
</form>
