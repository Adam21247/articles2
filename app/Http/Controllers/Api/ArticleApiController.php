<?php

namespace App\Http\Controllers\Api;

use App\Models\Article;
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
        $article->load('authors');

        return response()->json($article->toArray());
    }

    // 2a
    public function showByAuthor($authorId)
    {
        // TODO: wyciagasz wszystkie artykuly pryzpisane do danegoa autora

        //$articles = TODO - tutaj musisz sobie poradzic;
//        response()->json($articles->toArray());
    }


}


