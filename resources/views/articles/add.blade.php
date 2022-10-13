
@extends('articles.layout')

<div>

<a href="{{"/articles"}}">
    <button> Back</button>
</a>

<div class="addMember-box">
    <form action="{{route(('articles.create'))}}" method="POST">
        <h1>Add Article</h1>

        <p></p>
        @csrf


        <input type="text" name="title" placeholder="Enter title">


        <textarea name="summary" placeholder="Enter summary"></textarea>


        <textarea name="content" placeholder="Enter content"></textarea>

        <button type="submit">Add New Article</button>
    </form>

</div>
</div>




