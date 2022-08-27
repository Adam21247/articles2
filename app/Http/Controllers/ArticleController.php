<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class ArticleController extends Controller
{
    public function index(): View {
        $articles = Article::all();

        return view('articles.articles')->with('arts' ,$articles);
    }

    public function add(): View{
    return view('articles.addmember');
    }

    public function store(Request $request){

        $articles=new Article();
        $articles->title=$request->title;
        $articles->summary=$request->summary;
        $articles->content=$request->content;


        $articles->save();
        return redirect('articles');
    }


    public function show($id){
        $articles= Article::find($id);
        return view('articles.update',['articles'=>$articles]);
    }
//public function showUpdate(): View{
//        return view ('articles.update');
//}

public function update(Request $request){
       $articles=Article::find($request->id);
       $articles->title=$request->title;
       $articles->summary=$request->summary;
       $articles->content=$request->content;
        $articles->save();
        return redirect('articles');
}
}




