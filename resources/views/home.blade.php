@extends('layouts.app')

@section('content')
<style>
.postsbody{
    padding-left: 40px;
    font-size: 18px;
    font-style: inherit;
    font-family: cursive;
}

</style>
<div class="margin:10px;padding:5px;">
<div class="panel-group">
@foreach($posts as $post)
<div class="panel panel-default">
<div class="row">
  <div class="col-sm-12">
    <div>
        <h4>
            <img style="width:80px;hieght:60px;" src="img/job.png">
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
@endsection
