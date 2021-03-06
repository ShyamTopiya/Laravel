<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main class="">
            @include('inc.navbar')
            <div class="container">
                @include('inc.message')
            @yield('content')
            </div>
        </main>
    </div>
    <!--<script  src=""></script> -->
    <!-- Scripts -->
    <script src="{{ asset('vendor/UniSharp/laravel-ckeditor/master/ckeditor.js') }}"></script>
             <script>
                    CKEDITOR.replace( 'article-ckeditor');
             </script>
    
    

</body>
</html>
