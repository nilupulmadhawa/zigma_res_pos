<!doctype html>

<html lang="en">
    @include('layouts.header')
    <div id="app">
        <body>
            <div class="wrapper">
                <div class="content">
                    @yield('content')
                </div>
            </div>     
        </body>
    </div>
    @include('layouts.scripts')
    @stack('scripts')
</html>