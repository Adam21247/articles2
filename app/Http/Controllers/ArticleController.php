<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Contracts\View\View;

class ArticleController extends Controller
{


    public function list(): View {
        $articles = Article::all();

        return view('articles.articles')->with('arts' ,$articles);
    }

    public function show($id) {
//          article::find($id);
          $article = Article::find($id); //to jest obiekt
//          dd($article);
        return view('articles.show')->with('article',$article);
    }
}

