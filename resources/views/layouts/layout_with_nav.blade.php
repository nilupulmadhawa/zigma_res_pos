<!doctype html>

<html lang="en">
    @include('layouts.header')
    <div id="app">
        <body class="container-fluid p-0">
            @include('layouts.preloader')
            @include('layouts.top_nav', ['hide_toggler' => false])
            <div class="wrapper">
                <div class="content-full m-0 p-0">
                    @yield('content')
                </div>
            </div>     
        </body>
        @include('layouts.footer', ['fixed_footer' => true])
    </div>
    @include('layouts.scripts')
    @stack('scripts')
</html>