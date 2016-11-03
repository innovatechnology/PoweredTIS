@extends('blog.app')
@section('content')
  <div class="container">
    <h1>{{ $post->title }}</h1>
    <h5>{{ $post->added_on->format('M jS Y g:ia') }}</h5>
    <hr>
    {!! nl2br(e($post->content)) !!}
    <hr>
    <button class="btn btn-primary" onclick="history.go(-1)">
      « Back
    </button>
  </div>
  @endsection