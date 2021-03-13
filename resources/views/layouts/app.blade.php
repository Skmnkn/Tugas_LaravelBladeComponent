<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    @include('includes.head')
</head>
<body>
    <header>
        @include('includes.header')
    </header>
    <div class="container-fluid" id="main">
        <div class="row">
            @include('includes.sidebar')
            <div class="col-10 p-0">@yield('carousel')</div>
        </div>
    </div>

    @include('includes.footer')

    @yield('js')
</body>
</html>