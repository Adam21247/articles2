<h1>Update data</h1>
<form action="/update" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$articles['id']}}">
    <input type="text" name="title" value="{{$articles['title']}}"><br>
    <input type="text" name="summary" value="{{$articles['summary']}}"><br>
    <input type="text" name="content" value="{{$articles['content']}}"><br>
    <button type="submit">Update</button>
</form>
