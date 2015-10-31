@extends("layouts.default")
@section("content")
<div class="container-fluid bg-1 text-center" >
<br><br>
  <h3 class="loginText">Contribute</h3>
<br><br>
<div class="container center-block login vertical-centre">
    {{ Form::open(array('files'=>true,'route'=>'book.store')) }}
            {{--<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>--}}
     <div class="form-group">
    {{ Form::label('username','Title',array('id'=>'','class'=>'text-center fonts')) }}
    {{ Form::text("BookName",'',array('class'=>'form-control text-center')) }}
     </div>
    <div class="form-group">
    {{ Form::label('username','Author',array('id'=>'author','class'=>'')) }}
    {{ Form::text("Author",'',array('class'=>'form-control text-center'))}}
    {{--{{ Form::label('fileName', 'Select Book PDF') }}--}}
     </div>
    <div class="form-group">
        {{ Form::label('username','Book',array('id'=>'author','class'=>'')) }}
    {{ Form::file('file','',array('id'=>'','class'=>'file')) }}
     </div>

    {{--{{ Form::label('image', 'Select Image') }}--}}
        <div class="form-group">
    {{ Form::label('username','Front Cover Image',array('id'=>'author','class'=>'')) }}
    {{ Form::file('image') }}
         </div>

        <div class="form-group">

    {{ Form::submit('Save',array('class'=>'btn btn-default loginBtn','onclick'=>'ajaxindicatorstart("uploading...please wait")')) }}

        <!-- reset buttons -->
    {{ Form::reset('Reset',array('class'=>'btn btn-default loginBtn')) }}
     </div>

    {{ Form::close() }}
    </div>
    </div>
@stop

