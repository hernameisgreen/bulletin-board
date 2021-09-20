<?php

namespace App\Http\Controllers\User;

use App\Models\Post;
use App\Models\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class UserIndexController extends Controller
{
    function index(){
        $postsCount=Post::where('user_id',auth()->user()->id)->count();
        $commentsCount=Comment::where('user_id',auth()->user()->id)->count();

        
        return view('user.dashboard',[
            'posts'=>$postsCount,
            'comments'=>$commentsCount
        ]);
    }
}
