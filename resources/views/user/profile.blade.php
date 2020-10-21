
@extends('layouts.app')
@section('content')
<style>
.profilebody{
    background-color: #fffbfb;
    padding-top: 10px;
    -webkit-border-horizontal-spacing: 0px;
    border-radius: 10px;
}

.userinfo{
    margin-left: 15px;
    padding-left: 25px;
    padding-top: 15px;
    background-color: #eff3f7;
    width: 30%;
    height: 100%;
}

.userPosts{
    padding-top: 10px;
    border-left: 1px solid;
}

.postsbody{
    padding-left: 40px;
    font-size: 18px;
    font-style: inherit;
    font-family: cursive;
}

</style>
<div class="profilebody">
<div class="row">
  <div class="col-sm-3 userinfo" >
  
    <div class="list-group">
        <span>Name : {{$user->name}}</span><br>
        <span>Email : {{$user->email}}</span><br>
        <span>Joined At : {{$user->created_at}}</span><br>
        <span>Nember Of Post : {{$posts->count()}}</span><br>
    </div>
  
  </div>
  <div class="col-sm-8 userPosts"  >
  <div class="panel-group">
  @foreach($posts as $post)
<div class="panel panel-default">
<div class="row">
  <div class="col-sm-12">
    <div>
        <h4>
            <img style="width:80px;hieght:60px;" src="/img/job.png">
            {{$post->title}}
        </h4>
    </div>
    <div class="postsbody">
    <?php echo htmlspecialchars_decode($post->body); ?>
    </div>

    <a href="/post/{{$post->id}}" style="float:right; margin:5px" class="btn btn-primary">More...</a>
  </div>
</div>


    
  </div>
  

@endforeach
</div>
  </div>
  
</div>
</div>

@endsection