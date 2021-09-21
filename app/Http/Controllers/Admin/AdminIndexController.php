<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class AdminIndexController extends Controller
{
    //
    function index(){
        $users_created_today=User::where('created_at',Carbon::today())->count();
        $posts=Post::all()->count();
        $comments=Comment::all()->count();

        return view('admin.dashboard',[
            'users_created_today'=>$users_created_today,
            'posts'=>$posts,
            'comments'=>$comments
        ]);
    }
}
