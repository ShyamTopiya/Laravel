@extends('layouts.app')
@section('content')
<br>  
<h1>Create Post</h1>
<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf        
                 <div class="form-group">
                     <label for="title">Title</label>
                     <input class="form-control" type="text" id="title" name="title"> 
                 </div>
                 <div class="form-group">
                     <label for="body">Body</label>
                     <textarea class="form-control" id="article-ckeditor" name="article-ckeditor"></textarea>
                 </div>
                 <div class="form-group">
                    <input type="file" name="cover_image"><br>
                 </div>
                 <input type="submit" value="Submit" class="btn btn-primary" >
             </form>

             

             @endsection

