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
        #js-contact-message:after {
            content: '\1F622';
            color:white; /* yellow: not enough contrast with white background */
        }
    </style>
    <div class="container-fluid text-center bg-1">
        <div class="row text-center tiles">
            @if($books)
            @foreach($books as $book)
                <div class="col-sm-4">
                    <div class="thumbnail">
                        @if($book->image)
                            <img style="width: 100%;height: 650px; padding: 12px 25px 12px 25px;" src="/download/{{ $book->image }}">
                        @else
                            <img src="http://librarium.mo.sap.corp:1080/img/default.jpg"/>
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
            <br>
                <h4  class="loginText text-center">Ooops.. No Books Found</h4>
                <h4 id="js-contact-message"  class="loginText text-center"></h4>
            @endif
        </div>

    </div>

@stop
