@extends('main')
@section('content')
<h3>Services</h3>
<ul class="list-group">

@foreach ($name as $item)
   <li class="list-group-item"> {{ $item}}</li>
@endforeach
</ul>
@endsection
