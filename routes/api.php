<?php

use App\Http\Controllers\Api\ArticleApiController;
use App\Http\Controllers\Api\AuthorApiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('articles', [ArticleApiController::class, 'index']);



Route::get('articles/{id}',[ArticleApiController::class, 'show']);

// 2a.
Route::get('articles/author/{authorId}',[ArticleApiController::class, 'showByAuthor']);


//3.
Route::get('authors/top-3-last-week', [AuthorApiController::class, 'showTop3AuthorsOfLastWeek']);



