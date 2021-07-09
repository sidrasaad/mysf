<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('include.head')

<body>
    <div id="app">
        @include('include.header')
        <main>
            <div id="main_content">
                <div class="page">
                    @include('include.top_nav')
                    @yield('content')
                    @include('include.page_footer')
                </div>
            </div>
        </main>
    </div>
    @include('include.footer')
    @include('include.scripts')
    @yield('scripts')
</body>

</html>
