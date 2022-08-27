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
{{--<input type="text" name="created_at" placeholder="Enter created_at"><br><br>--}}
{{--<input type="text" name="updated_at" placeholder="Enter updated_at"><br><br>--}}
    <button type="submit">Add Member</button>
</form>
