<html>
    <head>
        <title>
            @yield('title','Laracast')
        </title>
    </head>
    <body>
        
        
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/contact">Contact Us</a></li>
            <li><a href="/about">About Us</a></li>
        </ul>
        @yield('content')
    </body>
</html>