@extends("layouts.default")
@section("content")
    {{ Form::open(array('files'=>true,'route'=>'book.store')) }}
    {{ Form::label('file','Enter Book Name : ',array('id'=>'','class'=>'')) }}
    {{ Form::text("BookName") }}
    {{ Form::label('file','Enter Author Name : ',array('id'=>'','class'=>'')) }}
    {{ Form::text("Author") }}
    {{ Form::label('fileName', 'Select Book PDF') }}
    {{ Form::file('file','',array('id'=>'','class'=>'')) }}
    {{ Form::label('image', 'Select Image') }}
    {{ Form::file('image') }}
    {{ Form::submit('Save') }}

        <!-- reset buttons -->
    {{ Form::reset('Reset') }}

    {{ Form::close() }}
@stop

