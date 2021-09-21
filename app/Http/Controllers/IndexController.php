<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Board;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class IndexController extends Controller
{
    //
    public function index(){
        $boards=Board::all();
        //$posts=Post::orderBy('created_at')->take(8)->get();

        $posts=Post::withCount('comment')
        ->where('created_at', '>', Carbon::now()->subDays(1))
        ->orderBy('comment_count','desc')
        ->take(8)
        ->get();

        $postsCount=Post::count();
        $usersCount=User::count();
        return view('home.index',[
            'boards'=>$boards,
            'posts'=>$posts,
            'postsCount'=>$postsCount,
            'usersCount'=>$usersCount
        ]);
    }
}
