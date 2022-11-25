
@extends('articles.layout')

<div>

<a href="{{"/articles"}}">
    <button> @lang('Back')</button>
</a>

<div class="addMember-box">
    <form action="{{route(('articles.create'))}}" method="POST">
        <h1>@lang('Add Articles')</h1>

        <p></p>
        @csrf


        <input type="text" name="title" placeholder=@lang('Enter_title')>


        <textarea name="summary" placeholder=@lang('Enter_summary')></textarea>


        <textarea name="content" placeholder=@lang('Enter_content')></textarea>

        <button type="submit">@lang('Add New Article')</button>
    </form>

</div>
</div>




