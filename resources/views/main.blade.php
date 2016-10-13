<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials._head')
</head>
    <body>
        {{--导航--}}
        @include('partials._nav')
        {{--css 相关文件导入--}}
        @yield('stylesheets')
        {{--容器--}}
        <div class="container">
        {{--接收 session flash 信息--}}
        @include('partials._message')

        @yield('content')

        @include('partials._footer')

        </div>

        @include('partials._javascript')

        @yield('scripts')
    </body>
</html>