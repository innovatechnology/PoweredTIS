@extends('blog.app')
@section('content')
  
  <div class="row col-xs-10 col-xs-offset-1 ">
    <div class="col-xs-12 col-sm-12 col-md-8 margin-tb">
        <div class="pull-left">
            <h2>Add new Post</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" onclick="history.go(-1)"> Back</a>
        </div>
    </div>
  </div>

  @if (count($errors) > 0)
    <div class="alert alert-danger row col-xs-10 col-xs-offset-1 ">
        <strong>Ups!</strong> Hubo algunos problemas con su entrada.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif

  <form class="row col-xs-10 col-xs-offset-1" action="/blog" method="post">
  <div class="row">

    <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="form-group">
            <strong>Title:</strong>
             <input type="text" name="title" value="" placeholder="Title" class="form-control">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="form-group">
            
          <strong>Description:</strong>
          <textarea rows="8" cols="40" name="content" placeholder="Post Content"  class="form-control"></textarea>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-8 text-center">

      <input type="hidden" name="_token" value="{{csrf_token() }}">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>

  </div>




  @endsection