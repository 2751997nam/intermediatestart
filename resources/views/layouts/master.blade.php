<!-- resources/views/layouts/master.blade.php -->

<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
    <head>
        <title>@yield('title')</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @yield('css')
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Navbar Contents -->
            </nav>
        </div>

        @yield('content')
        <script src="{{ asset('js/app.js') }}"></script>
        @yield('script')
    </body>
</html>
