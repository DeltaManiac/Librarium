@extends("layouts.default")
@section("content")
<div class="container-fluid bg-1 text-center" >
  <h3 class="uploadText">Contribute</h3>

<div class="container center-block login vertical-centre">
    {{ Form::open(array('files'=>true,'route'=>'book.store')) }}
            {{--<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>--}}
     <div class="form-group">
    {{ Form::label('username','Title',array('id'=>'','class'=>'text-center fonts')) }}
    {{ Form::text("BookName",'',array('class'=>'form-control text-center')) }}
     </div>
    {{ Form::label('username','Author',array('id'=>'author','class'=>'')) }}
    {{ Form::text("Author",'',array('class'=>'form-control text-center'))}}
    {{--{{ Form::label('fileName', 'Select Book PDF') }}--}}

    {{ Form::file('file','',array('id'=>'','class'=>'file')) }}

    {{--{{ Form::label('image', 'Select Image') }}--}}
    {{ Form::file('image') }}
    {{ Form::submit('Save') }}

        <!-- reset buttons -->
    {{ Form::reset('Reset') }}

    {{ Form::close() }}
    </div>
    </div>
@stop

