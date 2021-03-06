<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header " >
            <a class="navbar-brand" href="/index.php"><span class="glyphicon glyphicon-home    "></span></a>
        </div>
        <div>
            <ul class="nav navbar-nav navbar-right">
                {{--<li class="active"><a href="#"></a></li>--}}
                @if(Auth::user())
                <li>
                    {{--<form id="search-form" class="navbar-form" action="/search" method="get" role="search">--}}
                    {{--<div class="input-group">--}}
                    {{--<input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">--}}
                    {{--<div class="input-group-btn">--}}
                    {{--<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</form>--}}
                    <form action="search" class="search-form">
                        <div class="form-group has-feedback">
                            <label for="search" class="sr-only">Search</label>
                            <input type="text" class="form-control" name="srch-term" id="search" placeholder="search">
                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                        </div>
                    </form>
                </li>
                <li><a href="{{ URL::to('profile') }}"><span class="glyphicon glyphicon-th"></span> Books </a></li>
                <li><a href="{{ URL::to('upload') }}"><span class="glyphicon glyphicon-cloud-upload    "></span> Upload </a></li>
                <li><a href="{{ URL::to('logout') }}"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
                @else
                    <li><a href="{{ URL::to('registration') }}"><span class="glyphicon glyphicon-user"></span> SignUp </a></li>
                <li><a href="{{ URL::to('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
