<?php

namespace App\Http\Controllers;
use App\Models\Board;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


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

    function show($slug,$serial){
        $post=Post::where('serial',$serial)->first();
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
            //'title'=>['required','min:5','max:255','string','regex:/^[a-zA-Z0-9\s]+$/'],
            'title'=>['required','min:5','max:255','string'],
            'content'=>['required','min:5','max:255'],
            'img'=>['image','max:800000'],
        ]);

        $board=Board::where('slug',$slug)->first();
        
        if(request('img')){
            $img=request()->file('img')->store('posts_image');
        }else{
            $img="";
        }

        $post=Post::create([
            'board_id'=>$board->id,
            'user_id'=>auth()->user()->id,
            'title'=>request('title'),
            'serial'=>Str::random(7),
            'slug'=>Str::slug(request('title'),"-"),
            'content'=>request('content'),
            'img'=>$img
        ]);

        return redirect()->route('post.index',[$slug,$slug]);
    }

}
