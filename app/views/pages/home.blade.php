@extends('layouts.default')
@section('content')
<style>
        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            /*width: 70%;*/
            margin: auto;
        }
    </style>
<div class="container-fluid bg-1 text-center">
    <br>
    {{--<h3>Librarium</h3>--}}
        {{--<img src="img/c3.jpg" alt="Book" class="img-responsive img-circle" style="display:inline" >--}}
        <h3 class="title">Librarium</h3>
</div>

<div class="container-fluid bg-2 text-center">
  <h3>What Am I?</h3>
  <br><br>

<p> Librarium is the apex body of the library system in India. Serving as a public library, it is a permanent repository of all documents published in India.</p>

<p>Librarium has a collection of rare documents.</p>

<p>Librarium has elaborate arrangements for physical conservation of books for posterity.</p>

<p>The website contains bibliographic information of a portion of the Librarium's holding with limited fields for ready access by users.</p>

<p>Arrangements have been made for registered users to view digitized books.</p>


</div>

<div class="container-fluid bg-3 text-center">
  <h3>Top Books</h3>
  <br>
<div class="row">
    <div class="col-sm-4">
      <p>Code Reading</p>
      <img src="img/c4.jpg" class="img-responsive imageClip" style="width:100%"  alt="Image">
    </div>
    <div class="col-sm-4">
      <p>Cloud Computing Networking</p>
      <img src="img/c2.jpg" class="img-responsive imageClip" style="width:100%"  alt="Image">
    </div>
    <div class="col-sm-4">
      <p>Book of Clouds</p>
      <img src="img/c3.jpg" class="img-responsive imageClip" style="width:100%"  alt="Image">
    </div>
</div>

    {{--<div id="myCarousel" class="carousel slide" data-ride="carousel">--}}
        {{--<!-- Indicators -->--}}
        {{--<ol class="carousel-indicators">--}}
            {{--<li data-target="#myCarousel" data-slide-to="0" class="active"></li>--}}
            {{--<li data-target="#myCarousel" data-slide-to="1"></li>--}}
            {{--<li data-target="#myCarousel" data-slide-to="2"></li>--}}
            {{--<li data-target="#myCarousel" data-slide-to="3"></li>--}}
        {{--</ol>--}}

        {{--<!-- Wrapper for slides -->--}}
        {{--<div class="carousel-inner" >--}}
            {{--<div class="item active">--}}
              {{--<div class="c1 slider-size"></div>--}}
                {{--<img class="peopleCarouselImg" src="img/9.jpg" alt="Chania" width="460" height="345">--}}
            {{--</div>--}}

            {{--<div class="item">--}}
              {{--<div  class="c2 slider-size"></div>--}}
                {{--<img class="peopleCarouselImg" src="img/def.jpg" alt="Chania" width="460" height="345">--}}
            {{--</div>--}}

            {{--<div class="item">--}}
              {{--<div  class="c3 slider-size"></div>--}}
                {{--<img class="peopleCarouselImg" src="img/def.jpg" alt="Chania" width="460" height="345">--}}
            {{--</div>--}}
            {{--<div class="item">--}}
              {{--<div  class="c4 slider-size"></div>--}}
                {{--<img class="peopleCarouselImg" src="img/def.jpg" alt="Chania" width="460" height="345">--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<!-- Left and right controls -->--}}
        {{--<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">--}}
            {{--<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>--}}
            {{--<span class="sr-only">Previous</span>--}}
        {{--</a>--}}
        {{--<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">--}}
            {{--<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>--}}
            {{--<span class="sr-only">Next</span>--}}
        {{--</a>--}}
    {{--</div>--}}
    {{--<div class="jumbotron">--}}
        {{--<h1>Welcome to Librarium</h1>--}}
    {{--</div>--}}
   {{--</div>--}}
@stop
