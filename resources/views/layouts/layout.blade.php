<!doctype html>

<html lang="en">
    @include('layouts.header')
    <div id="app">
        <body class="container-fluid p-0">
            @include('layouts.preloader')
            @include('layouts.top_nav')
            <main class="wrapper">
                @include('layouts.side_nav')
                <div class="content">
                    @yield('content')
                </div>
            </main>     
        </body>
        @include('layouts.footer')
    </div>
    @include('layouts.scripts')
    @stack('scripts')
</html>