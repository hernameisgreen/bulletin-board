<?php

namespace App\Http\Controllers\User;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $posts=Post::where('user_id',auth()->user()->id)->paginate(10);

        return view('user.posts.index',[
            'posts'=>$posts
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $post=Post::where('id',$id)->first();
        return view('user.posts.edit',[
            'post'=>$post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $attributes=$request->validate([
            'title'=>['required','min:5','max:255','string'],
            'content'=>['required','min:5'],
            'img'=>['image','max:800000'],
        ]);

        if ($attributes['img'] ?? false) {
            $attributes['img'] = request()->file('img')->store('posts_image','public');
        }

        $post=Post::where('id',$id)->update($attributes);

        return redirect()->route('user.posts.index')->with('success','Post updated!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::where('id',$id)->delete();

        return redirect()->route('user.posts.index')->with('success','Post deleted!');

    }
}
