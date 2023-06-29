<?php

namespace App\Http\Controllers\Api;

use App\Models\Article;
use App\Models\Author;
use Carbon\Carbon;
use Illuminate\Routing\Controller;

class AuthorApiController extends Controller
{
    public function showTop3AuthorsOfLastWeek()
    {
//TODO - wyciagnąć 3-ech autorów ktorzy w ost. tygodniu napisali najwięcej artykulów

//        $now = Carbon::now();
//        $weekBefore = $now->subtract('days', 3);
//
//        $myQuery = Author::where('created_at', '<', $now)->where('created_at', '>', $weekBefore);
        $weekStartDate = now()->startOfWeek();
        $weekEndDate = now()->endOfWeek();


        $authors = Author::select('authors.id as authors_id', 'name', Article::raw('COUNT(articles.id) as article_count'))
            ->join('articles', 'authors.id', '=', 'articles.author_id')
            ->whereBetween('articles.created_at', [$weekStartDate, $weekEndDate])
            ->groupBy('authors.id', 'name')
            ->orderByDesc('article_count')
            ->limit(3)
            ->get();

        return response()->json($authors->toArray());
    }

}



