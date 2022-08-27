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
        $articles = Article::find($id);
        return response()->json($articles->toArray());
    }

    public function destroy($id){
        $articles = Article::find($id);
        $articles->delete();
        if($articles){
            return ["articles" => "record has been deleted"];
        }
        else{
            return ["articles" => "record has not been deleted"];
        }
    }
}


