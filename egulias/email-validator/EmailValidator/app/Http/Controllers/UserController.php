<?php

namespace App\Http\Controllers;
use App\User;
use App\Post;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile($id){
        $user=User::find($id);
        $post=Post::all()->where('userid',$id);
        return view('user.profile',['user'=>$user],['posts'=>$post]);
    }
}
