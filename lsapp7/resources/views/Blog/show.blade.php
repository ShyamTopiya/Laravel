@extends('main')
@section('content')
<a href="/blog" class="btn btn-default">Go Back</a>

     <h1>{{$post->post_name}}</h1>
     
<div>
     {!! $post->post_body !!}
</div>
<hr>
<small>Written on{{$post->created_at}}</small>
<hr>
@if(!Auth::guest())
@if(Auth::user()->id == $post->user_id)
<a href="{{route('blog.edit',$post->id)}}" class="btn btn-default">Edit</a>

<form action="{{route('blog.destroy',$post->id)}}" method="POST" class="pull-right">
     @csrf
     @method('DELETE')        
     <input type="submit" value="Delete" class="btn btn-danger">
</form>
@endif
@endif
@endsection