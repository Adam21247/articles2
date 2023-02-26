<?php

namespace App\Http\Controllers\Api;

use App\Models\Author;
use Carbon\Carbon;
use Illuminate\Routing\Controller;

class AuthorApiController extends Controller
{
    public function showTop3AuthorsOfLastWeek()
    {
        dump('wchodzi!!');

        $now = Carbon::now();
        $weekBefore = $now->subtract('daus', 3 );

        dump($now);
        dump($weekBefore);
        $myQuery = Author::where('created_at', '<', $now)->where('created_at', '>', $weekBefore);

        dd($myQuery->toSql());  // TODO - !!!!!!
//        $authors = Author:: Zaptanie do bazy danych /Eloquent// TODO - wyciagasz 3-ech autorów ktorzy w ost. tygodniu napisali najwięcej artykulów
//
//        return response()->json($authors->toArray());
    }


}


