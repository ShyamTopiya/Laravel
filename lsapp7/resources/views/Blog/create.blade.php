@extends('main')
@section('content')
    <h1>Create page</h1>
    <div class="jumbotron container">
    {!!Form::open(['action'=>'BlogsController@store','method'=>'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'TITLE')}}
        {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'BODY')}}
        {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'Body','id'=>'article-ckeditor'])}}
    </div>
    <div class="form-group">
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    </div>
    {!!Form::close()!!}
</div>
@endsection