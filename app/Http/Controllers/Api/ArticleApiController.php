<?php

namespace App\Http\Controllers\Api;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ArticleApiController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return response()->json($articles->toArray());
    }

    public function show($id)
    {
        $article = Article::find($id);

        return response()->json($article->toArray());
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();

        if ($article) {
            return ["article" => "record has been deleted"];
        } else {
            return ["article" => "record has not been deleted"];
        }

    }

    public function store(Request $request)
    {

        $input = $request->only('title', 'author', 'content');


        $article = new Article();

        $article->title = $input['title'];
        $article->author = $input['author'];
        $article->content = $input['content'];

        $article->save();

        return response()->json(null, 204);
    }

    public function update(Request $request)
    {

        $article = Article::find($request->id);

        $input = $request->only('title', 'author', 'content');

        $article->title = $input['title'];
        $article->author = $input['author'];
        $article->content = $input['content'];
        $article->save();

        return response()->json(['message' =>'Update successfully'], 204);

    }
}


