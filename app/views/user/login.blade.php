@extends("layouts.default")
@section("content")

<div class="container-fluid bg-1 text-center" >
    <br>
    <br>
  <h3 class="loginText">Login</h3>
  <br><br>
  <div class="container center-block login vertical-centre">
  <div>
  {{ Form::open(array('class'=>'form-horizontal')) }}
          {{ $errors->first("username") }}
            <br>
        {{ $errors->first("password") }}
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        {{ Form::text("username", Input::old("username"),array('class'=>'form-control text-center','placeholder'=>'username')) }}
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
        {{ Form::password("password",array('class'=>'form-control text-center','placeholder'=>'password')) }}
                {{--<span class="input-group-addon"><i class="glyphicon glyphicon-log-in"></i></span>--}}
                <br>
       {{ Form::submit("Sign in",array('class'=>'btn btn-default')) }}
  </div>

  </div>

</div>

    {{--<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">--}}
        {{--<div class="panel panel-info" >--}}
            {{--<div class="panel-heading">--}}
                {{--<div class="panel-title">Librarium SignIn</div>--}}
            {{--</div>--}}
            {{--</div>--}}
        {{--<div style="padding-top:30px" class="panel-body" >--}}

            {{--<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>--}}
            {{--{{ Form::open(array('class'=>'form-horizontal')) }}--}}
            {{--{{ $errors->first("password") }}<br />--}}
            {{--<div style="margin-bottom: 25px" class="input-group">--}}
                {{--<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>--}}
                {{--{{ Form::text("username", Input::old("username"),array('class'=>'form-control','placeholder'=>'username')) }}--}}
            {{--</div>--}}
            {{--<div style="margin-bottom: 25px" class="input-group">--}}
                {{--<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>--}}
                {{--{{ Form::password("password",array('class'=>'form-control','placeholder'=>'password')) }}--}}
                {{--</div>--}}
            {{--<div style="margin-top:10px" class="form-group">--}}
            {{--<div class="col-sm-12 controls">--}}
                {{--{{ Form::submit("Sign in",array('class'=>'btn btn-default')) }}--}}
            {{--</div>--}}
                {{--</div>--}}

    {{--</div>--}}

    {{--{{ Form::close() }}--}}
@stop
