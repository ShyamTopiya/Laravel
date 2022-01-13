@extends('layouts.app')
@section('content')
<a href="/posts" class="btn btn-default">Go Back</a>

     <h1>{{$post->title}}</h1>
     <img style="width = 100%" src="/storage/cover_images/{{$post->cover_image}}">
<div>
     {!! $post->body !!}
</div>
<hr>
<small>Written on{{$post->created_at}}</small>
<hr>
@if(!Auth::guest())
@if(Auth::user()->id == $post->user_id)
<a href="{{route('posts.edit',$post->id)}}" class="btn btn-default">Edit</a>

<form action="{{route('posts.destroy',$post->id)}}" method="POST" class="pull-right">
     @csrf
     @method('DELETE')        
     <input type="submit" value="Delete" class="btn btn-danger">
</form>
@endif
@endif
@endsection