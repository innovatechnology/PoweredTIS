@extends('blog.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ERROR</div>

                <div class="panel-body">
                    <p>{{$mensaje}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection