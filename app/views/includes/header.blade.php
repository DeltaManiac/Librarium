<div class="navbar">
    <div class="navbar-inner">
        <a id="logo" href="/">Single Malt</a>
        <ul class="nav">
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            @if(Auth::user())
                <li><a href="{{ URL::to('logout') }}">Logout</a></li>
            @else
                <li><a href="{{ URL::to('login') }}">Login</a></li>
            @endif
        </ul>
    </div>
</div>
