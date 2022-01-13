<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>{{ config('app.name','gg')}}</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">   
         @include('inc.navbar')
    
    @yield('content')

<script src="{{asset('js/app.js')}}"></script>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'article-ckeditor' );
</script>
</div>
</body>
</html>