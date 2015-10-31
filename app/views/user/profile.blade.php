@extends("layouts.default")
@section("content")
<style>
    h2 {
        color:black;
    }
    p {
        color:black;
    }
    .tiles{
        padding-top: 40px;
        padding-left: 15px;
        padding-right: 15px;
    }
</style>
    <div class="container-fluid text-center bg-1">
        <div class="row text-center tiles">
            @if(!empty($books))
                @foreach($books as $book)
                <div class="col-sm-4">
                    <div class="thumbnail">
                @if($book->image)
                    <img src="/download/{{ $book->image }}">
                @else
                    <img src="img/newyork.jpg"/>
                @endif
                <p><strong>{{$book->bookName}} written by {{ $book->author }}</strong></p>
                    <p><a href="{{ URL::to('book/'.$book->id) }}" class="btn btn-info btn-lg">
                        <span class="glyphicon glyphicon-cloud-download"></span> Download
                    </a></p>
                    <p><a href="{{ URL::to('book/'.$book->id.'/edit') }}" class="btn btn-info btn-lg">
                            <span class="glyphicon glyphicon-eye-open"></span> Preview
                        </a></p>
                </div>
                </div>
            @endforeach
            @else
                <br>
                <br>
                <br>
                <br>
                <h  class="loginText text-center" style="font-size: 40px">Ooops.. No Books Found</h>
                <h3 id="js-contact-message"  class="loginText text-center"></h3>
                <br>
                <h1 ><a style ="color: white;     text-decoration: none !important;     font-size: 80px; text-shadow: 0px 2px 3px #555;" class="hvr-grow " href="{{ URL::to('upload') }}"><span class="glyphicon glyphicon-cloud-upload loginText"  style="font-size: 75px"></span><br>Upload</a></h1>
            @endif
            </div>

        </div>

@stop
