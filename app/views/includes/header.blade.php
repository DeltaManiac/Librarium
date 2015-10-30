<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header " >
        <a class="navbar-brand" href="/index.php"><span class="glyphicon glyphicon-home	"></span></a>
    </div>
    <div>
      <ul class="nav navbar-nav navbar-right">
        {{--<li class="active"><a href="#"></a></li>--}}
         @if(Auth::user())
              <li><a href="{{ URL::to('profile') }}"><span class="glyphicon glyphicon-th"></span> Books </a></li>
              <li>
                  <form id="search-form" class="navbar-form" action="/search" method="get" role="search">
                      <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                          <div class="input-group-btn">
                              <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                          </div>
                      </div>
                  </form>
              </li>
            <li><a href="{{ URL::to('upload') }}"><span class="glyphicon glyphicon-cloud-upload	"></span> Upload </a></li>
            <li><a href="{{ URL::to('logout') }}"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
          @else
            <li><a href="{{ URL::to('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
         @endif
      </ul>
    </div>
  </div>
</nav>
