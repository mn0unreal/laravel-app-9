<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Notifications\CreatePost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;

class PostController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = Post::create([
            'title'=>$request->title,
            'body'=>$request->body,
        ]);
        $users = User::where('id','!=',auth()->user()->id)->get();
        $user_create = auth()->user()->name;
        Notification::send($users, new CreatePost($post->id,$user_create,$post->title));
        return redirect()->route('dashboard');
    }

    public function show( $id)
    {
    $post = Post::FindorFail($id);
    $getID = DB::table('notifications')->where('data->post_id',$id)->pluck('id');
    DB::table('notifications')->where('id',$getID)->update(['read_at'=>now()]);

    return $post;
    }

    public function edit(Post $post)
    {
        //
    }

    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        //
    }
}
