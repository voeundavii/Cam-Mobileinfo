@extends('layouts.app')

@section('content')
<div class="container">
<div id="carouselExampleIndicators" class="carousel slide container" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{Voyager::image(setting('slider.slider1'))}}" width="100%" height="400px"  alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{Voyager::image(setting('slider.slider2'))}}" width="100%" height="400px" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{Voyager::image(setting('slider.slider3'))}}" width="100%" height="400px" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" width="100%" height="400px" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Hello, world!</h1>
      <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
    </div>
  </div>

<!-- Mobile -->

  <div class="container">
    <!-- Example row of columns -->
    <h1>Best Mobile Oparator Company in Cambodia</h1>
    <div class="row">
      <div class="col-md-3 col-sm-12 py-2">
          <a href="/smart">
            <img src="{{Voyager::image(setting('mobile.mobile1'))}}" width="100%" height="140px"  style="border-radius:10px" alt="">
          </a>
      </div>
      <div class="col-md-3 col-sm-12 py-2">
          <a href="/cellcard">
            <img src="{{Voyager::image(setting('mobile.mobile2'))}}" width="100%" height="140px"  style="border-radius:10px" alt="">
          </a>
      </div>
      <div class="col-md-3 col-sm-12 py-2">
          <a href="/metfone">
            <img src="{{Voyager::image(setting('mobile.mobile3'))}}" width="100%" height="140px"  style="border-radius:10px" alt="">
          </a>
      </div>
      <div class="col-md-3 col-sm-12 py-2">
          <a href="/seatel">
            <img src="{{Voyager::image(setting('mobile.mobile4'))}}" width="100%" height="140px"  style="border-radius:10px" alt="">
          </a>
      </div>

    </div>

    <hr>

  </div> <!-- /container -->
</div>
@endsection
