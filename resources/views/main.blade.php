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
            @include('partials._messages')
            @yield('content')
        </main>
        @include('partials._footer')
        @include('partials._javascript')

        @yield('scripts')
    </body>
</html>
