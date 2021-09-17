<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function show(){
        $boards=Board::all();
        $posts=Post::orderBy('created_at')->take(8)->get();
        $postsCount=Post::count();
        return view('home.show',[
            'boards'=>$boards,
            'posts'=>$posts,
            'postsCount'=>$postsCount
        ]);
    }
}
