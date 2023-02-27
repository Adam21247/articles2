<?php

namespace App\Http\Controllers\Api;

use App\Models\Author;
use Carbon\Carbon;
use Illuminate\Routing\Controller;

class AuthorApiController extends Controller
{
    public function showTop3AuthorsOfLastWeek()
    {


        $now = Carbon::now();
        $weekBefore = $now->subtract('days', 3 );

        $myQuery = Author::where('created_at', '<', $now)->where('created_at', '>', $weekBefore);

        dd($myQuery->toSql());  // TODO - !!!!!!
//        $authors = Author:: Zaptanie do bazy danych /Eloquent// TODO - wyciagnąć 3-ech autorów ktorzy w ost. tygodniu napisali najwięcej artykulów
//
//        return response()->json($authors->toArray());
    }


}


