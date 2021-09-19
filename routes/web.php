<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostCommentController;
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

Route::get('/', [IndexController::class,'show'])->name('home');

Route::get('/boards/{board:slug}',[PostController::class,'index']);
Route::get('/boards/{boardSlug}/posts/{slug}',[PostController::class,'show']);

Route::get('/boards/{board:slug}/posts/',[PostController::class,'create']);
Route::post('/boards/{board:slug}/posts/',[PostController::class,'store']);
Route::post('/boards/{boardSlug}/posts/{slug}',[PostCommentController::class,'store'])->name('saveComment');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
