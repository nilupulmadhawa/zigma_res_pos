<!doctype html>

<html lang="en">
    @include('layouts.header')
    <div id="app">
        <body>
            @include('layouts.preloader')
            <div class="wrapper">
                <div class="content ml-0 p-0">
                    @yield('content')
                </div>
            </div>     
        </body>
        @include('layouts.footer')
    </div>
    @include('layouts.scripts')
    @stack('scripts')
</html>