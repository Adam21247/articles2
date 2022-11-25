@extends('.articles.layout')

<a href="{{"/articles"}}">
    <button> @lang('Back')</button>
</a>


<div class="editMember-box">
    <h1>@lang('Update data')</h1>

    <form action="{{route('articles.update')}}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$article['id']}}">
        <input type="text" name="title" value="{{$article['title']}}"><br>
        <textarea type="text" name="summary">{{$article['summary']}} </textarea>
        <textarea type="text" name="content">{{$article['content']}} </textarea>
        <button type="submit">@lang('Update')</button>
    </form>
</div>




