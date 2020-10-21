@extends('layouts.app')
@section('content')







<style>
.userlogo{
    float:left;
    padding-top:12px;
    hieght:30px;
}
.createdPost{
    font-size: 9px;
    margin-top: -7px;
    padding-left: 7px;
}
.username {
    font-size: 18px;
    margin-top: 3px;
    padding-left: 7px;
    text-decoration: none;
}
.cmntBody{
    margin: 3px;
    border: 1px solid #dacccc;
    padding-left: 4px;
}
.commentarea{
    padding-top: 5px;
    padding-left: 5px;
}
</style>



<div class="panel-group">
    <div class="showpost">
        <div class="panel panel-default">
            <div class="row">
                <div class="col-sm-12">
                    <div class="userlogo">
                        <img src="/img/user.png"> 
                    </div>
                    <div style="float:left;">
                        <div class="username"><a href="/profile/{{$post->userid}}">{{$post->username}}</a></div>
                        <div class="createdPost">{{$post->created_at}} </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div title="title">
                        <h2 style="padding-left:15px;">{{$post->title}}</h2>
                    </div>
                    <div title="post body" style="padding-left:25px;"> 
                    <?php echo htmlspecialchars_decode($post->body); ?>
                    
                    </div>    
                </div>
            </div>
        </div>
        @guest
        @else
        <div class="panel panel-default commentarea">
            <div class="row">
            <!--Add Comenet-->
                <form method="post" action="/addComment" class="form">
                    {{csrf_field()}}
                    <input type="hidden" name="postid" value="{{$post->id}}"/>
                    <div class="col-sm-10">
                        <textarea style="width:100%" name="body"></textarea>  
                    </div>
                    <div class="col-sm-1 commentbtn">
                        <input class="btn btn-primary" type="submit"  value="comment" name="addcomment">
                    </div>
                </form>
            </div>
        </div>
        @endguest
        <div class="panel panel-default">
            <div class="panel-group">
            @foreach($post->comments as $comment)
                <div   class="panel panel-default cmntBody">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="userlogo">
                                <img src="/img/user.png"> 
                            </div>
                            <div style="float:left;">
                                <div class="username"> <a href="/profile/{{$comment->userid}}">{{$comment->username}}</a></div>
                                <div class="createdPost"> {{$comment->created_at}} </div>
                            </div>
                            <br>
                            <br>
                            <div style="padding-left:35px;font-size:19px">
                            {{$comment->body}}    
                        </div>
                        </div>
                        
                    </div>                   
                </div>
            @endforeach

        </div>
    </div>
</div>































@endsection