@extends('blog.app')
@section('content')
  <div class="row col-xs-10 col-xs-offset-1">
    <div class="col-xs-12 col-sm-12 col-md-8 margin-tb">
        <div class="pull-left">
            <h2>{{ config('blog.title') }}</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('blog.create') }}"> Actividad nuevo Item</a>
        </div>
    </div>
  </div>

  @if ($message = Session::get('message'))
    <div class="alert alert-success  row col-xs-10 col-xs-offset-1">
        <p>{{ $message }}</p>
    </div>
  @endif
  <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
    <table class="table table-bordered">
      <tr>
          <th>No</th>
          <th>Title</th>
          <th>Description</th>
          <th width="200px">Action</th>
      </tr>
    @foreach ($posts as $post)
    <tr>
      <td>{{ $post->id }}</td>
      <td>{{ $post->title }}</td>
      <td>{{ $post->content }}</td>
      <td>
          <a class="btn btn-info" href="{{ route('blog.show',$post->id) }}">Show</a>
          <a class="btn btn-primary" href="{{ route('blog.edit',$post->id) }}">Edit</a>
           <form class="" action="/blog/{{ $post->id }} " method="post">
              
                <input type="hidden" name="_method" value="delete">
                <input type="hidden" name="_token" value="{{csrf_token() }}">
                <input class="btn btn-danger" type="submit" name="name" value="Delete post">
            </form>
      </td>
    </tr>
    @endforeach
    </table>
  </div>
  <hr>
  <div class="col-xs-12 col-sm-12 col-md-8 text-center">
    {!! $posts->render() !!}
  </div>
  @endsection