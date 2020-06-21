<!doctype html>
<html lang="en">
    <head>
        @include('partials._head')
    </head>
    <body>
        <header>
            @include('partials._nav')
        </header>
        <main id="content">
            @yield('content')
        </main>
        @include('partials._footer')
        @include('partials._javascript')
    </body>
</html>
