<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Contracts\View\View;

class ArticleController extends Controller
{
    public function list(): View {
        $articles = Article::all();

        return view('articles')->with('arts' ,$articles);
    }
}


