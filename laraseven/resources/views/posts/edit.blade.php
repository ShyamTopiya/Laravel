@extends('layouts.app')
@section('content')
<h1>Edit Post</h1>
<form action="{{ route('posts.update',$post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf       
                @method('PUT') 
                 <div class="form-group">
                     <label for="title">Title</label>
                     <input class="form-control" type="text" id="title" value="{{$post->title}}" name="title"> 
                 </div>
                
                 <div class="form-group">
                     <label for="body">Body</label>
                 <textarea class="form-control" id="article-ckeditor" rows="3" name="body">{{$post->body}}</textarea>
                 </div>
                 <input type="file" name="cover_image"><br> 
                 <input type="submit" value="Submit" class="btn btn-primary">
             </form>
@endsection