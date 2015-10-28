@extends("layouts.default")
@section("content")
    {{ Form::open() }}
    {{ $errors->first("password") }}<br />
    {{ Form::label("username", "Username") }}
    {{ Form::text("username", Input::old("username")) }}
    {{ Form::label("password", "Password") }}
    {{ Form::password("password") }}
        {{ Form::submit("x") }}
    {{ Form::close() }}
@stop
