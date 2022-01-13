@extends('main')
@section('content')
@if(session('success'))
<div class="alert alert-success alert-dismissible">
    <button type = "button" class="close" data-dismiss = "alert">x</button>
    {{session('success')}}
</div>
@endif
<h1>blog page</h1>
@if (count($blog)>0)

@foreach ($blog as $item)
<div class="card card-body">
    <div class="row">
        
        <div class="col-md-8 col-sm-8">
        <h3><a href="blog/{{$item->id}}">{{$item->post_name}}</a></h3>
                <small>Written on{{$item->created_at}} </small>
        </div>
    </div>
   
</div>
@endforeach

@endif   
<a href="/create" class="btn btn-primary">Create Post</a>
@endsection

