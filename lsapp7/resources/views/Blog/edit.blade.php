@extends('main')
@section('content')
    <h1>Edit Page</h1>
    <div class="jumbotron container">
    {!!Form::open(['action'=>['BlogsController@update',$post->id],'method'=>'PUT']) !!}
    @csrf
    <div class="form-group">
        {{Form::label('title', 'TITLE')}}
        {{Form::text('title',$post->post_name,['class'=>'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'BODY')}}
        {{Form::textarea('body',$post->post_body,['class'=>'form-control','id'=>'article-ckeditor'])}}
    </div>
    <div class="form-group">
        {{Form::submit('Update',['class'=>'btn btn-primary'])}}
    </div>
    {!!Form::close()!!}
</div>
@endsection