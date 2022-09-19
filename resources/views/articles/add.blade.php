<h1>Add Members</h1>
<form action="{{route(('articles.create'))}}" method="POST">
    @csrf
    <label>
        <input type="text" name="title" placeholder="Enter title">
    </label><br><br>
    <label>
        <input type="text" name="summary" placeholder="Enter summary">
    </label><br><br>
    <label>
        <input type="text" name="content" placeholder="Enter content">
    </label><br><br>
    <button type="submit">Add New Article</button>
</form>
