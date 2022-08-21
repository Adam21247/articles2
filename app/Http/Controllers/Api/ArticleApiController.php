<?php

namespace App\Http\Controllers\Api;

use App\Models\Article;
use Illuminate\Routing\Controller;

class ArticleApiController extends Controller
{
    public function list()
    {
        $articles = Article::all();
        return response()->json($articles->toArray());
    }
}


