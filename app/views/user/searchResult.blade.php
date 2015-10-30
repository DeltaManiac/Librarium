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
                                <span class="glyphicon glyphicon-download-alt"></span> Download
                            </a></p>
                        <p><a href="{{ URL::to('book/'.$book->id.'/edit') }}" class="btn btn-info btn-lg">
                                <span class="glyphicon glyphicon-eye-open"></span> Preview
                            </a></p>
                    </div>
                </div>
            @endforeach

        </div>

    </div>

@stop
