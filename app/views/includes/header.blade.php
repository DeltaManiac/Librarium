<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header " >
        <a class="navbar-brand" href="/#"><span class="glyphicon glyphicon-home	"></span></a>
    </div>
    <div>
      <ul class="nav navbar-nav navbar-right">
        {{--<li class="active"><a href="#"></a></li>--}}
         @if(Auth::user())
            <li><a href="{{ URL::to('upload') }}"><span class="glyphicon glyphicon-cloud-upload	"></span> Upload </a></li>
            <li><a href="{{ URL::to('logout') }}"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
         @else
            <li><a href="{{ URL::to('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
         @endif
      </ul>
    </div>
  </div>
</nav>
