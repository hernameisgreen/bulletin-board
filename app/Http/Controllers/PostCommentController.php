<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Board;

use App\Models\Comment;
use Illuminate\Http\Request;

class PostCommentController extends Controller
{
    function store($boardSlug, $slug){

        request()->validate([
            'content'=>['required','min:2','max:255']
        ]);

        $board=Board::where('slug',$boardSlug)->value('id');
        $user=auth()->user()->id;
        $post=Post::where('slug',$slug)->value('id');

        $comment=Comment::create([
            'board_id'=>$board,
            'user_id'=>$user,
            'post_id'=>$post,
            'content'=>request('content')
        ]);

       return back();
    }
}
