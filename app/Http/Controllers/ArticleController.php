<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class ArticleController extends Controller
{
    public function list(): View {
        $articles = Article::all();

        return view('articles.articles')->with('arts' ,$articles);
    }

    public function add(): View{
    return view('articles.addmember');
    }

    public function addData(Request $request){

        $articles=new Article();
        $articles->title=$request->title;
        $articles->summary=$request->summary;
        $articles->content=$request->content;


        $articles->save();
        return redirect('articles');
    }


    public function showUpdate($id){
        $articles= Article::find($id);
        return view('articles.update',['articles'=>$articles]);
    }
//public function showUpdate(): View{
//        return view ('articles.update');
//}

public function edited(Request $request){
       $articles=Article::find($request->id);
       $articles->title=$request->title;
       $articles->summary=$request->summary;
       $articles->content=$request->content;
        $articles->save();
        return redirect('articles');
}
}




