@extends("layouts.default")
@section("content")
    <h2 style="padding-left: 10px">Librarium</h2>
    {{ Form::open(array('class'=>'form-horizontal')) }}
    {{ $errors->first("password") }}<br />
    <div class="form-group">
    {{ Form::label("username", "Username",array('class'=>'control-label col-sm-2')) }}
        <div class="col-sm-10" style="width: 50%;">
    {{ Form::text("username", Input::old("username"),array('class'=>'form-control')) }}
            </div>
    </div>
    <div class="form-group">
    {{ Form::label("password", "Password",array('class'=>'control-label col-sm-2')) }}
        <div class="col-sm-10" style="width: 50%;">
    {{ Form::password("password",array('class'=>'form-control')) }}
    </div>
        </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        {{ Form::submit("Sign in",array('class'=>'btn btn-default')) }}
        </div>
    </div>
    {{ Form::close() }}



@stop
