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
        $posts=Post::where('board_id',$board->id)->paginate(10);
         return view('posts.index',
         [
            'posts'=>$posts,
            'board'=>$board,
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

    function create($slug){
        $board=Board::where('slug',$slug)->first();
        return view('posts.create',[
            'board'=>$board
        ]);
    }

    function store($slug){
        request()->validate([
            'title'=>['required','min:3','max:255','string','unique:posts'],
            'content'=>['required','min:5','max:255'],
            'img'=>['nullable','string','max:255','mimes:jpg,bmp,png'],
        ]);

        $board=Board::where('slug',$slug)->first();

        $post=Post::create([
            'board_id'=>$board->id,
            'user_id'=>auth()->user()->id,
            'title'=>request('title'),
            'content'=>request('content'),
            'img'=>request()->file('img')->store('posts_image')
        ]);

        redirect('/boards/{'.$slug.'}');
    }
}
