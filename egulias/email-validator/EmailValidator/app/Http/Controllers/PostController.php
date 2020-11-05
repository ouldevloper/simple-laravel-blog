<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function addPost(Request $r){
        if($r->isMethod('post')){
            $post=new Post();
            $post->title=$r->input('title');
            $post->body=htmlspecialchars($r->input('body'));
            $post->userid=Auth::user()->id;
            $post->username=Auth::user()->name;
            $post->save();   
            return Redirect("/Publicity");
        }else
            return view("post.add"); 
    }

    public function updatePost(Request $r,$id){
        if($r->isMethod('post')){
            $post=Post::find($id);
            $post->title=$r->input('title');
            $post->body=$r->input('body');
            $post->userid=Auth::user()->id;
            $post->username=Auth::user()->name;
            $post->save();  
            return redirect("/Publicity");      
        }else{
            $post=Post::find($id);
            $ar=array("post"=>$post);
            return view('post.Edit',$ar);
        }
        
    }
    public function display(){
        $id=Auth::user()->id;
        $post=Post::all()->where('userid',$id);
        $arr=Array('posts' => $post);
        return view('post.Publicity',$arr);
    }

    public function posts(){
        $posts =Post::all();
        $post=Array("posts"=>$posts);
        return view ("home",$post);
    }

    public function post(Request $r,$id){
        $post=Post::find($id);
        $ar=Array('post'=>$post);
        return view('post.Post',$ar);
    }
    
}
