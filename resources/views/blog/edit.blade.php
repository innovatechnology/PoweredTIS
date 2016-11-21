@extends('blog.app')
@section('content')





<div class="row col-xs-10 col-xs-offset-1">
      <div class="col-lg-12 margin-tb">
          <div class="pull-left">
              <h2>Actividad nuevo Item</h2>
          </div>
          <div class="pull-right">
              <a class="btn btn-primary" onclick="history.go(-1)"> Back</a>
          </div>
      </div>
  </div>

  @if (count($errors) > 0)
      <div class="alert alert-danger  row col-xs-10 col-xs-offset-1">
          <strong>ups!</strong> Hubo algunos problemas con su entrada.<br><br>
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif

  <form class="row col-xs-10 col-xs-offset-1" action="/blog/{{ $post->id }} " method="post">
  <div class="row">

      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Title:</strong>
               <input type="text" name="title" value="{{ $post->title }}" placeholder="Title" class="form-control">
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Slug:</strong>
               <input type="text" name="slug" value="{{ $post->slug }}" placeholder="Slug" class="form-control">
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Description:</strong>
             <textarea rows="8" cols="40" name="content" placeholder="Post Content"  class="form-control">{{ $post->content }}</textarea>
          </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <input type="hidden" name="_method" value="put">
          <input type="hidden" name="_token" value="{{csrf_token() }}">
          <button type="submit" class="btn btn-primary">Submit</button>
      </div>

  </div>



  @endsection