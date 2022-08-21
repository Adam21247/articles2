<?php

namespace App\Http\Controllers\Api;

use App\Models\Article;
use Illuminate\Contracts\View\View;
use Illuminate\Routing\Controller;

class ArticleApiController extends Controller
{
    public function list() {
        dd('fdasfdasf');
        $articles = Article::all();

        return view('articles.articles')->with('arts' ,$articles);
    }
}


