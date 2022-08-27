<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    '/articles',
    [ArticleController::class, 'index']
)->name('articles.index');
//
//Route::view('add', 'addmember');

Route::get('/articles/add',[ArticleController::class, 'add'])
    ->name('articles.add');

Route::post('store',[ArticleController::class,'store'])->name('articles.create');


Route::get('update/{id}',[ArticleController::class,'show']);
Route::post('update',[ArticleController::class,'update']);
