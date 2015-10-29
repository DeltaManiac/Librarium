@extends("layouts.default")
@section("content")
    {{ Form::open(array('files'=>true,'route'=>'book.store')) }}
    {{ Form::label('file','File',array('id'=>'','class'=>'')) }}
    {{ Form::text("BookName") }}
    {{ Form::file('file','',array('id'=>'','class'=>'')) }}
    {{ Form::label('image', 'Select Image') }}
    {{ Form::file('image') }}
    {{ Form::text("Author") }}
    {{ Form::submit('Save') }}

        <!-- reset buttons -->
    {{ Form::reset('Reset') }}

    {{ Form::close() }}
@stop
