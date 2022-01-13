@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <div><br><br>
                            <div>
                                    <h3>Your Blog Posts</h3>
                                    <a href="posts/create" class="btn btn-primary">Create Post</a><br><br>
                            </div>
                            @if(count($posts)>0)
                            <table class="table table-striped">
                                <tr>
                                    <th>Title</th>
                                    <th></th>
                                    <th></th>
                                </tr>  
                                @foreach ($posts as $post)
                                        <tr>
                                            <td>
                                                {{$post->title}}
                                            </td>
                                            <td>
                                                    <form action="{{ route('posts.edit',$post->id) }}">
                                                        @csrf
                                                        @method('PUT')
                                                             <input type="submit" value="Edit" class="btn btn-primary">
                                                         </form>
                                            </td>
                                        <td>
                                                <form action="{{route('posts.destroy',$post->id)}}" method="POST" class="pull-right">
                                                        @csrf
                                                        @method('DELETE')        
                                                        <input type="submit" value="Delete" class="btn btn-danger">
                                                   </form>
                                        </td>
                                        </tr>    
                                @endforeach
                                
                            </table>
                            @else
                            <p>You have no posts </p>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
