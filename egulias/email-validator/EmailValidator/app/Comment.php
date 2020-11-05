<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /*protected $fillable = [
        'body', 'userid', 'postid',
    ];*/
    public $table="comments";
    public function post(){
        return $this->belongsTo('App\Post');
    }

}
