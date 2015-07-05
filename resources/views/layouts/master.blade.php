<!-- Stored in resources/views/layouts/master.blade.php -->

<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        <h1>Look, this is my cool site</h1>
        <hr />
        <div class="container">
            @yield('content')
        </div>
        
        @section('footer')
            <hr />
            Nice Footer
        @show
    </body>
</html>