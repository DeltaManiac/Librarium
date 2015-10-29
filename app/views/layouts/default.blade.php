<!doctype html>
<html>
<head>
    @include('includes.head')
    <style>
    html,
    body {
    color: white;
      height: 100%;
      /* The html and body elements cannot have any padding or margin. */
      background: url("img/back.jpg");
    }
body { padding-bottom: 70px; }

    /* Wrapper for page content to push down footer */
    /*#wrap {*/
      /*min-height: 100%;*/
      /*height: auto;*/
      /* Negative indent footer by its height */
      /*margin: 0 auto -60px;*/
      /* Pad bottom by footer height */
      /*padding: 0 0 60px;*/
    /*}*/

    /* Set the fixed height of the footer here */
    /*#footer {*/
      /*height: 60px;*/
      /*background-color: #f5f5f5;*/
    /*}*/
     /*.navbar.transparent.navbar-inverse .navbar-inner {*/
       /*background: rgba(0,0,0,0.4);*/
    /*}*/
    </style>
</head>
<body>
<div id="wrap">
<div class="container">

    <header>
        @include('includes.header')
    </header>

    <div id="main" class="row">

            @yield('content')

    </div>
    {{--<img src="img/9.jpg"/>--}}

</nav>
    <footer>
        @include('includes.footer')
    </footer>

</div>
</div>
</body>
</html>
