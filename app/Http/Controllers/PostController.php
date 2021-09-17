<?php

namespace App\Http\Controllers;
use App\Models\Board;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    function index($slug){
        $board=Board::where('slug',$slug)->first();
        $board_name=$board->name;
        $posts=Post::where('board_id',$board->id)->paginate(10);
         return view('posts.index',
         [
            'posts'=>$posts,
            'board_name'=>$board_name,
        ]);
    }

    function show($boardSlug,$slug){
        $post=Post::where('slug',$slug)->first();
        $comments=Comment::where('post_id',$post->id)->orderBy('created_at','ASC')->get();
        $commentCount=$comments->count();

        return view('posts.show',[
            'post'=>$post,
            'comments'=>$comments,
            'commentCount'=>$commentCount
        ]);
    }
}
