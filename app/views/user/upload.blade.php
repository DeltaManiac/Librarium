@extends("layouts.default")
@section("content")
<div class="container-fluid bg-1 text-center" >
  <h3 class="uploadText">Contribute</h3>

<div class="container center-block login vertical-centre">
    {{ Form::open(array('files'=>true,'route'=>'book.store')) }}
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
     <div class="form-group">
    {{ Form::label('username','Title ',array('id'=>'','class'=>'     text-center')) }}
    {{ Form::text("BookName") }}
     </div>
    {{ Form::label('username','Author : ',array('id'=>'','class'=>'')) }}
    {{ Form::text("Author") }}
    {{--{{ Form::label('fileName', 'Select Book PDF') }}--}}
    {{--<span class="btn btn-default btn-file">--}}
    {{--{{ Form::file('file','',array('id'=>'','class'=>'loginBtn')) }}--}}
    {{--<span class="btn btn-default btn-file">--}}
        {{--Browse <input type="file">--}}
    {{--</span>--}}
    {{----}}

<div style="position:relative;">
        <a class='btn btn-primary' href='javascript:;'>
            Choose File...
            <input type="file" style='padding-top: 17px;position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file_source" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
        </a>
        &nbsp;
        <span class='label label-info text-center' id="upload-file-info"></span>
</div>
    {{--</span>--}}
    {{--{{ F    orm::label('image', 'Select Image') }}--}}
    {{ Form::file('image') }}
    {{ Form::submit('Save') }}

        <!-- reset buttons -->
    {{ Form::reset('Reset') }}

    {{ Form::close() }}
    </div>
    </div>
@stop

