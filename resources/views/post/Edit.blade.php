@extends('layouts.app')
@section('content')
<form class="form-horizontal" role="form" method="post" action="/Edit/{{$post->id}}">
{{csrf_field()}}
<div class="form-group">
    <label for="email" class="col-sm-2 control-label"></label>
    <div class="col-sm-8">
      <span><h1>  Post Your  Publicity...</h1></span>
    </div>
  </div>
  <input type="hidden" name="userid" value="{{$post->userid}}"/>
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Title </label>
    <div class="col-sm-8">
      <input type="text" name="title" class="form-control" id="name" value="{{$post->title}}" placeholder="job name"  required>
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Description</label>
    <div class="col-sm-8">
      <textarea name="body" class="ckeditor" id="ckeditor">{{$post->body}}</textarea>

    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="post" class="btn btn-success" >Update Publicity</button>
    </div>
  </div>
</div>
</form>
@endsection