<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\Admin\AdminIndexController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\User\UserIndexController;
use App\Http\Controllers\User\UserPostController;
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

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/boards/{board:slug}', [PostController::class, 'index'])->name('post.index');
Route::get('/boards/{board:slug}/posts/{post:serial}/', [PostController::class, 'show'])->name('post.show');
Route::get('/boards/{board:slug}/posts/', [PostController::class, 'create'])->name('post.create');


Route::post('/boards/{board:slug}/posts/', [PostController::class, 'store'])->name('post.save');
Route::post('/boards/{boardSlug}/posts/{post:serial}', [PostCommentController::class, 'store'])->name('comment.save');


Route::group(['middleware' => 'auth'], function () {
    Route::group(
        [
            'prefix' => 'admin',
            'middleware' => 'isAdmin'
        ],
        function () {
            Route::resource('/posts', AdminPostController::class,[
                'names'=>[
                    'index'=>'admin.posts.index',
                    'edit'=>'admin.posts.edit',
                    'update'=>'admin.posts.update',
                    'destroy'=>'admin.posts.destroy'
                ]
            ])->except('create','show','store');
            Route::get('/',[AdminIndexController::class,'index'])->name('admin.dashboard');
        }
    );


    Route::group(
    [
        'prefix'=>'user',
    ],
        function(){
            Route::resource('/posts',UserPostController::class,[
                'names'=>[
                    'index'=>'user.posts.index',
                    'edit'=>'user.posts.edit',
                    'update'=>'user.posts.update',
                    'destroy'=>'user.posts.destroy'
                ]
            ])->except('create','show','store');
            Route::get('/',[UserIndexController::class,'index'])->name('user.dashboard');
        }
    );
});


require __DIR__ . '/auth.php';
