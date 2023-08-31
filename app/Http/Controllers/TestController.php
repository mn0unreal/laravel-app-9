<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Traits\TestTrait;
use Illuminate\Http\Request;

class TestController extends Controller
{
    use TestTrait;


    public function index(){

//        $user = User::all();
//        $posts = Post::all();
//        return $posts;
        $users = $this->getData(new Post());
        return $users;
    }
}
