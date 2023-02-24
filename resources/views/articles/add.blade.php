
@extends('articles.layout')

<div>

<a href="{{"/articles"}}">
    <button> @lang('common.back')</button>
</a>

<div class="addMember-box">
    <form action="{{route(('articles.create'))}}" method="POST">
        <h1>@lang('add.add-articles')</h1>

        <p></p>
        @csrf


        <input type="text" name="title" placeholder=@lang('add.enter-title')>


        <textarea name="author" placeholder=@lang('add.enter-author')></textarea>


        <textarea name="content" placeholder=@lang('add.enter-content')></textarea>

        <button type="submit">@lang('add.add-new-article')</button>
    </form>

</div>
</div>




