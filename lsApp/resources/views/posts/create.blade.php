@extends('layouts.app')
@section('content')
<h1>Create Post</h1>
<form action="./" method="POST">
        <label>Title</label><br>
        <input type="text" name="title" id="title" placeholder="Title"><br><br><br>
        <label>Body</label><br>
        <textarea name="body" id="body" cols="100" rows="10" placeholder="Body Text"></textarea> <br><br>
        <input type="submit" value="submit" class="btn btn-primary" >
</form>

@endsection