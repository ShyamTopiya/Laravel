    @extends('layouts.app')
    @section('content')
    <div class="jumbotron text-center">
<h1>{{$title}}</h1>
    <p>This is the larvel application</p>
    <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a><a class="btn btn-primary btn-lg" href="/signup" role="button">Sign Up</a></p>
    </div>
    @endsection()
    