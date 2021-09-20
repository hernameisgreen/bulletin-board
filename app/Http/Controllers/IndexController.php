<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index(){
        $boards=Board::all();
        $posts=Post::orderBy('created_at')->take(8)->get();
        $postsCount=Post::count();
        $usersCount=User::count();
        return view('home.show',[
            'boards'=>$boards,
            'posts'=>$posts,
            'postsCount'=>$postsCount,
            'usersCount'=>$usersCount
        ]);
    }
}
