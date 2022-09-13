<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;


class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('articles.articles')->with('arts', $articles);
    }

    public function add()
    {
        return view('articles.addmember');
    }

    public function store(Request $request)
    {
        $input = $request->only('title', 'summary', 'content');

        $articles = new Article();
        $articles->title = $input['title'];
        $articles->summary = $input['summary'];
        $articles->content = $input['content'];
        $articles->save();

        return redirect('articles');
    }


    public function show($id)
    {
        $articles = Article::find($id);

        return view('articles.update', ['articles' => $articles]);
    }


    public function update(Request $request)
    {
        $articles = Article::find($request->id);

        $input = $request->only('title', 'summary', 'content');

        $articles->title = $input['title'];
        $articles->summary = $input['summary'];
        $articles->content = $input['content'];
        $articles->save();

        return redirect('articles');
    }


    public function destroy($id)
    {
        $articles = Article::find($id);
        $articles->delete();

        return redirect('articles');

    }

    public function showArticle($id)
    {

        $articles = Article::find($id);
        return view('articles.showarticle')->with('arts', $articles);
    }

    public function storeComment(Request $request){
        $input = $request->only('comment');

    }

}




