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
        $article->load('author');
        return response()->json($article->toArray());
    }
    // 2a
    public function showByAuthor($authorId)
    {

        // TODO: wyciagnąć wszystkie artykuly pryzpisane do danegoa autora

        $articles = Article::where('author_id', $authorId)->get(['title', 'content']);
        return response()->json($articles->toArray());
    }
}


