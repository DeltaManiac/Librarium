@extends("layouts.default")
@section("content")
    <h2>Hello {{ Auth::user()->username }}</h2>
    @foreach($books as $book)
        @if($book->image)
            <img src="/download/{{ $book->image }}">
        @else
            <img src="img/def.jpg"/>
            @endif
        <p>This book name is {{$book->bookName}} written by {{ $book->author }}</p>
        <p> <a href="{{ URL::to('book/'.$book->id) }}">This download here</a></p>
    @endforeach
    <p>Welcome to your sparse profile page.</p>
@stop
