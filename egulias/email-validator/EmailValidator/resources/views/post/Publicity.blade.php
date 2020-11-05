@extends('layouts.app')
@section('content')
<div class="">
<div class="table-responsive">  
  <table class="table table-hover">
    <thead>
      <tr>
        <th class="active">Title</th>
        <th class="active">Description</th>
        <th class="active">Manage</th>
      </tr>
    </thead>
    <tbody>
    
     @foreach($posts as $p)
      <tr>
        <td class="active">{{$p->title}}</td>
        <td class="active"><p><?php echo htmlspecialchars_decode($p->body);?></p></td>
        <td class="active"><a href="/Edit/{{$p->id}}">Edit</a> | <a href="/Delete/{{$p->id}}">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="form-group">
    <div class=" col-sm-10">
      <a href="/Add" class="btn btn-primary" >Add New Publicity</a>
    </div>
  </div>
</div>
</div>
@endsection