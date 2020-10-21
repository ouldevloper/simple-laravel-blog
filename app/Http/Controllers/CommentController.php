<?php

namespace App\Http\Controllers;

use App\User;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addComment(Request $r){
        if($r->isMethod('post')){
            $c=new Comment();
            $c->body=$r->input('body');
            $c->userid=Auth::user()->id;
            $c->username=Auth::user()->name;
            $c->post_id=$r->input('postid');
            $id=$r->input('postid');
            $c->save();
            return Redirect('/post/'.$id);
        }
    }
}
