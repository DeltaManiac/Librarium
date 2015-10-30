<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>

{{--<div class="container-fluid">--}}

    <header>
        @include('includes.header')
    </header>

    <div id="main" class="row">

            @yield('content')

    </div>

</nav>
    <footer>
        @include('includes.footer')
    </footer>

{{--</div>--}}
{{--</div>--}}
</body>
</html>
